<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
    <li class="nav-item dropdown pe-3">

  <!--PROFIL-->
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <!--IMAGE-->
      <img src="../../../warehouse_img/img/users_img/<?=$UsersImage;?>" alt="PROFILE" class="rounded-circle">
      <!--NAME-->
      <span class="d-none d-md-block dropdown-toggle ps-2"><?=$UserName;?></span>
    </a>
  <!-- DETAILS -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
      <li class="dropdown-header">
        <!-- NAME -->
          <h6><?=$UserName;?></h6>
        <!--RESPONSABILIT-->
          <span><?=$Responsability;?></span>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="../../Layout/Profile/Profile.php">
          <i class="bi bi-person"></i>
          <span>My Profile</span>
        </a>
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <hr class="dropdown-divider">
      </li>

      <li>
        <a class="dropdown-item d-flex align-items-center" href="../../https/deconnexion/deconnexion.php">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
      </li>

      </ul>
    </li>

  </ul>
</nav>
   