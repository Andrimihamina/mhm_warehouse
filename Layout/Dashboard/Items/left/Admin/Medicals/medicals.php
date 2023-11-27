<div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">MEDICAL</h5></div>

          <!-- START MEDICINES -->
          <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
              <!-- NUMBER OF THE TYPE -->
                  <a href="../../Layout/products_all/prod_medicines.php">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bx-capsule"></i></div>
                    <div class="ps-3">
                      <h7><?=$Nbr_Type_med;?> Medicines</h7>
                  </a>
                  <hr>
                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_medicines.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_med_Mada>0){$madagasikara_med="danger";}else{$madagasikara_med="primary";}?>
                      <span class="text-<?=$madagasikara_med?> small pt-1 fw-bold">Loc</span>
                      <span class="text-<?=$madagasikara_med?> small pt-1 fw-bold"><?=$Prospecting_med_Mada;?></span>
                    </a>
                    |
                    <a href="../../Layout/Purchases/pros_medicines.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_med_Ger>0){$germany_med="danger";}else{$germany_med="primary";}?>
                      <span class="text-<?=$germany_med?> small pt-1 fw-bold">Imp</span>
                      <span class="text-<?=$germany_med?> small pt-1 fw-bold"><?=$Prospecting_med_Ger;?></span>
                    </a>
                  </div>
            </div>
          </div>
         
          <!-- START CONSUMABLES -->
          <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
              <!-- NUMBER OF THE TYPE -->
                  <a href="../../Layout/products_all/prod_cons_med.php">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-game-line"></i></div>
                    <div class="ps-3">
                      <h7><?=$Nbr_Type_cons_med;?> Consumables</h7>
                  </a>
                  <hr>
                      <!-- PROSPECTING DE BESOIN -->
                        <a href="../../Layout/Purchases/pros_cons_med.php">
                          <!-- FROM MADAGASIKARA -->
                          <?php if($Prospecting_cons_med_Mada>0){$madagasikara_cons_med="danger";}else{$madagasikara_cons_med="primary";}?>
                          <span class="text-<?=$madagasikara_cons_med?> small pt-1 fw-bold">Loc</span>
                          <span class="text-<?=$madagasikara_cons_med?> small pt-1 fw-bold"><?=$Prospecting_cons_med_Mada;?></span>
                        </a>
                        |
                        <a href="../../Layout/Purchases/pros_cons_med.php">
                          <!-- FROM GERMANY -->
                          <?php if($Prospecting_cons_med_Ger>0){$germany_cons_med="danger";}else{$germany_cons_med="primary";}?>
                          <span class="text-<?=$germany_cons_med?> small pt-1 fw-bold">Imp</span>
                          <span class="text-<?=$germany_cons_med?> small pt-1 fw-bold"><?=$Prospecting_cons_med_Ger;?></span>
                        </a>
                    </div>
            </div>
          </div>

          <!-- START MATERIALS -->
          <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
              <!-- NUMBER OF THE TYPE -->
                <a href="../../Layout/products_all/prod_mat_med.php">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-stethoscope-line"></i></div>
                  <div class="ps-3">
                    <h7><?=$Nbr_Type_mat_med;?> Materials</h7>
                </a>
                <hr>
                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_mat_med.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_mat_med_Mada>0){$madagasikara_mat_med="danger";}else{$madagasikara_mat_med="primary";}?>
                      <span class="text-<?=$madagasikara_mat_med?> small pt-1 fw-bold">Loc</span>
                      <span class="text-<?=$madagasikara_mat_med?> small pt-1 fw-bold"><?=$Prospecting_mat_med_Mada;?></span>
                    </a>
                    |
                    <a href="../../Layout/Purchases/pros_mat_med.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_mat_med_Ger>0){$germany_mat_med="danger";}else{$germany_mat_med="primary";}?>
                      <span class="text-<?=$germany_mat_med?> small pt-1 fw-bold">Imp</span>
                      <span class="text-<?=$germany_mat_med?> small pt-1 fw-bold"><?=$Prospecting_mat_med_Ger;?></span>
                    </a>
                  </div>
            </div>
          </div>

    </div>
  </div>
</div>
