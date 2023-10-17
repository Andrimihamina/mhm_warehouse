<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3">

    <!--ROFILE-->
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <!--IMAGE-->
        <img src="../../../../../img/users_img/<?php $profi = print_r($profile[0]["users_img"]);?>" alt="IMG" class="rounded-circle">
        <!--NAME-->
        <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION["user"]["username"]?></span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION["user"]["username"]?></h6>
              <!--RESPONSABILIT-->
              <span><?php $resp = print_r($responsi[0]["responsability"]);?></span>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../../../../html/body/profile/profile/profile_1">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../users">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../../../../../php/functions/deconnexion/deconnexion.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

      </ul>
    </li>

  </ul>
</nav>
   