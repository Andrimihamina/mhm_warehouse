 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">TECHNICALS</h5></div>
       
      <!-- START CONSUMABLES TECHNICALS -->
      <div class="alert alert-light border-light alert-dismissible fade show" role="alert">  
        <div class="d-flex align-items-center">
            <a href="../../Layout/products_all/prod_cons_tec.php">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bxs-car-battery"></i></div>
              <div class="ps-3">
                <h7><?=$Nbr_Type_cons_tec;?> Consumables</h7>
            </a>
            <hr>
                <!-- PROSPECTING DE BESOIN -->
                <a href="../../Layout/Purchases/pros_cons_tec.php">
                  <!-- FROM MADAGASIKARA -->
                  <?php if($Prospecting_cons_tec_Mada>0){$madagasikara_cons_tec="danger";}else{$madagasikara_cons_tec="primary";}?>
                  <span class="text-<?=$madagasikara_cons_tec?> small pt-1 fw-bold">Loc</span>
                  <span class="text-<?=$madagasikara_cons_tec?> small pt-1 fw-bold"><?=$Prospecting_cons_tec_Mada;?></span>
                </a>
                |
                <a href="../../Layout/Purchases/pros_cons_tec.php">
                  <!-- FROM GERMANY -->
                  <?php if($Prospecting_cons_tec_Ger>0){$germany_cons_tec="danger";}else{$germany_cons_tec="primary";}?>
                  <span class="text-<?=$germany_cons_tec?> small pt-1 fw-bold">Imp</span>
                  <span class="text-<?=$germany_cons_tec?> small pt-1 fw-bold"><?=$Prospecting_cons_tec_Ger;?></span>
                </a>
              </div>
        </div>
      </div>

      <!-- START MATERIALS TECHNICALS -->
      <div class="alert alert-light border-light alert-dismissible fade show" role="alert">  
        <div class="d-flex align-items-center">
          <!-- NUMBER OF THE TYPE -->
            <a href="../../Layout/products_all/prod_mat_tec.php">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bxs-car"></i></div>
              <div class="ps-3">
                <h7><?=$Nbr_Type_mat_tec;?> Materials</h7>
            </a>
            <hr>
                <!-- PROSPECTING DE BESOIN -->
                  <a href="../../Layout/Purchases/pros_mat_tec.php">
                    <!-- FROM MADAGASIKARA -->
                    <?php if($Prospecting_mat_tec_Mada>0){$madagasikara_mat_tec="danger";}else{$madagasikara_mat_tec="primary";}?>
                    <span class="text-<?=$madagasikara_mat_tec?> small pt-1 fw-bold">Loc</span>
                    <span class="text-<?=$madagasikara_mat_tec?> small pt-1 fw-bold"><?=$Prospecting_mat_tec_Mada;?></span>
                  </a>
                  |
                  <a href="../../Layout/Purchases/pros_mat_tec.php">
                    <!-- FROM GERMANY -->
                    <?php if($Prospecting_mat_tec_Ger>0){$germany_mat_tec="danger";}else{$germany_mat_tec="primary";}?>
                    <span class="text-<?=$germany_mat_tec?> small pt-1 fw-bold">Imp</span>
                    <span class="text-<?=$germany_mat_tec?> small pt-1 fw-bold"><?=$Prospecting_mat_tec_Ger;?></span>
                  </a>
              </div>
        </div>
      </div>

    </div>
  </div>
</div>
