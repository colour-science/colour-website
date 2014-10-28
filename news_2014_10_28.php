<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour 0.3.3 is available!</title>

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

            <h2>Tuesday, 28 October 2014</h2>

            <p>
                <a href="https://github.com/colour-science/colour/releases/tag/v0.3.3">Colour 0.3.3</a> is
                available!
            </p>

            <p>
                We would like to thanks <a
                    href="https://github.com/canavandl">Luke Canavan</a> and <a
                    href="https://github.com/sagland">Steve Agland</a> for their contributions and help.
            </p>

            <p>
                The most notable <a
                    href="https://github.com/colour-science/colour/releases/tag/v0.3.3">
                features</a> are:
            </p>
            <ul>
                <li>
                    New chromatic adaptation models:
                    <ul>
                        <li>
                            CMCCAT2000
                        </li>
                        <li>
                            CIE 1994
                        </li>
                        <li>
                            Fairchild (1990)
                        </li>
                    </ul>

                </li>
                <li>
                    Corresponding chromaticities with figures
                </li>
                <li>
                    Over 50 new light sources relative spectral power distributions
                </li>
                <li>
                    Whiteness computation with the following methods:
                    <ul>
                        <li>Berger (1959)</li>
                        <li>Taube (1960)</li>
                        <li>Stensby (1968)</li>
                        <li>ASTM 313</li>
                        <li>Ganz and Griesser (1979)</li>
                        <li>CIE 2004</li>
                    </ul>
                </li>
                <li>
                    Luminous Flux computation
                </li>
                <li>
                    IES TM-27-14 spectral data files I/O
                </li>
                <li>
                    IPT colourspace model computations
                </li>
                <li>
                    Colour Quality Scale computation and figures
                </li>
                <li>
                    Reflectance recovery using Smits (1999) method
                </li>
                <li>
                    Bibliography using APA 6 citation style
                </li>
            </ul>

            <p>
                A lot of object names have been changed, especially the ones
                featuring an author name that are now partially title-cased.
                Please take a look at the
                <a href="https://github.com/colour-science/colour/releases/tag/v0.3.3">release page</a> for exact details.
            </p>

            <p>
                Michael and myself won't have too much time in the coming weeks,
                thus the project may look slightly stalled. Still, we have started
                working toward the next major milestone which will be centered
                around code optimisation and vectorisation. The initial results
                are exciting with computations speed
                <a href="https://docs.google.com/spreadsheets/d/10O344GaDbZaS9dNLIhP-uSPIgJXEMgz0MKEPPECtTy0/edit?usp=sharing">being over 95 times faster on average</a>!
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
