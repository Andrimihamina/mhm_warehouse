<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Medicals-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bx-plus-medical"></i><span>Medicals</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="Medicals-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="<?=$oxygen?>"><i class="bi bi-circle"></i><span>Oxygen</span></a></li>
        <li><a href="<?=$epoc?>"><i class="bi bi-circle"></i><span>Epoc</span></a></li>
        <li><a href="<?=$crp?>"><i class="bi bi-circle"></i><span>CRP</span></a></li>
    </ul>
</li>