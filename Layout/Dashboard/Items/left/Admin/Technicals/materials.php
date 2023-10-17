 <!-- START MATERIALS TECHNICAL -->
 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
        <h5 class="card-title">Technicals<span>| Materials</span></h5>
            
          <div class="d-flex align-items-center">

            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_mat_tec.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bx bxs-car"></i></div>
                <div class="ps-3"><h6><?=$Nbr_Type_mat_tec;?></h6>
              </a>

            <!-- PROSPECTING DE BESOIN -->
              <a href="../../Layout/Purchases/pros_mat_tec.php">
                <!-- FROM MADAGASIKARA -->
                <?php if($Prospecting_mat_tec_Mada>0){$madagasikara_mat_tec="danger";}else{$madagasikara_mat_tec="primary";}?>
                <span class="text-<?=$madagasikara_mat_tec?> small pt-1 fw-bold"><?=$Prospecting_mat_tec_Mada;?></span>
                <span class="text-<?=$madagasikara_mat_tec?> small pt-1 fw-bold">Madagaskar</span>
              </a>
              </br>
              <a href="../../Layout/Purchases/pros_mat_tec.php">
                <!-- FROM GERMANY -->
                <?php if($Prospecting_mat_tec_Ger>0){$germany_mat_tec="danger";}else{$germany_mat_tec="primary";}?>
                <span class="text-<?=$germany_mat_tec?> small pt-1 fw-bold"><?=$Prospecting_mat_tec_Ger;?></span>
                <span class="text-<?=$germany_mat_tec?> small pt-1 fw-bold">Germany</span>
              </a>

          </div>
      </div>
    </div>
  </div>
</div>
<!-- END MATERIALS TECHNICALS -->