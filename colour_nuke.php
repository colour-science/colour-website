<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour - Nuke</title>

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
            <h2>Colour - Nuke</h2>
            <br/>

            <p>
                <strong><span
                        class="text-primary">Colour - Nuke</span></strong>
                provides an implementation
                of
                <strong><span class="text-primary">Colour</span></strong>
                within
                <a href="http://www.thefoundry.co.uk/products/nuke-product-family/nuke/">The
                    Foundry Nuke</a>.
            </p>

            <p>
                This is historically where
                <strong><span class="text-primary">Colour</span></strong>
                started as
                a raw images colour conversion plugin for
                <a href="http://www.moving-picture.com/">The Moving Picture
                    Company</a> stills ingestion pipeline.
            </p>

            <p>
                Most of the code being under NDA, it has been removed from the
                repository.
            </p>

            <h3>Features</h3>

            <p>The following features are available:</p>
            <ul>
                <li>
                    Lookup node from '.csv' file.
                </li>
                <li>
                    Adobe Camera Raw derived and exact tone curves.
                </li>
                <li>
                    Various Global Tonemapping Operators which are also available from
                    <a href="http://www.nukepedia.com/gizmos/colour/global_tonemapping_operators">Nukepedia</a>.
                </li>
                <li>
                    Various Tangent Space Normals utilities which are also available from
                    <a href="http://www.nukepedia.com/gizmos/filter/tangent_space_normals_utilities">Nukepedia</a>.
                </li>
            </ul>

            <h3>Downloads</h3>
            <ul>
                <li>
                    <a href="http://github.com/colour-science/colour-nuke">colour-nuke
                        on Github</a>
                </li>
            </ul>

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
