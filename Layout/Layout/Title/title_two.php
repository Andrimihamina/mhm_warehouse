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
      <li class="breadcrumb-item active">
          <?=$title_2?>
      </li>
    </ol>
  </nav>
</div>