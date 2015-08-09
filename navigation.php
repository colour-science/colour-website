<!-- >>> Logo / Banner -->
<div class="container-fluid" id="logo-banner">
    <div class="row">
        <img class="img-responsive center-block"
             src="images/Colour_Logo_Banner_001.png" width="1350" height="256">
    </div>
</div>
<!-- <<< Logo / Banner -->

<!-- >>> Navigation -->
<div class="navbar navbar-default navbar-static-top" role="navigation"
     id="navbar-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><img
                    src="images/Colour_Logo_Icon_001.png">&nbsp;colour-science</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse"
                    data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">About<b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="contributors.php">Contributors</a>
                        </li>
                        <li>
                            <a href="history.php">History</a>
                        </li>
                        <li>
                            <?php include("contact.php") ?>
                            <span class="fa fa-send"></span>
                            Contact Us
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Get
                        Started<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="installation.php">Installation</a>
                        </li>
                        <li>
                            <a href="tutorial.php">Tutorial</a>
                        </li>
                        <li>
                            <a href="contributing.php">
                                <span class="fa fa-gears"></span>
                                Contributing
                            </a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="search.php">
                                <span class="fa fa-search"></span>
                                Search
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Downloads<b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="https://github.com/colour-science/colour/releases">All
                                Releases</a>
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour">
                                <span class="fa fa-github"></span>
                                Source Code
                            </a>
                        </li>
                        <li>
                            <a href="http://opensource.org/licenses/BSD-3-Clause">License</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="fa fa-gift"></span>
                        Goodies
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="utilities.php">Utilities</a>
                        </li>
                        <li>
                            <a href="experiments.php">Experiments</a>
                        </li>
                        <li>
                            <a href="colour_maya.php">Colour - Maya</a>
                        </li>
                        <li>
                            <a href="colour_nuke.php">Colour - Nuke</a>
                        </li>
                        <li>
                            <a href="colour_spectroscope.php">Colour -
                                Spectroscope</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="fa fa-life-ring"></span>
                        Documentation
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1">
                                <span class="fa fa-life-ring"></span>
                                API Reference
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="api/0.3.6/html/index.html">Latest</a>
                                </li>
                                <li>
                                    <a href="api/0.3.6/html/index.html">0.3.6</a>
                                </li>
                                <li>
                                    <a href="api/0.3.5/html/index.html">0.3.5</a>
                                </li>
                                <li>
                                    <a href="api/0.3.4/html/index.html">0.3.4</a>
                                </li>
                                <li>
                                    <a href="api/0.3.3/html/index.html">0.3.3</a>
                                </li>
                                <li>
                                    <a href="api/0.3.2/html/index.html">0.3.2</a>
                                </li>
                                <li>
                                    <a href="api/0.3.1/html/index.html">0.3.1</a>
                                </li>
                                <li>
                                    <a href="api/0.3.0/html/index.html">0.3.0</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://nbviewer.ipython.org/github/colour-science/colour-ipython/blob/master/notebooks/colour.ipynb">
                                <span class="fa fa-book"></span>
                                IPython Notebooks
                            </a>
                        </li>
                        <li>
                            <a href="bibliography.php">
                                <span class="fa fa-quote-right"></span>
                                Bibliography
                            </a>
                        </li>
                        <li>
                            <a href="features.php">
                                <span class="fa fa-lightbulb-o"></span>
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="contributing.php">
                                <span class="fa fa-gears"></span>
                                Contributing
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="fa fa-globe"></span>
                        News
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="news.php">Latest News</a>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="fa fa-users"></span>
                        Social
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <?php include("contact.php") ?>
                            <span class="fa fa-send"></span>
                            Email
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/colour_science">
                                <span class="fa fa-twitter"></span>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/python.colour.science">
                                <span class="fa fa-facebook"></span>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/0/b/101380914519940603334/101380914519940603334/about">
                                <span class="fa fa-google-plus"></span>
                                Google Plus
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- <<< Navigation -->
