<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Blog</title>

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
            <h2>Blog</h2>

            <h3>Saturday, 10 January 2015</h3>

            <h4>
                <a href="blog_about_rgb_colourspace_models_performance.php">About RGB Colourspace Models Performance</a>
            </h4>

            <h3>Wednesday, 1 October 2014</h3>

            <h4>
                <a href="blog_a_plea_for_colour_analysis_tools_in_dcc_applications.php">A
                    Plea for Colour Analysis Tools in DCC Applications</a>
            </h4>

            <h3>Friday, 19 September 2014</h3>

            <h4>
                <a href="blog_about_rendering_engines_colourspaces_agnosticism.php">About
                    Rendering Engines Colourspaces Agnosticism</a>
            </h4>

            <h3>Friday, 5 September 2014</h3>

            <h4>
                <a href="blog_pycharm_vagrant_fabric_anaconda.php">PyCharm,
                    Vagrant, Fabric & Anaconda</a>
            </h4>

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
