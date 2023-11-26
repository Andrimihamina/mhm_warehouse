<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#admin-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bxs-user"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="admin-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="<?=$communications?>"><i class="bi bi-circle"></i><span>Communications</span></a></li>
        <li><a href="<?=$HR?>"><i class="bi bi-circle"></i><span>HR</span></a></li>
        <li><a href="<?=$IT?>"><i class="bi bi-circle"></i><span>IT</span></a></li>
        <li><a href="<?=$Finance?>"><i class="bi bi-circle"></i><span>Finance</span></a></li>
    </ul>
</li>