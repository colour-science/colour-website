<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Utilities</title>

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
            <h2>Utilities</h2>

            <br/>

            <h4>
                <a href="cgi-bin/rgb_colourspace_models_transformation_matrices.cgi">RGB Colourspace Models Transformations Matrices</a>
            </h4>

            <p>
                Computes the colour transformation matrix between the given
                <em>RGB Colourspace Models</em> using the given
                <em>Chromatic Adaptation Transform</em>.
            </p>

            <br/>

            <h4>
                <a href="cgi-bin/rgb_colourspace_models_derivation.cgi">RGB Colourspace Models Derivation</a>
            </h4>

            <p>
                Computes the <em>Normalised Primary Matrix</em> of the given
                <em>RGB Colourspace Model</em> using the given
                <em>Illuminant</em>.
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
