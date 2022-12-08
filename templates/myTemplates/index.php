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
<nav class="navbar navbar-expand-lg pt-3 pb-3 ">
    <div class="navigation d-flex justify-content-between w-100">

        <div class="nav-logo-img">
            <a href="<?php echo JUri::base(); ?>">
                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/image/logo.png"
                     alt="logo">
            </a>
        </div>
        <div class="nav-list-menu">
            <jdoc:include type="modules" name="main_menu"/>
        </div>
    </div>
</nav>
<div class="main-content">
    <jdoc:include type="component"/>
</div>

<div class="text-white contact-banner p-5">
    <div class="banner-text">
        <h3 class="footer-header-fix">Questions, Suggestions? Let's stay in touch!</h3>
    </div>
    <div class="banner-mail p-2 rounded-2">
        <a href="mailto:urosrajkovic011@hotmail.com"
           class="contact_white"><strong>Contact</strong></a>
    </div>
</div>
<jdoc:include type="modules" name="footer"/>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-3.6.1.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.esm.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>