<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Features</title>

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
            <h2>Features</h2>
            <br/>

            <p><strong><span class="text-primary">Colour</span></strong> features a rich dataset and collection of objects, here are some highlights:</p>
            <h3>Algebra</h3>
            <h4>Sprague Interpolation</h4>

            <h3>Colorimetry</h3>
            <h4>Spectral Power Distribution Computations</h4>
            <ul class="simple">
                <li>Wavelength to XYZ</li>
                <li>Spectral to XYZ</li>
                <li>Interpolation</li>
                <li>Extrapolation</li>
            </ul>
            <h4>Spectral bandpass correction</h4>
            <ul class="simple">
                <li>Stearns and Stearns (1988)</li>
            </ul>
            <h4>RGB and XYZ Colour Matching Functions Spectral Dataset</h4>
            <ul class="simple">
                <li>Wright &amp; Guild 1931 2° RGB CMFs RGB colour matching functions</li>
                <li>Stiles &amp; Burch 1955 2° RGB CMFs RGB colour matching functions</li>
                <li>Stiles &amp; Burch 1959 10° RGB CMFs RGB colour matching functions</li>
                <li>CIE 1931 2° Standard Observer XYZ colour matching functions</li>
                <li>CIE 1964 10° Standard Observer XYZ colour matching functions</li>
                <li>CIE 2012 2° Standard Observer XYZ colour matching functions</li>
                <li>CIE 2012 10° Standard Observer XYZ colour matching functions</li>
            </ul>
            <h4>Cone Fundamentals Spectral Dataset</h4>
            <ul class="simple">
                <li>Stockman &amp; Sharpe 2° Cone Fundamentals</li>
                <li>Stockman &amp; Sharpe 10° Cone Fundamentals</li>
            </ul>
            <h4>Photopic &amp; Scotopic Luminous Efficiency Functions Spectral Dataset</h4>
            <ul class="simple">
                <li>CIE 1924 Photopic Standard Observer</li>
                <li>Judd Modified CIE 1951 Photopic Standard Observer</li>
                <li>Judd-Vos Modified CIE 1978 Photopic Standard Observer</li>
                <li>CIE 1964 Photopic 10° Standard Observer</li>
                <li>CIE 2008 2° Physiologically Relevant LEF</li>
                <li>CIE 2008 10° Physiologically Relevant LEF</li>
                <li>CIE 1951 Scotopic Standard Observer</li>
            </ul>
            <h4>Blackbody Spectral Radiance Computation</h4>
            <h4>Illuminants Spectral Dataset</h4>
            <ul class="simple">
                <li>A</li>
                <li>B</li>
                <li>C</li>
                <li>D50</li>
                <li>D55</li>
                <li>D60</li>
                <li>D65</li>
                <li>D75</li>
                <li>E</li>
                <li>F1</li>
                <li>F2</li>
                <li>F3</li>
                <li>F4</li>
                <li>F5</li>
                <li>F6</li>
                <li>F7</li>
                <li>F8</li>
                <li>F9</li>
                <li>F10</li>
                <li>F11</li>
                <li>F12</li>
                <li>FL3.1</li>
                <li>FL3.2</li>
                <li>FL3.3</li>
                <li>FL3.4</li>
                <li>FL3.5</li>
                <li>FL3.6</li>
                <li>FL3.7</li>
                <li>FL3.8</li>
                <li>FL3.9</li>
                <li>FL3.10</li>
                <li>FL3.11</li>
                <li>FL3.12</li>
                <li>FL3.13</li>
                <li>FL3.14</li>
                <li>FL3.15</li>
                <li>HP1</li>
                <li>HP2</li>
                <li>HP3</li>
                <li>HP4</li>
                <li>HP5</li>
            </ul>
            <h4>Illuminants Chromaticity Coordinates</h4>
            <h4>Colour Matching Functions Conversions for Educational Purpose</h4>
            <ul class="simple">
                <li>Wright &amp; Guild 1931 2° RGB CMFs to CIE 1931 2° Standard Observer</li>
                <li>Stiles &amp; Burch 1959 10° RGB CMFs to CIE 1964 10° Standard Observer</li>
                <li>Stiles &amp; Burch 1959 10° RGB CMFs to Stockman &amp; Sharpe 10° Cone Fundamentals</li>
                <li>Stockman &amp; Sharpe 2° Cone Fundamentals to CIE 2012 2° Standard Observer</li>
                <li>Stockman &amp; Sharpe 10° Cone Fundamentals to CIE 2012 10° Standard Observer</li>
            </ul>
            <h4>Lightness Computation</h4>
            <ul class="simple">
                <li>Glasser et al. (1958)</li>
                <li>G. Wyszecki (1964)</li>
                <li>CIE (1976)</li>
            </ul>
            <h4>Luminance Computation</h4>
            <ul class="simple">
                <li>Sidney M. Newhall, Dorothy Nickerson, and Deane B. Judd (1943)</li>
                <li>CIE (1976)</li>
                <li>ASTM D1535-08 (2008)</li>
            </ul>

            <h3>Colour Temperature &amp; Correlated Colour Temperature</h3>
            <h4>Correlated Colour Temperature Computation Methods</h4>
            <ul class="simple">
                <li>Alan R. Roberston (1968)</li>
                <li>Yoshi Ohno (2013)</li>
                <li>C. S. McCamy (1992)</li>
                <li>Javier Hernandez-Andres, Raymond L. Lee, Jr., and Javier Romero (1999)</li>
                <li>Bongsoon Kang Ohak Moon, Changhee Hong, Honam Lee, Bonghwan Cho and Youngsun Kim (2002)</li>
                <li>CIE Illuminant D Series</li>
            </ul>

            <h3>Chromatic Adaptation</h3>
            <h4>Chromatic Adaptation Transforms</h4>
            <ul class="simple">
                <li>XYZ Scaling</li>
                <li>Bradford</li>
                <li>Von Kries</li>
                <li>Fairchild</li>
                <li>CAT02</li>
            </ul>

            <h3>Colour Models</h3>
            <h4>Colourspaces Transformations</h4>
            <ul class="simple">
                <li>XYZ to xyY</li>
                <li>xyY to XYZ</li>
                <li>xy to XYZ</li>
                <li>XYZ to xy</li>
                <li>XYZ to RGB</li>
                <li>RGB to XYZ</li>
                <li>RGB to RGB</li>
                <li>XYZ to UCS</li>
                <li>UCS to XYZ</li>
                <li>UCS to uv</li>
                <li>UCS uv to xy</li>
                <li>XYZ to UVW</li>
                <li>XYZ to Luv</li>
                <li>Luv to XYZ</li>
                <li>Luv to uv</li>
                <li>Luv uv to xy</li>
                <li>Luv to LCHuv</li>
                <li>LCHuv to Luv</li>
                <li>XYZ to Lab</li>
                <li>Lab to XYZ</li>
                <li>Lab to LCHab</li>
                <li>LCHab to Lab</li>
                <li>IPT to XYZ</li>
                <li>XYZ to IPT</li>
            </ul>
            <h4>RGB Colourspaces Derivation</h4>
            <h4>RGB Colourspaces</h4>
            <ul class="simple">
                <li>ACES RGB</li>
                <li>ACES RGB Log</li>
                <li>ACES RGB Proxy 10</li>
                <li>ACES RGB Proxy 12</li>
                <li>Adobe RGB 1998</li>
                <li>Adobe Wide Gamut RGB</li>
                <li>ALEXA Wide Gamut RGB</li>
                <li>Apple RGB</li>
                <li>Best RGB</li>
                <li>Beta RGB</li>
                <li>CIE RGB</li>
                <li>ColorMatch RGB</li>
                <li>DCI-P3</li>
                <li>Don RGB 4</li>
                <li>ECI RGB v2</li>
                <li>Ekta Space PS 5</li>
                <li>Max RGB</li>
                <li>NTSC RGB</li>
                <li>Pal/Secam RGB</li>
                <li>ProPhoto RGB</li>
                <li>Rec. 709</li>
                <li>Rec. 2020</li>
                <li>Russell RGB</li>
                <li>S-Log</li>
                <li>SMPTE-C RGB</li>
                <li>Xtreme RGB</li>
                <li>sRGB</li>
            </ul>
            <h4>Convenience Deprecated Colourspaces Transformations</h4>
            <ul class="simple">
                <li>RGB to HSV</li>
                <li>HSV to RGB</li>
                <li>RGB to HSL</li>
                <li>HSL to RGB</li>
                <li>RGB to CMY</li>
                <li>CMY to RGB</li>
                <li>CMY to CMYK</li>
                <li>CMYK to CMY</li>
                <li>RGB to HEX</li>
                <li>HEX to RGB</li>
            </ul>

            <h3>Colour Difference</h3>
            <h4>ΔE Computation</h4>
            <ul class="simple">
                <li>ΔE CIE 1976</li>
                <li>ΔE CIE 1994</li>
                <li>ΔE CIE 2000</li>
                <li>ΔE CMC</li>
            </ul>

            <h3>Colour Appearance Models</h3>
            <ul class="simple">
                <li>ATD95</li>
                <li>CIECAM02</li>
                <li>Hunt</li>
                <li>LLAB</li>
                <li>Nayatani95</li>
                <li>RLAB</li>
            </ul>

            <h3>Colour Notation Systems</h3>
            <h4>Munsell Value Computation</h4>
            <ul class="simple">
                <li>Priest (1920)</li>
                <li>Munsell (1933)</li>
                <li>Moon (1943)</li>
                <li>Saunderson (1944)</li>
                <li>Ladd (1955)</li>
                <li>McCamy (1987)</li>
                <li>ASTM D1535-08</li>
            </ul>
            <h4>Munsell Colour Transformations</h4>
            <ul class="simple">
                <li>xyY to Munsell Colour</li>
                <li>Munsell Colour to xyY</li>
            </ul>
            <h4>Munsell Colours Dataset</h4>
            <ul class="simple">
                <li>Munsell Colours All</li>
                <li>Munsell Colours Real</li>
                <li>Munsell Colours 1929</li>
            </ul>

            <h3>Characterisation</h3>
            <h4>Colour Rendition Charts Spectral Dataset</h4>
            <ul class="simple">
                <li>BabelColor Average</li>
                <li>ColorChecker N. Ohta</li>
            </ul>
            <h4>Colour Rendition Charts Chromaticity Coordinates</h4>
            <ul class="simple">
                <li>BabelColor Average</li>
                <li>ColorChecker 1976</li>
                <li>ColorChecker 2005</li>
            </ul>
            <h4>First Order Colour Fit</h4>

            <h3>Light Quality</h3>
            <h4>Colour rendering index computation</h4>

            <h3>Optical Phenomenons</h3>
            <ul class="simple">
                <li>Rayleigh Optical Depth</li>
            </ul>

            <h3>Comprehensive Plotting Capabilities</h3>

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
