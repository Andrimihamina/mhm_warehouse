<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#logistics-nav" data-bs-toggle="collapse" href="#">
        <i class="bx bx-car"></i><span>Logistics</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <?php
        include_once("../../https/pages/dashboard.php");
    ?>
    <ul id="logistics-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li><a href="<?=$cars?>"><i class="bi bi-circle"></i><span>Cars</span></a></li>
        <li><a href="<?=$fuel?>"><i class="bi bi-circle"></i><span>Fuel</span></a></li>
    </ul>
</li>