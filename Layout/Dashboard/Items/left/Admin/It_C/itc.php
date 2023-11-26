 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">IT & COMMUNICATIONS </h5></div>
            
      <!-- START CONSUMABLES ITC -->
      <div class="alert alert-light border-light alert-dismissible fade show" role="alert">  
        <div class="d-flex align-items-center">
          <!-- NUMBER OF THE TYPE -->
            <a href="../../Layout/products_all/prod_cons_itc.php">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bxl-android"></i></div>
              <div class="ps-3">
                <h7><?=$Nbr_Type_cons_itc;?> Consumables</h7>
            </a>
            <hr>
              <!-- PROSPECTING DE BESOIN -->
                <a href="../../Layout/Purchases/pros_cons_itc.php">
                  <!-- FROM MADAGASIKARA -->
                  <?php if($Prospecting_cons_itc_Mada>0){$madagasikara_cons_itc="danger";}else{$madagasikara_cons_itc="primary";}?>
                  <span class="text-<?=$madagasikara_cons_itc?> small pt-1 fw-bold">Loc</span>
                  <span class="text-<?=$madagasikara_cons_itc?> small pt-1 fw-bold"><?=$Prospecting_cons_itc_Mada;?></span>
                </a>
                |
                <a href="../../Layout/Purchases/pros_cons_itc.php">
                  <!-- FROM GERMANY -->
                  <?php if($Prospecting_cons_itc_Ger>0){$germany_cons_itc="danger";}else{$germany_cons_itc="primary";}?>
                  <span class="text-<?=$germany_cons_itc?> small pt-1 fw-bold">Imp</span>
                  <span class="text-<?=$germany_cons_itc?> small pt-1 fw-bold"><?=$Prospecting_cons_itc_Ger;?></span>
                </a>
            </div>
        </div>
      </div>

      <!-- START CONSUMABLES ITC -->
      <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center">
          <!-- NUMBER OF THE TYPE -->
            <a href="../../Layout/products_all/prod_mat_itc.php">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-computer-line"></i></div>
              <div class="ps-3">
                <h7><?=$Nbr_Type_mat_itc;?> Materials</h7>
            </a>
            <hr>

                <!-- PROSPECTING DE BESOIN -->
                <a href="../../Layout/Purchases/pros_mat_itc.php">
                  <!-- FROM MADAGASIKARA -->
                  <?php if($Prospecting_mat_itc_Mada>0){$madagasikara_mat_itc="danger";}else{$madagasikara_mat_itc="primary";}?>
                  <span class="text-<?=$madagasikara_mat_itc?> small pt-1 fw-bold">Loc</span>
                  <span class="text-<?=$madagasikara_mat_itc?> small pt-1 fw-bold"><?=$Prospecting_mat_itc_Mada;?></span>
                </a>
                |
                <a href="../../Layout/Purchases/pros_mat_itc.php">
                  <!-- FROM GERMANY -->
                  <?php if($Prospecting_mat_itc_Ger>0){$germany_mat_itc="danger";}else{$germany_mat_itc="primary";}?>
                  <span class="text-<?=$germany_mat_itc?> small pt-1 fw-bold">Imp</span>
                  <span class="text-<?=$germany_mat_itc?> small pt-1 fw-bold"><?=$Prospecting_mat_itc_Ger;?></span>
                </a>
              </div>
          </div>
      </div>

    </div>
  </div>
</div>