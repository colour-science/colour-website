<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>The first public release of Colour is available!</title>

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

            <h2>Tuesday, 2 September 2014</h2>

            <p>
                We are thrilled to announce that after many months of work, the
                first public release of
                <a href="https://github.com/colour-science/colour/releases/tag/v0.3.0">Colour</a> is
                available! Although this is an alpha release, the code is well
                tested and covered and should be fairly stable.
            </p>

            <p>You can view the highlights of the project on the
                <a href="http://colour-science.org/features.php">features</a>
                page.
            </p>

            <p>Please follow the
                <a href="http://colour-science.org/installation.php">installation
                    guide</a> in order to retrieve the code or click the big
                blue button on the right sidebar.
            </p>

            <p>
                We have a few
                <a href="http://nbviewer.ipython.org/github/colour-science/colour-ipython/blob/master/notebooks/colour.ipynb"
                   class="fa fa-book">&nbsp;IPython Notebooks</a> already done
                to cover the theoretical aspect of the API.
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

<?php include("iframe_resize.php"); ?>

</body>
</html>
