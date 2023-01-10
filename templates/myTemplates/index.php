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
<footer>
    <div class="footer">
        <div class="left-logo">
            <a href="https://www.coderfoundry.com/"><img src="<?php echo $this->baseurl ?>/images/blog-headers/CF_Award_Orange.png" alt="img"></a>
        </div>
        <div class="right-content">
            <a href="https://www.linkedin.com/in/uro%C5%A1-rajkovi%C4%87-1b153211b/"><img src="<?php echo $this->baseurl ?>/images/blog-headers/linkedin.png" alt="linkendin"></a>
            <a href="https://github.com/Urke011"><img src="<?php echo $this->baseurl ?>/images/blog-headers/icons8-github-128.png" alt="git"></a>
        </div>
    </div>
    <p>© 2023 Uros Developer GmbH. All Rights Reserved.</p>
</footer>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-3.6.1.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>