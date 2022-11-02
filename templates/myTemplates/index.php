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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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

<jdoc:include type="modules" name="footer"/>

<div class="table-responsive certificates">
    <table class="table">
        <tr>
            <td class="rounded-5"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"  alt="diplom">
                <p>ITAcademy from Belgrade</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"  alt="diplom">
                <p>University of Belgrade</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"  alt="diplom">
                <p>Telc German-B2</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png" alt="diplom">
                <p>Telc German-B1</p>
            </td>
            <td class="rounded-5">
                <img src="images/icons-tech/diplom-und-hut-des-absolventen.png"  alt="diplom">
                <p>BAMF-The orientation course</p>
            </td>
        </tr>
        <tr>
            <td class="rounded-5"><img src="images/icons-tech/diplom.png"  alt="diplom">
                <p>Data</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom.png"  alt="diplom">
                <p>Data</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom.png"  alt="diplom">
                <p>Data</p>
            </td>
            <td class="rounded-5"><img src="images/icons-tech/diplom.png"  alt="diplom">
                <p>Data</p>
            </td>
            <td class="rounded-5">
                <img src="images/icons-tech/running.png" class="rounded-3" alt="running">
                <p>B2Run</p>
            </td>
        </tr>
    </table>


</div>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.esm.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>