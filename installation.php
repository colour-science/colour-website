<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Installation Guide</title>

    <?php include ("common_header_attributes.php"); ?>

</head>

<body>
<?php include_once("analytics_tracking.php") ?>

<?php include ("navigation.php"); ?>

<!-- >>> Content -->
<div class="container">
    <div class="row">
        <!-- >>> Center -->
        <div class="col-md-9">
            <h2>Installation Guide</h2>
            <br/>

            <p>The following primary dependencies are needed:</p>
            <ul>
                <li>
                    <a href="https://www.python.org/download/releases/">Python 2.7</a> or
                    <a href="https://www.python.org/download/releases/">Python 3.4</a>
                </li>
                <li>
                    <a href="http://www.numpy.org/">NumPy</a>
                </li>
                <li>
                    <a href="http://matplotlib.org/">Matplotlib</a>
                </li>
            </ul>
            <p>Some API capabilities or building the documentation requires:</p>
            <ul>
                <li>
                    <a href="http://www.scipy.org/">SciPy</a>
                </li>
                <li>
                    <a href="sphinx-doc.org">Sphinx</a>
                </li>
            </ul>
            <p>
                <strong><span class="text-primary">Colour</span></strong> can be easily installed from the
                <a href="https://pypi.python.org/pypi/colour-science/"> Python Package Index </a>by issuing this command in a shell:
            </p>
            <pre>» pip install colour-science</pre>

            <p>
                Alternatively, you can also install directly from
                <a href="http://github.com/color-science/colour">Github</a> source repository:
            </p>
            <pre>
» git clone git://github.com/color-science/colour.git
» cd colour
» python setup.py install</pre>

            <?php include("disqus.php") ?>

        </div>
        <!-- <<< Center -->

        <?php include ("sidebar.php"); ?>

    </div>
</div>
<!-- <<< Content -->


<?php include ("footer.php"); ?>

<?php include ("common_body_attributes.php"); ?>

</body>
</html>
