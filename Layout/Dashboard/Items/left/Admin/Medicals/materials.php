 <!-- START MATERIALS MEDICINES -->
<div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
        <h5 class="card-title">Medicals<span>| Materials</span></h5>
            
          <div class="d-flex align-items-center">

            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_med.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-stethoscope-line"></i></div>
                <div class="ps-3"><h6><?=$Nbr_Type_mat_med;?></h6>
              </a>

            <!-- PROSPECTING DE BESOIN -->
              <a href="../../Layout/Purchases/pros_mat_med.php">
                <!-- FROM MADAGASIKARA -->
                <?php if($Prospecting_mat_med_Mada>0){$madagasikara_mat_med="danger";}else{$madagasikara_mat_med="primary";}?>
                <span class="text-<?=$madagasikara_mat_med?> small pt-1 fw-bold"><?=$Prospecting_mat_med_Mada;?></span>
                <span class="text-<?=$madagasikara_mat_med?> small pt-1 fw-bold">Madagaskar</span>
              </a>
              </br>
              <a href="../../Layout/Purchases/pros_mat_med.php">
                <!-- FROM GERMANY -->
                <?php if($Prospecting_mat_med_Ger>0){$germany_mat_med="danger";}else{$germany_mat_med="primary";}?>
                <span class="text-<?=$germany_mat_med?> small pt-1 fw-bold"><?=$Prospecting_mat_med_Ger;?></span>
                <span class="text-<?=$germany_mat_med?> small pt-1 fw-bold">Germany</span>
              </a>
          </div>
    </div>
  </div>
</div>
</div>

<!-- END MATERIALS MEDICINES -->