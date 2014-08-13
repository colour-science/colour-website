<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Colour: Colour Science for Python</title>

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
            <div>
                <h2>Colour Science for Python</h2>
                <br/>

                <p>
                    <strong><span class="text-primary">Colour</span></strong> is a
                    <a href="https://www.python.org/">Python</a> colour science package implementing a
                    comprehensive number of colour theory transformations and algorithms.
                </p>

                <p>
                    It is open source and freely available and under the
                    <a href="http://opensource.org/licenses/BSD-3-Clause">New BSD License</a> terms.
                </p>
            </div>
            <div>
                <h2>Overview</h2>
                <br/>

                <p>
                    Most of the public
                    <strong><span class="text-primary">Colour</span></strong> API is available from the
                    <em><span class="text-info">colour</span></em> namespace.
                </p>

                <p>
                    For example, calculating the colour rendering index of light source can be done as follows:
                </p>

                <div class="embed-responsive" style="min-height: 95px;">
                    <iframe class="embed-responsive-item" src="ipython/snippets/colour_cri_snippet.html"></iframe>
                </div>
                <p>
                    The correlated colour temperature of a *CIE Standard Illuminant* can be calculated easily:
                </p>

                <div class="embed-responsive" style="height: 95px;">
                    <iframe class="embed-responsive-item" src="ipython/snippets/colour_cct_snippet.html"></iframe>
                </div>
                <p>
                    <strong><span class="text-primary">Colour</span></strong> also implements various plotting functions thanks to
                    <a href="http://matplotlib.org/">Matplotlib</a>:
                </p>

                <div class="embed-responsive" style="height: 460px;">
                    <iframe class="embed-responsive-item" src="ipython/snippets/colour_visible_spectrum_plot_snippet.html"></iframe>
                </div>
            </div>
            <div>
                <h2>Latest News</h2>
                Nothing to see yet!
            </div>
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
