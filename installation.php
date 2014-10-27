<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Installation Guide</title>

    <?php include("common_header_attributes.php"); ?>

</head>

<body>
<?php include_once("analytics_tracking.php") ?>

<?php include("navigation.php"); ?>

<!-- >>> Content -->
<div class="container">
    <div class="row">
        <!-- >>> Center -->
        <div class="col-md-9">
            <h2>Installation Guide</h2>
            <br/>

            <h3>Dependencies</h3>

            <p>
                <strong><span class="text-primary">Colour</span></strong>
                requires
                various dependencies in order to run. Depending your usage you
                may not need to install all of them.
            </p>
            <h4>Primary Dependencies</h4>
            <ul>
                <li>
                    <a href="https://www.python.org/download/releases/">Python
                        2.6</a>,
                    <a href="https://www.python.org/download/releases/">Python
                        2.7</a> or
                    <a href="https://www.python.org/download/releases/">Python
                        3.4</a>
                </li>
                <li>
                    <a href="http://www.numpy.org/">NumPy</a>
                </li>
            </ul>
            <strong><span class="text-primary">Python 2.6</span></strong>
            and
            <strong><span class="text-primary">Python 2.7</span></strong>
            require the following backported dependencies:
            <ul>
                <li>
                    <a href="https://pypi.python.org/pypi/backports.functools_lru_cache/1.0.1">Backports.functools_lru_cache</a>,
                </li>
            </ul>
            <strong><span class="text-primary">Python 2.6</span></strong>
            requires the following backported
            dependencies:
            <ul>
                <li>
                    <a href="https://pypi.python.org/pypi/ordereddict">Ordereddict</a>,
                </li>
                <li>
                    <a href="https://pypi.python.org/pypi/unittest2">Unittest2</a>
                </li>
            </ul>
            <h4>Optional Features Dependencies</h4>
            <ul>
                <li>
                    <a href="http://www.scipy.org/">SciPy</a>
                </li>
            </ul>
            <h4>Optional Figures Plotting Dependencies</h4>
            <ul>
                <li>
                    <a href="http://matplotlib.org/">Matplotlib</a>
                </li>
            </ul>
            <h4>Testing Suite Dependencies</h4>
            <ul>
                <li>
                    <a href="https://pypi.python.org/pypi/coverage">Coverage</a>
                </li>
                <li>
                    <a href="https://pypi.python.org/pypi/flake8">Flake8</a>
                </li>
                <li>
                    <a href="https://pypi.python.org/pypi/mock">Mock</a>
                </li>
                <li>
                    <a href="https://nose.readthedocs.org/en/latest">Nose</a>
                </li>
            </ul>
            <h4>Documentation Building Dependencies</h4>
            <ul>
                <li>
                    <a href="https://sphinx-doc.org">Sphinx</a>
                </li>
                <li>
                    <a href="https://pypi.python.org/pypi/sphinxcontrib-napoleon">Sphinxcontrib-napoleon</a>
                </li>
                <li>
                    <a href="https://pypi.python.org/pypi/sphinx-bootstrap-theme">Sphinx-bootstrap-theme</a>
                </li>
            </ul>

            <h3>Pypi</h3>

            <p>
                <strong><span class="text-primary">Colour</span></strong> can
                be easily installed from the
                <a href="https://pypi.python.org/pypi/colour-science/"> Python
                    Package Index </a>by issuing this command
                in a shell:
            </p>
            <pre>» pip install colour-science</pre>

            <h3>Github</h3>

            <p>
                Alternatively, you can also install directly from
                <a href="http://github.com/color-science/colour">Github</a>
                source repository:
            </p>
            <pre>
» git clone git://github.com/color-science/colour.git
» cd colour
» pip install .</pre>
            <p>The optional features dependencies are installed as follows:</p>
            <pre>» pip install -e .[optional]</pre>
            <p>The figures plotting dependencies are installed as follows:</p>
            <pre>» pip install -e .[plotting]</pre>
            <p>The tests suite dependencies are installed as follows:</p>
            <pre>» pip install -e .[tests]</pre>
            <p>The documentation building dependencies are installed as
                follows:</p>
            <pre>» pip install -e .[docs]</pre>

            <h3>Vagrant</h3>

            <p>An easy way to get all the pre-requisites at once is to use our
                <a href="https://github.com/colour-science/colour-vagrant">colour-vagrant</a>
                environment for
                <a href="https://www.vagrantup.com/">Vagrant</a>.
            </p>

            <p>Please refer to the dedicated blog post for more details about
                its deployment:
                <a href="blog_pycharm_vagrant_fabric_anaconda.php">PyCharm,
                    Vagrant, Fabric & Anaconda</a>
            </p>
            <?php include("disqus.php") ?>

        </div>
        <!-- <<< Center -->

        <?php include("sidebar.php"); ?>

    </div>
</div>
<!-- <<< Content -->


<?php include("footer.php"); ?>

<?php include("common_body_attributes.php"); ?>

</body>
</html>
