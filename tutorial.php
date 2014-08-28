<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Tutorial</title>

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
            <div class="embed-responsive" style="height: 16384px;">
                <iframe class="embed-responsive-item" src="ipython/tutorial.html"></iframe>
            </div>

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
