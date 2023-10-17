<div class="pagetitle">
  <h1><?=$B_head?></h1>
  <nav>
    <ol class="breadcrumb">  
      <!-- ONE -->
      <li class="breadcrumb-item">
          <!-- DASHBOARD LINK -->
          <?php
            include_once("../../https/pages/dashboard.php");
          ?>
          <a href="<?="$dashboard"?>">
            Home
          </a>
      </li>

      <!-- TWO -->
      <li class="breadcrumb-item">
          <!-- LINK 2-->
          <a href="<?="$link_2"?>">
            <?=$title_2?>
          </a>
      </li>

      <!-- THrREE -->
      <li class="breadcrumb-item active">
          <?=$title_3?>
      </li>
    </ol>
  </nav>
</div>