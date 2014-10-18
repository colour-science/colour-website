<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Colour Developers</title>

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

            <h2>Contributing</h2>

            <p>
                <strong><span class="text-primary">Colour</span></strong> is
                open source and we happily welcome
                contributions. This guide will give you an overview on how to
                contribute.
            </p>

            <p>There are many ways to help:</p>
            <ul>
                <li>Reporting a defect, proposing a new feature or enhancement
                    or commenting existing issues on the
                    <a href="https://github.com/colour-science/colour/issues"><span
                            class="fa fa-github">&nbsp;Issue Tracker</span>
                    </a>
                </li>
                <li>
                    Contributing new code by implementing new features or
                    adding examples, for some ideas you can take a
                    look at the issues with the
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AEnhancement">Enhancement</a>,
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AFeature">Feature</a>
                    and
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AReady">Ready</a>
                    labels or the
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+milestone%3Av9.9.9">v9.9.9</a>
                    milestone.
                </li>
                <li>
                    Maintaining the existing code base, improving the code
                    style and quality, improving the coverage,
                    updating the documentation, fixing bugs, addressing TODOs,
                    etc... Issues with the
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADefect">Defect</a>
                    or
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AEnhancement">Enhancement</a>
                    labels are a good place to start.
                </li>
                <li>
                    Improving the
                    <a href="http://nbviewer.ipython.org/github/colour-science/colour-ipython/blob/master/notebooks/colour.ipynb"
                       class="fa fa-book">&nbsp;IPython Notebooks</a>, we aim
                    to provide a good scientific support to
                    the API and there is still a lot to do.
                </li>
                <li>
                    Improving related packages like
                    <a href="colour_maya.php">Colour - Maya</a>,
                    <a href="colour_nuke.php">Colour - Nuke</a> or
                    <a href="colour_spectroscope.php">Colour - Spectroscope</a>
                </li>
                <li>
                    Participating in discussions on the
                    <a href="colour-science@googlegroups.com">
                        <span class="fa fa-life-ring">&nbsp;Mailing List</span>
                    </a>.
                </li>
            </ul>

            <h3>Reporting Issues</h3>

            <p>The three major issue types one can report on the issue tracker
                are the following:
                <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADefect">Defect</a>,
                <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AEnhancement">Enhancement</a>
                and
                <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AFeature">Feature</a>.
            </p>

            <p>We currently use a large set of labels to categorise issues:</p>
            <ul>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADefect">Defect</a>:
                    Used for any kind of defect reported.
                    <ul>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ACritical">Critical</a>:
                            Used for issues either rendering the software
                            unusable, causing loss of data, or preventing
                            people to work. These issues need to be fixed
                            immediately.
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AMajor">Major</a>:
                            Used for issues which have significant consequences
                            on the ability of people to work but do
                            not lead to the whole API being unusable.
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ANormal">Normal</a>:
                            Used for issues affecting one piece of
                            functionality. Those are usually self-contained and
                            don't impact the overall functionality of the API.
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AMinor">Minor</a>:
                            Used for cosmetic issues that don't prevent the API
                            to run properly.
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AEnhancement">Enhancement</a>:
                    Used for an enhancement of an existing feature, can also be
                    used for new feature suggestion,
                    although <a
                        href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AFeature">Feature</a>
                    label should be preferred.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AFeature">Feature</a>:
                    Used for a new feature, functionality suggestion.
                    <ul>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AP1">P1</a>:
                            Used for the highest priority.
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AP2">P2</a>:
                            Used for average priority.
                        </li>
                        <li>
                            <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AP3">P3</a>:
                            Used for the lowest priority.
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AAPI">API</a>:
                    Used for issues related to the API.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADocumentation">Documentation</a>:
                    Used for issues related to the documentation.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AExamples">Examples</a>:
                    Used for issues related to the examples.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ATask">Task</a>:
                    Used for a task not directly related to pure programming.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADiscussion">Discussion</a>:
                    Used to discuss any subject, those issues often turn into
                    features or enhancement.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AIn Progress">In
                        Progress</a>: Used for an issue started and ongoing
                    with very long development time.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aclose+is%3Aissue+label%3ADiscarded">Discarded</a>:
                    Used for a discarded / canceled issue.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADuplicate">Duplicate</a>:
                    Used for a duplicate issue.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3APostponed">Postponed</a>:
                    Used for an issue postponed for a future milestone.
                </li>
                <li>
                    <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3AReady">Ready</a>:
                    Used for an issue ready to be addressed.
                </li>
            </ul>
            <h4>Defects</h4>

            <p>You encountered a problem while using
                <strong><span class="text-primary">Colour</span></strong>,
                please consider reporting it on the
                <a href="https://github.com/colour-science/colour/issues"><span
                        class="fa fa-github">&nbsp;Issue Tracker</span>
                </a>.
            </p>

            <p>The first thing to do, is to check if there are any existing
                issues describing your problem, if there is
                one, you are welcome commenting into it and provide more
                details. However, please avoid creating
                duplicates, they add noise to the issue tracker and we will
                have to label them as
                <a href="https://github.com/colour-science/colour/issues?q=is%3Aopen+is%3Aissue+label%3ADuplicate">Duplicate</a>
                and close them.
            </p>

            <p>When reporting a defect please provide the following details if
                possible and makes sense to do so:</p>
            <ul>
                <li>
                    <strong><span class="text-primary">Colour</span></strong>
                    version.
                </li>
                <li>
                    <a href="https://www.python.org/">Python</a> version.
                </li>
                <li>
                    <a href="http://www.numpy.org/">NumPy</a> and
                    <a href="http://www.scipy.org/">SciPy</a> versions.
                </li>
            </ul>
            <p>If you are reporting an exception, please provide the complete
                traceback, it will tremendously help us
                understand what happened.</p>

            <h4>Features &amp; Enhancements</h4>

            <p>If you would like a new feature to be supported or an
                enhancement of an existing feature, don't hesitate
                to link any resources or references you feel like would help
                its implementation: publications, wikipedia
                article, etc...</p>

            <p>If there is an implementation existing in another language, we
                will be most likely be able to port it
                although the licence must be compatible with the
                <a href="http://opensource.org/licenses/BSD-3-Clause">New BSD
                    License</a> terms.
            </p>

            <p>
                We are also running
                <a href="http://www.mathworks.fr/products/matlab/">Matlab</a>,
                so don't hesitate to provide snippets for
                it if you have functions you would like to be ported.
            </p>

            <h3>Contributing Code</h3>

            <p>Assuming you have something to work on, you will have to get the
                code and follow the guidelines.</p>

            <h4>Development for Colour</h4>

            <p>Here is a succinct overview of the steps you will most likely go
                through:</p>
            <ol>
                <li>
                    <a href="https://github.com/colour-science/colour/fork">
                        <span class="fa fa-code-fork">&nbsp;Fork</span>
                    </a> the
                    <a href="https://github.com/colour-science/colour">
                        <span class="fa fa-github">&nbsp;Colour</span>
                    </a> repository.
                </li>
                <li>
                    Activate
                    <a href="http://travis-ci.org/">Travis-CI</a> for your <em><span
                            class="text-info">fork</span></em>
                    so that the tests suite is run when you push your changes.
                </li>
                <li>
                    Clone the repository locally to your workspace:
                    <pre>» git clone git@github.com:$USER/colour.git</pre>
                </li>
                <li>
                    Connect your clone to the original
                    <em><span class="text-info">upstream</span></em> repository
                    by adding it as a remote:
                    <pre>» git remote add upstream git@github.com:colour-science/colour</pre>
                </li>
                <li>
                    You should now have two remotes:
                    <pre>» git remote -v
origin  https://github.com/$USER/colour (fetch)
origin  https://github.com/$USER/colour (push)
upstream  https://github.com/colour-science/colour (fetch)
upstream  https://github.com/colour-science/colour (push)</pre>
                </li>
                <li>
                    Pull the latest changes from
                    <em><span class="text-info">upstream</span></em>:
                    <pre>» git checkout master
» git pull upstream master</pre>
                </li>
                <li>
                    Create a branch for your contribution:
                    <pre>» git checkout -b feature/mie_scattering</pre>
                    The core developers are using the
                    <a href="http://nvie.com/posts/a-successful-git-branching-model/">git
                        flow branching model</a> for
                    most of the development tasks and since the branch name
                    appears in the commit message and for
                    consistency, please use the following branch prefixes:
                    <ul>
                        <li>
                            Feature branch prefix: <strong>feature/</strong>
                        </li>
                        <li>
                            Release branch prefix: <strong>release/</strong>
                        </li>
                        <li>
                            Hotfix branch prefix: <strong>hotfix/</strong>
                        </li>
                    </ul>
                </li>
                <li>
                    Check if the unit tests and doctests are running properly.
                </li>
                <li>
                    Commit your changes:
                    <pre>» git add mie_scattering.py
» git commit -m 'Implement "Mie Scattering" support'.</pre>
                </li>
                <li>
                    Push your changes back to
                    <em><span class="text-info">origin</span></em>, your own
                    fork:
                    <pre>» git push origin feature/mie_scattering</pre>
                </li>
                <li>
                    Ensure that the test suite is all right on
                    <a href="http://travis-ci.org/">Travis-CI</a>.
                </li>
                <li>
                    Visit your repository fork on
                    <a href="http://github.com/">Github</a>. Your branch should
                    have a green
                    <em><span class="text-info">Pull Request</span></em>
                    button, this will open a
                    <em><span class="text-info">pull request</span></em> and
                    let us know that we have some code to
                    review :)
                </li>
            </ol>

            <h3>Code Reviews</h3>

            <p>Your <em><span class="text-info">pull request</span></em> will
                be reviewed by the maintainers and any
                other developer interested in the project.</p>

            <p>Every single developer has his code reviewed, this is a natural
                process helping to raise the codebase
                quality while having a friendly discussion. Comments will be
                made on various aspects such as the
                documentation and references, the code style and its
                implementation. Those can be discouraging, although
                they are not meant to criticize but aim at improving the
                quality of your submission. We all learn from
                that process and the project ultimately benefits from them.</p>

            <h3>Guidelines</h3>

            <p>Most of the conventions used in
                <strong><span class="text-primary">Colour</span></strong> are
                the same than
                <a href="http://www.numpy.org/">NumPy</a>,
                <a href="http://www.scipy.org/">SciPy</a> and
                <a href="http://scikit-image.org/">scikit-image</a>.
            </p>

            <h4>Overview</h4>

            <p>We follow the
                <a href="https://google-styleguide.googlecode.com/svn/trunk/pyguide.html">Google
                    Python Style Guide</a>
                and especially the
                <em><span class="text-info">Python Language Rules</span></em>
                although with the main exception being the
                doctrings / documentation formatted with
                <a href="https://github.com/numpy/numpy/blob/master/doc/example.py">Numpy
                    Docstrings Style</a>.
            </p>

            <p>The code has to be
                <a href="http://legacy.python.org/dev/peps/pep-0008/">PEP 8</a>
                compliant although but before anything
                else, it needs to be consistent with the Colour Science
                litterature:
            </p>

            <p>
                For example, the base
                <strong><span class="text-primary">CIE</span></strong>
                colourspace is
                <strong><span class="text-primary">CIE XYZ</span></strong> with
                upper case notation. It can be converted
                to chromaticity coordinates
                <strong><span class="text-primary">xy</span></strong> with
                lowere case notation. If we were to follow
                the
                <a href="http://legacy.python.org/dev/peps/pep-0008/">PEP 8</a>
                recommendations, we would have written a
                conversion definition as follows:
            </p>
            <pre>def xyz_to_xy(xyz):
    x, y, z = np.ravel(xyz)
    x, y = x / (x + y + z), y / (x + y + z)
    return x, y</pre>
            <p>Abstracting the fact the above definition is totally
                undocumented, it can be confusing to understand when
                we are referencing big
                <strong><span class="text-primary">X</span></strong>
                tristimulus value or little
                <strong><span class="text-primary">x</span></strong>
                chromaticity coordinate.
            </p>

            <p>For those cases, and there are legions of them in Colour
                Science, we have decided to go for clarity and
                consistency with the literature for the object names:</p>
            <pre>def XYZ_to_xy(XYZ):
    X, Y, Z = np.ravel(XYZ)
    x, y = X / (X + Y + Z), Y / (X + Y + Z)
    return x, y</pre>
            <p>When the reference is using upper case named variables, we try
                to follow the same convention, it is
                unfortunately not
                <a href="http://legacy.python.org/dev/peps/pep-0008/">PEP 8</a>
                compliant but has the benefit of a much
                easier comparison between the implementation and the reference.
            </p>

            <p>We suggest that any contributor follows the same rule.</p>

            <h4>Python Language Rules</h4>
            <ul>
                <li>All the code must be covered by unit tests and doctests.
                </li>
                <li>All the code must be documented to the same standard than
                    <a href="http://www.numpy.org/">NumPy</a>,
                    <a href="http://www.scipy.org/">SciPy</a> and
                    <a href="http://scikit-image.org/">scikit-image</a>.
                </li>
                <li>All the code must be checked with the static analysis tool
                    of your choice (we use <a
                        href="http://www.jetbrains.com/pycharm/">PyCharm</a>
                    extensively), <a
                        href="https://pypi.python.org/pypi/flake8">flake8</a>
                    and <a href="https://landscape.io/">Landscape</a>.
                </li>
                <li>No <em><span class="text-info">pull request</span></em>
                    should be merged without being reviewed and
                    ensuring that the tests suite pass in
                    <a href="http://travis-ci.org/">Travis-CI</a>.
                </li>
                <li>Examples should be provided for new features.</li>
            </ul>

            <h4>Python Style Rules</h4>
            <ul>
                <li>Ensure consistency with Colour Science literature first.
                </li>
                <li>Ensure
                    <a href="http://legacy.python.org/dev/peps/pep-0008/">PEP
                        8</a> compliance.
                </li>
                <li>
                    <p>Try using a close to
                        <em>Latex</em> syntax for variables names so that they
                        are easier to compare to the reference.
                    </p>

                    <p>For instance, a variable defined \(D_{uv}\) in a paper
                        would be defined as
                        <em>D_uv</em> in the code, \(L^*\) as
                        <em>Lstar</em> and \(X_{ab}^{\prime}\) as
                        <em>Xp_ab</em>.
                    </p>
                </li>
                <li>Please use <em>British English</em> words instead of <em>American
                        English</em> ones as the
                    <strong><span class="text-primary">CIE</span></strong>
                    does, the most important of all being
                    <strong><span class="text-primary">colour</span></strong>
                    instead of <strong><span
                            class="text-primary">color</span></strong>. You can
                    consult the <a
                        href="http://eilv.cie.co.at/">CIE Termlist</a> if any
                    doubts.
                </li>
                <li>Import
                    <a href="http://www.numpy.org/">NumPy</a> as follows:
                    <pre>import numpy as np</pre>
                </li>
                <li>Doctests may need
                    <strong><span class="text-primary">ellipsis</span></strong>,
                    don't rely on global
                    <strong><span class="text-primary">nose</span></strong>
                    settings and specify it using the dedicated
                    pragma as follows:
                    <pre>>>> Lab = np.array([100, -7.41787844, -15.85742105])
>>> Lab_to_LCHab(Lab)  # doctest: +ELLIPSIS
array([ 100.        ,   17.5066479...,  244.9304684...])</pre>
                </li>
                <li>Some commonly used dataset elements have aliases like
                    <strong><span
                            class="text-primary">'cie_2_1931'</span></strong>
                    for
                    <strong><span class="text-primary">'CIE 1931 2 Degree Standard Observer'</span></strong>.
                    Those are
                    provided for convenience and are reserved for external
                    usage, please use the long form for
                    consistency across the API.
                <li>In the same way as above, some computation methods are
                    using a title case like
                    <strong><span
                            class="text-primary">'Ohno 2013'</span></strong>,
                    while the mapping object holding
                    them is case insensitive, please use the title case form
                    for consistency across the API.
                </li>
                <li>Some very big lines sometimes cannot be wrapped (doctests,
                    html links), you can use the
                    <strong><span class="text-primary"># noqa</span></strong>
                    pragma in those cases, although do it in
                    last resort, we have already too much of them.
                </li>
                <li>Avoid
                    <strong><span class="text-primary">/</span></strong> to
                    wrap lines, prefer using the parenthesis
                    <strong><span class="text-primary">()</span></strong>.
                </li>
                <li>The code formatting is right now done with
                    <a href="http://www.jetbrains.com/pycharm/">PyCharm</a>
                    reformat (although there are still some
                    rough corner with it), and we may run a pass from time to
                    time.
                </li>
                <li>
                    Inline comments must have two spaces.
                </li>
                <li>
                    Ensure that you have blank line at the end of the files.
                </li>
                <li>
                    Ensure that trailing whitespaces are stripped.
                </li>
            </ul>

            <h4>Citations</h4>

            <p>It's likely that the code you contribute will be based upon
                references, we are using the
                <a href="http://www.apastyle.org/">APA 6th Edition</a> citation
                style:
            </p>

            <pre>Davis, W., & Ohno, Y. (2010). Color quality scale. Optical Engineering, 49(3), 33602–33616. doi:10.1117/1.3360335</pre>
            <pre>Wyszecki, G., & Stiles, W. S. (2000). Table I(6.5.3) Whiteness Formulae (Whiteness Measure Denoted by W). In Color Science: Concepts and Methods, Quantitative Data and Formulae (pp. 837–839). Wiley. ISBN:978-0471399186</pre>
            <pre>Lindbloom, B. (2014). RGB Working Space Information. Retrieved April 11, 2014, from http://www.brucelindbloom.com/WorkingSpaceInfo.html</pre>

            <p>We are storing all our citations in a database maintained by
                <a href="http://www.mendeley.com/">Mendeley</a>.
            </p>

            <h4>Commits</h4>

            <p>A good commiting strategy implies that separated commits should
                be done for any particular changes: One
                should not commit multiple bugs fixes or large change sets at
                once.</p>

            <p>This unnecessarily increase complexity for any code merge or
                rollbacks needs and prevent a grainier
                control over the version control. One exception to this rule is
                for the initial design steps when
                creating a new sub-package or feature (please consider
                squashing the commits), but once the said
                sub-package is in production, a regular committing strategy
                should be applied.</p>

            <p>Commit messages need to use imperative syntax, the first commit
                line must be a quick description of the
                modification content finished by a punctuation mark and can be
                followed by a detailed description
                separated by one line break. If the commit fixes a particular
                issue in the issue tracker, it's advised
                to state it in the commit message using the following syntax:
                <strong><span class="text-primary">Closes #32.</span></strong>
            </p>
            <pre>Yes:
Implement "Yoshi Ohno" correlated colour temperature calculation.

Closes #32.
This implementation allows for a more precise correlated colour temperature calculation by using a two solutions hybrid approach.</pre>
            <pre>No:
Coded new cool cct method</pre>

            <h4>Feature Branches & History</h4>

            <p>History should never be re-written, although while working on
                your local
                <strong>feature</strong> branch, you may want to provide a
                cleaner commits history before submitting a
                <em><span class="text-info">pull request</span></em>. It is
                perfectly fine to modify your local branch
                as you wish.
            </p>

            <p>However, if you need to change history on a public and used
                <strong>feature</strong> branch, please inform the
                <a href="mailto:colour-science@googlegroups.com">
                    Colour developers
                </a> in order to avoid commit losses or a merging disaster.
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

</body>
</html>
