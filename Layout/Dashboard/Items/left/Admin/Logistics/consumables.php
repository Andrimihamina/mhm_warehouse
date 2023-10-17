 <!-- START CONSUMABLES LOGITICS -->
 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
        <h5 class="card-title">Logistics<span>| Consumables</span></h5>
            
          <div class="d-flex align-items-center">

            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_cons_log.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-file-paper-line"></i></div>
                <div class="ps-3"><h6><?=$Nbr_Type_cons_log;?></h6>
              </a>

            <!-- PROSPECTING DE BESOIN -->
              <a href="../../Layout/Purchases/pros_cons_log.php">
                <!-- FROM MADAGASIKARA -->
                <?php if($Prospecting_cons_log_Mada>0){$madagasikara_cons_log="danger";}else{$madagasikara_cons_log="primary";}?>
                <span class="text-<?=$madagasikara_cons_log?> small pt-1 fw-bold"><?=$Prospecting_cons_log_Mada;?></span>
                <span class="text-<?=$madagasikara_cons_log?> small pt-1 fw-bold">Madagaskar</span>
              </a>
              </br>
              <a href="../../Layout/Purchases/pros_cons_log.php">
                <!-- FROM GERMANY -->
                <?php if($Prospecting_cons_log_Ger>0){$germany_cons_log="danger";}else{$germany_cons_log="primary";}?>
                <span class="text-<?=$germany_cons_log?> small pt-1 fw-bold"><?=$Prospecting_cons_log_Ger;?></span>
                <span class="text-<?=$germany_cons_log?> small pt-1 fw-bold">Germany</span>
              </a>

          </div>
      </div>
    </div>
  </div>
</div>

<!-- END CONSUMABLES LOGISTIC -->