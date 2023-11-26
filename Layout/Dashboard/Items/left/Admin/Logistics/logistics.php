 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">LOGISTICS</h5></div>
            
        <!-- START CONSUMABLES LOGISTICS -->
        <div class="alert alert-light border-light alert-dismissible fade show" role="alert">  
          <div class="d-flex align-items-center">
            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_cons_log.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-file-paper-line"></i></div>
                <div class="ps-3">
                  <h7><?=$Nbr_Type_cons_log;?> Consumables</h7>
              </a>
              <hr>
                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_cons_log.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_cons_log_Mada>0){$madagasikara_cons_log="danger";}else{$madagasikara_cons_log="primary";}?>
                      <span class="text-<?=$madagasikara_cons_log?> small pt-1 fw-bold">Loc</span>
                      <span class="text-<?=$madagasikara_cons_log?> small pt-1 fw-bold"><?=$Prospecting_cons_log_Mada;?></span>
                    </a>
                    |
                    <a href="../../Layout/Purchases/pros_cons_log.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_cons_log_Ger>0){$germany_cons_log="danger";}else{$germany_cons_log="primary";}?>
                      <span class="text-<?=$germany_cons_log?> small pt-1 fw-bold">Imp</span>
                      <span class="text-<?=$germany_cons_log?> small pt-1 fw-bold"><?=$Prospecting_cons_log_Ger;?></span>
                    </a>
               </div>
          </div>
        </div>

        <!-- START MATERIALS LOGISTICS -->
        <div class="alert alert-light border-light alert-dismissible fade show" role="alert">  
          <div class="d-flex align-items-center">
            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_log.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-mark-pen-line"></i></div>
                <div class="ps-3">
                  <h7><?=$Nbr_Type_mat_log;?> Materials</h7>
              </a>
              <hr>
                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_mat_log.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_mat_log_Mada>0){$madagasikara_mat_log="danger";}else{$madagasikara_mat_log="primary";}?>
                      <span class="text-<?=$madagasikara_mat_log?> small pt-1 fw-bold">Loc</span>
                      <span class="text-<?=$madagasikara_mat_log?> small pt-1 fw-bold"><?=$Prospecting_mat_log_Mada;?></span> 
                    </a>
                    |
                    <a href="../../Layout/Purchases/pros_mat_log.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_mat_log_Ger>0){$germany_mat_log="danger";}else{$germany_mat_log="primary";}?>
                      <span class="text-<?=$germany_mat_log?> small pt-1 fw-bold">Imp</span>
                      <span class="text-<?=$germany_mat_log?> small pt-1 fw-bold"><?=$Prospecting_mat_log_Ger;?></span>
                    </a>
                </div>
          </div>
        </div>

    </div>
  </div>
</div>
