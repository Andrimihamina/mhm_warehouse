<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bx-line-chart"></i><span>Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li><a href="<?=$orders_history?>"><i class="bi bi-circle"></i><span>History Orders</span></a></li>
        <li><a href="<?=$purchases_history?>"><i class="bi bi-circle"></i><span>History Purchases</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Charts Orders history</span></a></li>
        <li><a href="#"><i class="bi bi-circle"></i><span>Charts Purchases history</span></a></li>
    </ul>
</li>