#!/home/colour/development/environments/colour2.7/bin/python

# Vagrant: /usr/bin/env python

import cgi

print("Content-Type: text/html\n\n")

try:
    # Vagrant:
    #
    # import sys
    # 
    # sys.path.append(
    #     '/home/vagrant/anaconda/envs/python2.7/lib/python2.7/site-packages')
    # sys.path.append('/colour-science/colour')

    try:
        from collections import OrderedDict
    except ImportError:
        from ordereddict import OrderedDict

    import numpy as np
    import colour


    def RGB_to_RGB(c_i, c_o, transform):
        cat = colour.chromatic_adaptation_matrix_VonKries(
            colour.xy_to_XYZ(c_o.whitepoint),
            colour.xy_to_XYZ(c_i.whitepoint),
            transform)

        return (np.dot(c_i.XYZ_to_RGB_matrix,
                       np.dot(cat, c_o.RGB_to_XYZ_matrix)))

    def HTML_format_matrix(M, precision=7):
        # Handling whitepoint tuples.
        if type(M) is tuple:
            M = np.array(M).reshape(1, 2)

        html = '<table class="matrix-table">'
        shape = M.shape
        for i in range(shape[0]):
            html += '<tr class="matrix-row">'
            for j in range(shape[1]):
                v = M[i][j]
                pretty = '{{: 0.{}f}}'.format(precision).format(
                    v) if precision is not None else v
                html += '<td class="matrix-column">{0}</td>'.format(pretty)
            html += '</tr>'
        html += '</table>'
        return html


    form = cgi.FieldStorage()

    C_I_SELECT_VALUE = form.getvalue('c_i_select') or 0
    C_I_SELECT_VALUE = int(C_I_SELECT_VALUE)
    C_O_SELECT_VALUE = form.getvalue('c_o_select') or 0
    C_O_SELECT_VALUE = int(C_O_SELECT_VALUE)
    CAT_SELECT_VALUE = form.getvalue('cat_select') or 0
    CAT_SELECT_VALUE = int(CAT_SELECT_VALUE)

    def html_select(name, items, selected):
        html = '<select name="{0}" onchange="this.form.submit()">'.format(name)
        for i, item in enumerate(items):
            if selected == i:
                html += '<option value="{0}" selected>{1}</option>'.format(
                    i, item)
            else:
                html += '<option value="{0}">{1}</option>'.format(i, item)
        html += '</select>'
        return html

    COLOURSPACES = OrderedDict(
        (k, v) for k, v in sorted(colour.RGB_COLOURSPACES.items()))
    CAT = OrderedDict((k, v) for k, v in
                      sorted(colour.CHROMATIC_ADAPTATION_TRANSFORMS.items()))

    html = """
        <!DOCTYPE html>
        <html lang="en" xmlns="http://www.w3.org/1999/html">
        <head>
            <meta charset="utf-8">
            <title>RGB Colourspace Models Transformation Matrices</title>
            <link rel="stylesheet" type="text/css" href="/css/cgi-form.css">
            <link href="http://fonts.googleapis.com/css?family=Lato" id="google-font-selector" rel="stylesheet" type="text/css">
        </head>
        <body>
        {0}
        </body>
        </html>"""

    form = """
        <form id="form" class="form" action="/cgi-bin/rgb_colourspaces_transformation_matrices.cgi" method="post">
            <h1>RGB Colourspace Models Transformations Matrices</h1>
            <p>
                <a href="http://colour-science.org/">colour-science.org</a>
            </p>
            <div class="content">
                <div class="introduction">
                    This form computes the colour transformation matrix from the <em>Input Colourspace</em> to the <em>Output Colourspace</em> using the given <em>Chromatic Adaptation Transform</em>.
                </div>
                <div id="section0" >
                    <div class="field">
                        <label>Input Colourspace</label>
                        {0}
                    </div>
                    <div class="field">
                        <label>Output Colourspace</label>
                        {1}
                    </div>
                    <div class="field">
                        <label>Chromatic Adaptation Transform</label>
                        {2}
                    </div>
                    <div class="field">
                        <label>RGB Transformation Matrix</label>
                        {3}
                    </div>
                </div>
            </div>
        </form>""".format(
        html_select('c_i_select', COLOURSPACES.keys(), C_I_SELECT_VALUE),
        html_select('c_o_select', COLOURSPACES.keys(), C_O_SELECT_VALUE),
        html_select('cat_select', CAT.keys(), CAT_SELECT_VALUE),
        HTML_format_matrix(
            RGB_to_RGB(COLOURSPACES[COLOURSPACES.keys()[
                C_I_SELECT_VALUE]],
                       COLOURSPACES[COLOURSPACES.keys()[
                           C_O_SELECT_VALUE]],
                       CAT.keys()[CAT_SELECT_VALUE])))

    print(html.format(form))

except:
    cgi.print_exception()
