 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">FOODS</h5></div>
           
        <!-- START CONSUMABLES FOODS -->
        <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
          <div class="d-flex align-items-center">
            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_cons_foo.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-apple-line"></i></div>
                <div class="ps-3">
                  <h7><?=$Nbr_Type_cons_foo;?> Consumables</h7>
              </a>
              <hr>
                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_cons_foo.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_cons_foo_Mada>0){$madagasikara_cons_foo="danger";}else{$madagasikara_cons_foo="primary";}?>
                      <span class="text-<?=$madagasikara_cons_foo?> small pt-1 fw-bold">Loc</span>
                      <span class="text-<?=$madagasikara_cons_foo?> small pt-1 fw-bold"><?=$Prospecting_cons_foo_Mada;?></span>
                    </a>
                    |
                    <a href="../../Layout/Purchases/pros_cons_foo.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_cons_foo_Ger>0){$germany_cons_foo="danger";}else{$germany_cons_foo="primary";}?>
                      <span class="text-<?=$germany_cons_foo?> small pt-1 fw-bold">Imp</span>
                      <span class="text-<?=$germany_cons_foo?> small pt-1 fw-bold"><?=$Prospecting_cons_foo_Ger;?></span>
                    </a>
                </div>
          </div>
        </div>

        <!-- START MATERIALS FOODS -->
        <div class="alert alert-light border-light alert-dismissible fade show" role="alert">
          <div class="d-flex align-items-center">
            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_foo.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bx-restaurant"></i></div>
                <div class="ps-3">
                  <h7><?=$Nbr_Type_mat_foo;?> Materials</h7>
              </a>
              <hr>
                <!-- PROSPECTING DE BESOIN -->
                  <a href="../../Layout/Purchases/pros_mat_foo.php">
                    <!-- FROM MADAGASIKARA -->
                    <?php if($Prospecting_mat_foo_Mada>0){$madagasikara_mat_foo="danger";}else{$madagasikara_mat_foo="primary";}?>
                    <span class="text-<?=$madagasikara_mat_foo?> small pt-1 fw-bold">Loc</span>
                    <span class="text-<?=$madagasikara_mat_foo?> small pt-1 fw-bold"><?=$Prospecting_mat_foo_Mada;?></span>
                  </a>
                  |
                  <a href="../../Layout/Purchases/pros_mat_foo.php">
                    <!-- FROM GERMANY -->
                    <?php if($Prospecting_mat_foo_Ger>0){$germany_mat_foo="danger";}else{$germany_mat_foo="primary";}?>
                    <span class="text-<?=$germany_mat_foo?> small pt-1 fw-bold">Imp</span>
                    <span class="text-<?=$germany_mat_foo?> small pt-1 fw-bold"><?=$Prospecting_mat_foo_Ger;?></span>
                  </a>
                </div>
          </div>
      </div>

    </div>
  </div>
</div>
