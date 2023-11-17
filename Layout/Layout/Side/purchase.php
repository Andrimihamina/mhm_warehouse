<?php
    require_once ("../../https/pages/dashboard.php");
?>
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#purchase-nav" data-bs-toggle="collapse" href="#">
        <i class="ri ri-shopping-basket-line"></i><span>Purchase</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>

    <ul id="purchase-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
        <a href="<?=$purchases;?>">
            <i class="bi bi-circle"></i><span>Prospecting</span>
        </a>
        </li>
        <li>
        <a href="<?=$suppliers;?>">
            <i class="bi bi-circle"></i><span>Suppliers</span>
        </a>
        </li>
        <li>
        <a href="#">
            <i class="bi bi-circle"></i><span>Catalogs</span>
        </a>
        </li>
        <li>
        <a href="#">
            <i class="bi bi-circle"></i><span>Pro-forma</span>
        </a>
        </li>
        <li>
        <a href="#">
            <i class="bi bi-circle"></i><span>Money flow sheet</span>
        </a>
        </li>
        <li>
        <a href="<?=$fuel?>">
            <i class="bi bi-circle"></i><span>Fuel</span>
        </a>
        </li>
    </ul>
</li>
