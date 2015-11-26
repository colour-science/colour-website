<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour 0.3.4 is available!</title>

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

            <h2>Tuesday, 27 January 2015</h2>

            <br/>

            <p>
                <a href="https://github.com/colour-science/colour/releases/tag/v0.3.4">Colour 0.3.4</a> is
                available!
            </p>

            <p>
                The most notable <a
                    href="https://github.com/colour-science/colour/releases/tag/v0.3.4">
                features</a> are:
            </p>
            <ul>
                <li>
                    Various RGB colourspace models updates.
                </li>
                <li>
                    Support for various Log conversion functions.
                </li>
                <li>
                    Multi-process Monte Carlo brute force RGB colourspace volume computation.
                </li>
            </ul>

            <p>
                We have continued
                working toward code optimisation and vectorisation. Most of the API is now
                prototyped in that regard
                <a href="https://docs.google.com/spreadsheets/d/10O344GaDbZaS9dNLIhP-uSPIgJXEMgz0MKEPPECtTy0/edit?usp=sharing">with promising performance boost</a>.
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
