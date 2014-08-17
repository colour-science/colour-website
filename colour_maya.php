<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour - Maya</title>

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
            <h2>Colour - Maya</h2>
            <br/>

            <p>
                <strong><span class="text-primary">Colour - Maya</span></strong> provides an implementation
                of
                <strong><span class="text-primary">Colour</span></strong> within
                <a href="http://www.autodesk.co.uk/products/maya/">Autodesk Maya</a>.
            </p>

            <h3>Features</h3>

            <p>The following features are available:</p>
            <ul>
                <li>
                    RGB Colourspaces plotting.
                </li>
            </ul>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/3pTn2p4tRlQ"></iframe>
            </div>

            <h3>Examples</h3>

            <p>Comparing
                <em><span class="text-info">ProPhoto RGB</span></em> colourspace and
                <em><span class="text-info">sRGB</span></em> colourspace volumes:
            </p>
            <img class="img-responsive" src="http://thomasmansencal.com/Sharing/Colour/Support/Pictures/Maya_sRGB_ProPhoto_RGB_CIE_Lab_001.jpg"/>
            <br/>

            <p>
                The wide
                <em><span class="text-info">ACES RGB</span></em> colourspace against
                <em><span class="text-info">sRGB</span></em>
                colourspace:
            </p>
            <img class="img-responsive" src="http://thomasmansencal.com/Sharing/Colour/Support/Pictures/Maya_sRGB_ACES_RGB_CIE_Lab_001.jpg"/>

            <h3>Downloads</h3>
            <ul>
                <li>
                    <a href="http://github.com/colour-science/colour-maya">colour-maya on Github</a>
                </li>
            </ul>

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
