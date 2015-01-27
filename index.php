<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colour: Colour Science for Python</title>

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
            <div>
                <h2>Colour Science for Python</h2>
                <br/>

                <p>
                    <strong><span class="text-primary">Colour</span></strong>
                    is a
                    <a href="https://www.python.org/">Python</a> colour science
                    package implementing a
                    comprehensive number of colour theory transformations and
                    algorithms.
                </p>

                <p>
                    It is open source and freely available and under the
                    <a href="http://opensource.org/licenses/BSD-3-Clause">New
                        BSD License</a> terms.
                </p>
            </div>
            <div>
                <h2>Overview</h2>
                <br/>

                <p>
                    Most of the public
                    <strong><span class="text-primary">Colour</span></strong>
                    API is available from the
                    <em><span class="text-info">colour</span></em> namespace.
                </p>

                <p>
                    For example, calculating the colour rendering index of
                    light source can be done as follows:
                </p>

                <iframe src="ipython/snippets/colour_cri_snippet.html"
                        width="100%" scrolling="no" frameBorder="0"></iframe>

                <p>
                    The correlated colour temperature of a CIE Standard
                    Illuminant can be calculated easily:
                </p>

                <iframe src="ipython/snippets/colour_cct_snippet.html"
                        width="100%" scrolling="no" frameBorder="0"></iframe>

                <p>
                    <strong><span class="text-primary">Colour</span></strong>
                    also implements various plotting functions
                    thanks to
                    <a href="http://matplotlib.org/">Matplotlib</a>:
                </p>

                <iframe src="ipython/snippets/colour_visible_spectrum_plot_snippet.html"
                        width="100%" scrolling="no" frameBorder="0"></iframe>
            </div>
            <div>
                <h2>Latest News</h2>

                <h3>Tuesday, 27 January 2015</h3>

                <h4>
                    <a href="news_2015_01_27.php">Colour 0.3.4 is available!</a>
                </h4>

                <h3>Tuesday, 28 October 2014</h3>

                <h4>
                    <a href="news_2014_10_28.php">Colour 0.3.3 is available!</a>
                </h4>

                <h3>Tuesday, 2 September 2014</h3>

                <h4>
                    <a href="news_2014_09_02.php">The first public release of Colour is available!</a>
                </h4>
            </div>

            <?php include("disqus.php") ?>

        </div>
        <!-- <<< Center -->

        <?php include("sidebar.php"); ?>

    </div>
</div>
<!-- <<< Content -->


<?php include("footer.php"); ?>

<?php include("common_body_attributes.php"); ?>

<?php include("iframe_resize.php"); ?>

</body>
</html>
