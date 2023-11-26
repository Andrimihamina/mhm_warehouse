<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#operations-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bxl-mailchimp"></i><span>Operations</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="operations-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="<?=$transporter?>"><i class="bi bi-circle"></i><span>Transporter</span></a></li>
        <li><a href="<?=$cleanning?>"><i class="bi bi-circle"></i><span>Cleanning</span></a></li>
        <li><a href="<?=$laundry?>"><i class="bi bi-circle"></i><span>Laundry</span></a></li>
        <li><a href="<?=$cooking?>"><i class="bi bi-circle"></i><span>Cooking</span></a></li>
    </ul>
</li>