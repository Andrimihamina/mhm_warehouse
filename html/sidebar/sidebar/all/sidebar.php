<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center"> 
    <?php
        //ON INCLU LE LOGO EN HAUT GAUCHE HOME
        include_once ("../../../../logo/logo_home.php");
        //ON INCLU SEARCH BAR
        include_once ("../../../../search_bar/search_bar.php");
        //ON INCLU LE NAV BAR
        include_once("../../../../search_bar/nav_bar.php");
    ?>
  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php
        //ON INCLU LE DASHBOARD 
        include_once ("../../../../sidebar/html/dashboard.php");

        //ON INCLU LE PURCHASE
        include_once("../../../../../php/header/title/sidebar_purchase.php");

        //ON INCLU LE PRODUCTS
        include_once("../../../../../php/header/title/sidebar_products.php");

        //ON INCLU LE ANALITYCS
        include_once("../../../../../php/header/title/sidebar_analytics.php"); 

        //ON INCLU LE STATISTICS
        include_once("../../../../../php/header/title/sidebar_flux.php");

        //ON INCLU LE Pages
        include_once ("../../../../sidebar/html/profile.php");

        //ON INCLU LE USERS
        include_once("../../../../../php/header/title/sidebar_users.php");

        //ON INCLU LE contact
        include_once("../../../../../php/header/title/sidebar_login.php");

        //ON INCLU LE SETTINGS
        include_once("../../../../../php/header/title/sidebar_settings.php");

        //ON INCLU LE RESPONSABILITIES
        include_once("../../../../../php/header/title/sidebar_responsibility.php");

        //ON INCLU LE RESPONSABILITIES
        include_once("../../../../../php/header/title/sidebar_services.php");

        ?>
    </ul>
  </aside>
  <!-- End Sidebar-->