 <!-- START MATERIALS LOGISTICS -->
 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
        <h5 class="card-title">Logistics<span>| Materials</span></h5>
            
          <div class="d-flex align-items-center">

            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_log.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-mark-pen-line"></i></div>
                <div class="ps-3"><h6><?=$Nbr_Type_mat_log;?></h6>
              </a>

                  <!-- PROSPECTING DE BESOIN -->
                    <a href="../../Layout/Purchases/pros_mat_log.php">
                      <!-- FROM MADAGASIKARA -->
                      <?php if($Prospecting_mat_log_Mada>0){$madagasikara_mat_log="danger";}else{$madagasikara_mat_log="primary";}?>
                      <span class="text-<?=$madagasikara_mat_log?> small pt-1 fw-bold"><?=$Prospecting_mat_log_Mada;?></span>
                      <span class="text-<?=$madagasikara_mat_log?> small pt-1 fw-bold">Madagaskar</span>
                    </a>
                    </br>
                    <a href="../../Layout/Purchases/pros_mat_log.php">
                      <!-- FROM GERMANY -->
                      <?php if($Prospecting_mat_log_Ger>0){$germany_mat_log="danger";}else{$germany_mat_log="primary";}?>
                      <span class="text-<?=$germany_mat_log?> small pt-1 fw-bold"><?=$Prospecting_mat_log_Ger;?></span>
                      <span class="text-<?=$germany_mat_log?> small pt-1 fw-bold">Germany</span>
                    </a>
                </div>
            </div>
    </div>
  </div>
</div>

<!-- END MATERIALS LOGISTICS -->