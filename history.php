<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>History</title>

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
            <h2>History</h2>
            <br/>

            <p>
                <strong><span class="text-primary">Colour</span></strong> started in 2013 as a raw conversion building block for
                <a href="http://www.moving-picture.com/">The Moving Picture Company</a> stills ingestion pipeline.
            </p>

            <p>
                Generic objects have been extracted, reorganised and are now provided as a nice packaged API while keeping the undisclosable code private. The original
                <a href="http://www.moving-picture.com/">MPC</a>
                <em><span class="text-info">camelCase</span></em> naming convention and code style has been changed for
                <a href="http://legacy.python.org/dev/peps/pep-0008/">Pep8</a> compliance.
            </p>

            <p>
                <a href="http://matplotlib.org/">Matplotlib</a> implementation idea is coming from the excellent
                <a href="http://markkness.net/colorpy/ColourPy.html">Mark Kness's ColorPy</a> Python package.
            </p>
            <br/>
            Thomas M.
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
