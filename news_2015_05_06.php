<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour 0.3.5 is available!</title>

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

            <h2>Wednesday, 6 May 2015</h2>

            <br/>

            <p>
                After months of work, we are pleased to announce that <a
                    href="https://github.com/colour-science/colour/releases/tag/v0.3.5">Colour 0.3.5</a> is
                finally available. This release is a major milestone toward a
                stable API.
            </p>

            <p>
                The focus has been vectorisation of most of the API code.
                The average speed increase is a
                <strong>x235</strong> factor for over a
                hundred core definitions (details are available in this <a
                    href="https://docs.google.com/spreadsheets/d/10O344GaDbZaS9dNLIhP-uSPIgJXEMgz0MKEPPECtTy0/edit?usp=sharing">Google Docs Spreadsheet</a>).
            </p>

            <p>
                The direct benefit is that the API is now well suited to work
                on images with acceptable computation times.
                Favoring flexibility over high level optimisations and speed,
                we have also maintained almost complete backward compatibility.
            </p>

            <p>
                Another key feature is our recent derivation of <a
                    href="http://colour-science.org/blog_red_colourspaces_derivation.php">RED colourspaces</a>.
            </p>

            <p>
                Feel free to take a look at the <a
                    href="https://github.com/colour-science/colour/releases/tag/v0.3.5">release page</a>
                for complete details.
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
