<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center"> 
    <?php
        //ON INCLU LE LOGO EN HAUT GAUCHE HOME
        include_once ("../logo/logo_home.php");
        //ON INCLU SEARCH BAR
        include_once ("../search_bar/search_bar.php");
        //ON INCLU LE NAV BAR
        include_once("../search_bar/nav_bar.php");
    ?>
  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php
        //ON INCLU LE HEAD QUI CONTIENT LE TITRE
        include_once ("../sidebar/sidebar_head.php");

        //ON INCLU LE PURCHASE
        include_once ("../sidebar/purchase.php");

        //ON INCLU LE PRODUCTS
        include_once ("../sidebar/products.php");

        //ON INCLU LE STATISTICS
        include_once ("../sidebar/analytics.php");

        //ON INCLU LE STATISTICS
        include_once ("../sidebar/flux.php");


        //ON INCLU LE PAGE
        //ON INCLU LE Pages
        include_once ("../sidebar/pages.php");

        //ON INCLU LE contact
        include_once ("../sidebar/register.php");

        //ON INCLU LE contact
        include_once ("../sidebar/login.php");

         //ON INCLU LE SETTINGS
         include_once ("../sidebar/settings.php");

        //ON INCLU LE error
        include_once ("../sidebar/error.php");

        ?>
    </ul>
  </aside>
  <!-- End Sidebar-->