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

      <!-- THRREE -->
      <li class="breadcrumb-item">
        <!-- LINK 2-->
        <a href="<?="$link_3"?>">
          <?=$title_3?>
        </a>
      </li>

      <!-- FOUR -->
      <li class="breadcrumb-item active">
          <?=$title_4?>
      </li>
    </ol>
  </nav>
</div>