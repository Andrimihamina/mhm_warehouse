 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">REAL ESTATE</h5></div>
            
        <!-- START REAL ESTATE -->
        <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
          <div class="d-flex align-items-center">
            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_imo.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-home-4-line"></i></div>
                <div class="ps-3">
                  <h7><?=$Nbr_Type_mat_imo;?> Real Estate</h7>
              </a>
              <hr>
                  <!-- PROSPECTING DE BESOIN -->
                  <a href="../../Layout/Purchases/pros_mat_imo.php">
                    <!-- FROM MADAGASIKARA -->
                    <?php if($Prospecting_mat_imo_Mada>0){$madagasikara_mat_imo="danger";}else{$madagasikara_mat_imo="primary";}?>
                    <span class="text-<?=$madagasikara_mat_imo?> small pt-1 fw-bold">Loc</span>
                    <span class="text-<?=$madagasikara_mat_imo?> small pt-1 fw-bold"><?=$Prospecting_mat_imo_Mada;?></span>
                  </a>
                  |
                  <a href="../../Layout/Purchases/pros_mat_imo.php">
                    <!-- FROM GERMANY -->
                    <?php if($Prospecting_mat_imo_Ger>0){$germany_mat_imo="danger";}else{$germany_mat_imo="primary";}?>
                    <span class="text-<?=$germany_mat_imo?> small pt-1 fw-bold">Imp</span>
                    <span class="text-<?=$germany_mat_imo?> small pt-1 fw-bold"><?=$Prospecting_mat_imo_Ger;?></span>
                  </a>
                </div>
          </div>
        </div>

    </div>
  </div>
</div>