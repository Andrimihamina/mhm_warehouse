 <!-- START CONSUMABLES FOODS -->
 <div class="col-xxl-4 col-md-8">
  <div class="card info-card sales-card">
    <div class="card-body">
        <h5 class="card-title">Foods<span>| Consumables</span></h5>
            
          <div class="d-flex align-items-center">

            <!-- NUMBER OF THE TYPE -->
              <a href="../../Layout/products_all/prod_cons_foo.php">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="ri-apple-line"></i></div>
                <div class="ps-3"><h6><?=$Nbr_Type_cons_foo;?></h6>
              </a>

            <!-- PROSPECTING DE BESOIN -->
              <a href="../../Layout/Purchases/pros_cons_foo.php">
                <!-- FROM MADAGASIKARA -->
                <?php if($Prospecting_cons_foo_Mada>0){$madagasikara_cons_foo="danger";}else{$madagasikara_cons_foo="primary";}?>
                <span class="text-<?=$madagasikara_cons_foo?> small pt-1 fw-bold"><?=$Prospecting_cons_foo_Mada;?></span>
                <span class="text-<?=$madagasikara_cons_foo?> small pt-1 fw-bold">Madagaskar</span>
              </a>
              </br>
              <a href="../../Layout/Purchases/pros_cons_foo.php">
                <!-- FROM GERMANY -->
                <?php if($Prospecting_cons_foo_Ger>0){$germany_cons_foo="danger";}else{$germany_cons_foo="primary";}?>
                <span class="text-<?=$germany_cons_foo?> small pt-1 fw-bold"><?=$Prospecting_cons_foo_Ger;?></span>
                <span class="text-<?=$germany_cons_foo?> small pt-1 fw-bold">Germany</span>
              </a>

          </div>
      </div>
    </div>
  </div>
</div>
<!-- END CONSUMABLES FOODS -->