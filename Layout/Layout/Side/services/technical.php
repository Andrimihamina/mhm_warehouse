<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#technical-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bx-wrench"></i><span>Technicals</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="technical-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="<?=$biomdical?>"><i class="bi bi-circle"></i><span>Biomedical</span></a></li>
        <li><a href="<?=$water?>"><i class="bi bi-circle"></i><span>Water</span></a></li>
        <li><a href="<?=$maintenance?>"><i class="bi bi-circle"></i><span>Maintenance</span></a></li>
        <li><a href="<?=$mechanic?>"><i class="bi bi-circle"></i><span>Mechanic</span></a></li>
    </ul>
</li>