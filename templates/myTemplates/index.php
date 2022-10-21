<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php use Joomla\CMS\Factory;

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
    <jdoc:include type="head"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/myTemplates/bootstrap-5.2.1/bootstrap.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/invisible_styles.css"
          type="text/css"/>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg pt-3 pb-3">
        <div class="logo">
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/image/logo.png" alt="logo">
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
</nav>


<jdoc:include type="component"/>
<jdoc:include type="modules" name="footer"/>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.esm.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>