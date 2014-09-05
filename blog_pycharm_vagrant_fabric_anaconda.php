<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>PyCharm, Vagrant, Fabric & Anaconda</title>

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
<h2>PyCharm, Vagrant, Fabric & Anaconda</h2>
<br/>

<p>Installing the whole development toolchain for
    <strong><span class="text-primary">Colour</span></strong> roughly means deploying:
<ul>
    <li>
        <a href="https://www.python.org/download/releases/">Python 2.6</a>,
        <a href="https://www.python.org/download/releases/">Python 2.7</a> and
        <a href="https://www.python.org/download/releases/">Python 3.4</a>
    </li>
    <li>
        <a href="http://www.numpy.org/">NumPy</a>
    </li>
    <li>
        <a href="http://matplotlib.org/">Matplotlib</a>
    </li>
    <li>
        <a href="http://www.scipy.org/">SciPy</a>
    </li>
    <li>
        <a href="http://ipython.org/notebook.html">IPython</a>
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/backports.functools_lru_cache/1.0.1">Backports.functools_lru_cache</a>,
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/ordereddict">Ordereddict</a>,
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/unittest2">Unittest2</a>
    </li>
    <li>
        <a href="https://nose.readthedocs.org/en/latest">Nose</a>
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/coverage">Coverage</a>
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/flake8">Flake8</a>
    </li>
    <li>
        <a href="https://sphinx-doc.org">Sphinx</a>
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/sphinxcontrib-napoleon">Sphinxcontrib-napoleon</a>
    </li>
    <li>
        <a href="https://pypi.python.org/pypi/sphinx-bootstrap-theme">Sphinx-bootstrap-theme</a>
    </li>
    <li>
        <a href="http://httpd.apache.org/">Apache 2.2</a>
    </li>
    <li>
        <a href="http://php.net/">Php 5.5</a>
    </li>
    <li>
        ... and too many things I just don't remember!
    </li>
</ul>

<p>I decided to see how I could make that setup a bit more portable and easier
    to deploy.
</p>

<p>That's where <a href="https://www.vagrantup.com/">Vagrant</a>
    kicks in along
    <a href="http://www.jetbrains.com/pycharm/">PyCharm</a>
    and
    <a href="https://store.continuum.io/cshop/anaconda/">Anaconda</a>!
</p>

<p>The following guide assume that you have that you have
    <a href="http://www.jetbrains.com/pycharm/">PyCharm</a> installed and are using
    <strong><span class="text-primary">Mac Os X</span></strong>, although it should pretty much be platform agnostic.
</p>

<h3>Development Workspace Creation</h3>

<ul>
    <li>
        <p>On your local filesystem, in your development workspace, create a directory
            <strong><span class="text-primary">colour-science</span></strong> and
            <strong><span class="text-primary">cd</span></strong> into it:
        </p>
        <pre>» mkdir colour-science
» cd colour-science</pre>
    </li>
    <li>
        <p>
            Clone the
            <a href="https://github.com/colour-science/colour-vagrant">colour-vagrant</a> repository:
        </p>
        <pre>» git clone git://github.com/color-science/colour-vagrant.git</pre>
    </li>
    <li>

        <p>You should now have a
            <strong><span class="text-primary">colour-vagrant</span></strong> directory nested into the
            <strong><span class="text-primary">colour-science</span></strong> one.
        </p>
        Let's open the <strong><span class="text-primary">colour-vagrant</span></strong> directory into
        <a href="http://www.jetbrains.com/pycharm/">PyCharm</a>.
    </li>
</ul>
<h3>Vagrant Installation</h3>

<p>We will loosely follow
    <a href="http://www.jetbrains.com/pycharm/quickstart/configuring_for_vm.html">Jetbrain's PyCharm Documentation</a>.
</p>
<ul>
    <li>
        Install
        <a href="https://www.virtualbox.org/">VirtualBox</a>.
    </li>
    <li>
        Install
        <a href="https://www.vagrantup.com/">Vagrant</a>.
    </li>
    <li>
        <p>Install
            <a href="http://www.fabfile.org/">Fabric</a>, this is the provider needed for the
            <a href="https://github.com/colour-science/colour-vagrant">colour-vagrant</a> environment:
        </p>
        <pre>» pip install fabric</pre>
        <p>Initially, I was provisioning with
            <a href="http://puppetlabs.com/">Puppet</a>. It was cumbersome to use, so I decided to go for
            <a href="http://www.fabfile.org/">Fabric</a> and the
            <a href="https://github.com/hlassiege/fabric-vagrant">fabric-vagrant</a> plugin.
        </p>
    </li>
    <li>
        <p>Install
            <a href="http://xquartz.macosforge.org/">XQuartz</a>: This is the X11 display server for
            <strong><span class="text-primary">Mac Os X</span></strong>. The virtual machine will export the display to it so that you can see the figures from
            <a href="http://matplotlib.org/">Matplotlib</a>.
        </p>
    </li>
</ul>


<h3>PyCharm Vagrant Configuration</h3>

<p>The canonical way is to use
    <a href="https://www.vagrantup.com/">Vagrant</a> from the command line as described in
    <a href="https://docs.vagrantup.com/v2/getting-started/">Vagrant Online Documentation</a>, but here we will leverage the
    <a href="http://www.jetbrains.com/pycharm/">PyCharm</a> integration.
</p>
<ul>
    <li>
        <p>Set the
            <strong><span class="text-primary">Instance Folder</span></strong> field to your
            <strong><span class="text-primary">colour-vagrant</span></strong> directory.
        </p>
    </li>
    <li>
        <p>Add a new
            <a href="https://www.vagrantup.com/">Vagrant</a> box to
            <a href="http://www.jetbrains.com/pycharm/">PyCharm</a> in the
            <strong><span class="text-primary">Boxes</span></strong> tab and use the following image:
            <a href="http://files.vagrantup.com/precise64.box">http://files.vagrantup.com/precise64.box</a>
        </p>
    </li>
    <li>
        <p>Add the
            <a href="https://github.com/hlassiege/fabric-vagrant">fabric-vagrant</a> plugin to
            <a href="http://www.jetbrains.com/pycharm/">PyCharm</a> in the
            <strong><span class="text-primary">Plugins</span></strong> tab.
        </p>
    </li>
</ul>

<p>Your configuration screen should be approximately as follows:</p>
<img src="images/Blog_PyCharm_Vagrant_001.png" class="img-responsive">
<img src="images/Blog_PyCharm_Vagrant_002.png" class="img-responsive">

<h3>Vagrant Up</h3>

<p>With everything setup, hit the
    <strong><span class="text-primary">PyCharm ---> Tools ---> Vagrant ---> Up</span></strong> menu item to spin up the virtual machine.
</p>

<p>You can go grab a coffee, the initial provisioning will take roughly 25-30 minutes.</p>

<p>If the provisioning ended smoothly, you should have the following elements available:</p>
<ul>
    <li>
        <p>
            <strong><span class="text-primary">colour</span></strong>,
            <strong><span class="text-primary">colour-ipython</span></strong> and
            <strong><span class="text-primary">colour-website</span></strong> repositories cloned into the
            <strong><span class="text-primary">colour-science</span></strong> directory right next to the
            <strong><span class="text-primary">colour-vagrant</span></strong> one.
        </p>
    </li>
    <li>
        <p>Remote Python environments installed into the virtual machine at the following location with all the dependencies needed:
        </p>
        <pre>vagrant@precise64:~$ cd /home/vagrant/anaconda/envs/
vagrant@precise64:~/anaconda/envs$ ll
total 20
drwxrwxr-x  5 vagrant vagrant 4096 Sep  5 10:00 ./
drwxrwxr-x 14 vagrant vagrant 4096 Sep  5 10:00 ../
drwxrwxr-x 11 vagrant vagrant 4096 Sep  5 10:10 python2.6/
drwxrwxr-x 12 vagrant vagrant 4096 Sep  5 10:00 python2.7/
drwxrwxr-x 11 vagrant vagrant 4096 Sep  5 09:58 python3.4/
</pre>
    </li>
    <li>
        <p>The
            <strong><span class="text-primary">colour-science.org</span></strong> website served from the virtual machine at the following address:
            <a href="http://localhost:8080/">http://localhost:8080/</a>
        </p>
    </li>
</ul>

<h3>PyCharm Environment Configuration</h3>

<ul>
    <li>
        <p>Add the various remote Python interpreters to
            <a href="http://www.jetbrains.com/pycharm/">PyCharm</a> following its quickstart guide:
            <a href="http://www.jetbrains.com/pycharm/quickstart/configuring_interpreter.html">Remote interpreter via virtual box: 2</a>
        </p>
    </li>
    <li>
        <p>Add the paths mappings from the
            <strong><span class="text-primary">Mac Os X</span></strong> host to the virtual machine in the
            <strong><span class="text-primary">Defaults</span></strong> configurations, in my case the mappings are as follows:
        </p>
        <code>/Users/KelSolaar/Documents/Developement/colour-science = /colour-science</code>
    </li>
</ul>
<p>Your Run/Debug configuration screen should be approximately looking like that:</p>
<img src="images/Blog_PyCharm_Configurations_001.png" class="img-responsive">
<img src="images/Blog_PyCharm_Configurations_002.png" class="img-responsive">

<h3>Usage</h3>

<h4>SSH Connection &amp; Display</h4>

<p>Accessing the virtual machine is done by using
    <strong><span class="text-primary">PyCharm ---> Tools Start SSH session...</span></strong> menu item.
</p>

<p>However if you want to be able to export the display and see the figures you will have to manually
    <strong><span class="text-primary">ssh</span></strong>
    into the virtual machine:
</p>
<pre>» ssh -X vagrant@192.168.32.64</pre>
<p>Password is
    <strong><span class="text-primary">'vagrant'</span></strong> without the quotes.
</p>

<p>You will also need to add the virtual machine to the X11 hosts by issuing the following command on
    <strong><span class="text-primary">Mac Os X</span></strong> (and not in the virtual machine):
</p>
<pre>» xhost + 192.168.32.64</pre>

<h4>IPython Notebooks</h4>

<p>The
    <a href="http://ipython.org/notebook.html">IPython Notebooks</a> server needs to be run by issuing the following commands:
</p>
<pre>» cd /colour-science/colour-ipython/notebooks
» ipython notebook --pylab=inline --ip=0.0.0.0</pre>
<p>Then you can access it from the following url:
    <a href="http://localhost:8888/">http://localhost:8888/</a></p>

<h4>Remote Python Environments &amp; Interpreters</h4>

<p>You can activate the remote Python environments by issuing those commands:</p>
For <strong><span class="text-primary">python2.6</span></strong>:
<pre>» source activate python2.6</pre>
For <strong><span class="text-primary">python2.7</span></strong>:
<pre>» source activate python2.7</pre>
For <strong><span class="text-primary">python3.4</span></strong>:
<pre>» source activate python3.4</pre>

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
