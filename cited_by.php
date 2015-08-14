<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Cited By</title>

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
            <h2>Cited By</h2>
            <br/>

            <p>Colour has been cited or used in a way or another (computations, figures) by the following papers, publications and articles:</p>

            <ul>
                <li>
                    Meng, J., Simon, F., & Hanika, J. (2015). Physically Meaningful Rendering using Tristimulus Colours, 34(4). Retrieved from <a href="http://jo.dreggn.org/home/2015_spectrum.pdf">http://jo.dreggn.org/home/2015_spectrum.pdf</a>
                </li>
                <li>
                    Duiker, H.-P., Forsythe, A., Dyer, S., Houston, J., McCown, W., Feeney, R., … Walker, D. (n.d.). ACEScg: A Common Color Encoding for Visual Effects Applications - Talk. Retrieved August 15, 2015, from <a href="http://dp2015.digiproconf.org/program">http://dp2015.digiproconf.org/program</a>
                </li>
                <li>
                    Hoffman, N. (2015). Physics and Math of Shading. Retrieved August 15, 2015, from <a href="http://blog.selfshadow.com/publications/s2015-shading-course/hoffman/s2015_pbs_physics_math_slides.pdf">http://blog.selfshadow.com/publications/s2015-shading-course/hoffman/s2015_pbs_physics_math_slides.pdf</a>
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
