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
<div class="education-title rounded-2">
    <h2>Education</h2>
</div>
<div class="certificates">
    <div class="container">
        <div class="row">
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"
                                                        alt="diplom">
                <p>ITAcademy from Belgrade</p>
                <div class="hover-text">
                    One-year PHP course with team leader
                </div>
            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"
                                                        alt="diplom">
                <p>University of Belgrade</p>
                <div class="hover-text">
                    Nostrified university degree in Germany
                    240 ESPB points
                </div>
            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"
                                                        alt="diplom">
                <p>Telc German-B2</p>
                <div class="hover-text">
                    Conversational German language
                </div>

            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom-und-hut-des-absolventen.png"
                                                        alt="diplom">
                <p>Telc German-B1</p>
                <div class="hover-text">
                    Basic level of the German language
                </div>
            </div>
            <div class="rounded-4 col edu-content">
                <img src="images/icons-tech/diplom-und-hut-des-absolventen.png" alt="diplom">
                <p>BAMF-The orientation course</p>
                <div class="hover-text">
                    Knowledge of German culture and society
                </div>
            </div>
        </div>
        <div class="row">
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom.png" alt="diplom">
                <p>Phishing training</p>
                <div class="hover-text">
                    Preventive course
                </div>
            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom.png" alt="diplom">
                <p>Data protection</p>
                <div class="hover-text">
                    Basic course
                </div>
            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom.png" alt="diplom">
                <p>Datenschutz</p>
                <div class="hover-text">
                    Privacy:
                    Home, office, employees
                </div>
            </div>
            <div class="rounded-4 col edu-content"><img src="images/icons-tech/diplom.png" alt="diplom">
                <p class="edu-text">It Schulung</p>
                <div class="hover-text">
                    Security preventive
                </div>
            </div>
            <div class="rounded-4 col edu-content">
                <img src="images/icons-tech/running.png" class="rounded-3" alt="running">
                <p>B2Run</p>
                <div class="hover-text">
                    Company run
                </div>
            </div>
        </div>
    </div>
</div>
<div class="skills-title rounded-2">
    <h2>Skills</h2>
</div>

<div class="skills-table d-flex justify-content-center ">
    <table class="table">
        <tbody>
        <tr>
            <th scope="row"></th>
            <td>
                <div class="icon">
                    <a href="https://getbootstrap.com/"><img src="images/icons-tech/bootstrap.png" alt="Bootstrap"/></a>
                    <p class="pt-2">Bootstrap</p></div>
            </td>
</div>
<td>
    <div class="icon">
        <a href="https://www.php.net/"><img src="images/icons-tech/php.png" alt="PHP"/></a>
        <p class="pt-2">PHP</p></div>
</td>
<td>
    <div class="icon"><a href="https://learn.microsoft.com/en-us/dotnet/csharp/"><img
                    src="images/icons-tech/c-sharp.png" alt="C#"/></a>
        <p class="pt-2">C#</p></div>
</td>

<td>
    <div class="icon"><a href="https://www.javascript.com/"><img src="images/icons-tech/js.png"
                                                                 alt="JavaScript"/></a>
        <p class="pt-2">JavaScript</p></div>
</td>

<td>
    <div class="icon"><a href="https://www.joomla.org/"><img src="images/icons-tech/joomla.png"
                                                             alt="Joomla"/></a>
        <p class="pt-2">Joomla</p></div>
</td>

</tr>
<tr>
    <th scope="row"></th>
    <td>
        <div class="icon"><a href="https://sass-lang.com/"><img src="images/icons-tech/sass.png" alt="sass"/></a>
            <p class="pt-2">Sass</p></div>
    </td>
    <td>
        <div class="icon"><a href="https://www.mysql.com/"><img src="images/icons-tech/mysql.png" alt="Mysql"/></a>
            <p class="pt-2">Mysql</p></div>
    </td>
    <td>
        <div class="icon"><a href="https://dotnet.microsoft.com/en-us/"><img
                        src="images/icons-tech/NET_Core_Logo.svg.png" alt="Net"/></a>
            <p class="pt-2">.Net</p></div>
    </td>
    <td>
        <div class="icon"><a href="https://jquery.com/"><img src="images/icons-tech/icons8-jquery-50.png"
                                                             alt="icons8 jquery 50"/></a><br/>
            <p class="pt-2">Jquery</p></div>
    </td>
    <td>
        <div class="icon"><a href="https://wordpress.org/"><img src="images/icons-tech/wordpress.png"
                                                                alt="WordPress"/></a>
            <p class="pt-2">WordPress</p></div>
    </td>
</tr>
</body>
</table>

</div>

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.bundle.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.esm.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/template.js"></script>
</body>
</html>