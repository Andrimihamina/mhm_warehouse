<body>
  <!-- START LITTLE HEADER -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php
    // LOGO EN HAUT GAUCHE HOME
    require_once("../Layout/Logo/logo_home.php");
    // NAV BAR
    require_once("../Layout/Navigation/nav_bar.php");
    ?>
  </header>
  <!-- END LITTLE HEADER -->

  <!-- START SIDEBAR -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <?php 
          require_once("../../https/pages/sidebar.php");
          require_once("sidebar/$sidebar");
      ?>

     
    </ul>
  </aside>
  <!-- END SIDEBAR -->
