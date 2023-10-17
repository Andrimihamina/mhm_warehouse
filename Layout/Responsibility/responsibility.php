<!-- HEAD -->
<?php
  $B_head ="Responsibilities";
  $titre = "Responsibilities";
  $title_2 = "Responsibilities";
  $title ="Title/title_two.php";
  $section = "section Responsibilities";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">
    <div class="card">
      <div class="card-body"><h5 class="card-title"></h5>
        <div class="d-flex align-items-start">
          <!-- TITRE -->
          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-overview-tab" data-bs-toggle="pill" data-bs-target="#v-pills-overview" type="button" role="tab" aria-controls="v-pills-overview" aria-selected="true">Overview</button>
            <button class="nav-link" id="v-pills-admin_warehouse-tab" data-bs-toggle="pill" data-bs-target="#v-pills-admin_warehouse" type="button" role="tab" aria-controls="v-pills-admin_warehouse" aria-selected="false">Admin & Warehouse</button>
            <button class="nav-link" id="v-pills-medical-tab" data-bs-toggle="pill" data-bs-target="#v-pills-medical" type="button" role="tab" aria-controls="v-pills-medical" aria-selected="false">Medicals</button>
            <button class="nav-link" id="v-pills-office-tab" data-bs-toggle="pill" data-bs-target="#v-pills-office" type="button" role="tab" aria-controls="v-pills-office" aria-selected="false">Offices</button>
            <button class="nav-link" id="v-pills-operations-tab" data-bs-toggle="pill" data-bs-target="#v-pills-operations" type="button" role="tab" aria-controls="v-pills-operations" aria-selected="false">Operations</button>
            <button class="nav-link" id="v-pills-chaplins-tab" data-bs-toggle="pill" data-bs-target="#v-pills-chaplins" type="button" role="tab" aria-controls="v-pills-chaplins" aria-selected="false">Chaplins</button>
            <button class="nav-link" id="v-pills-technicals-tab" data-bs-toggle="pill" data-bs-target="#v-pills-technicals" type="button" role="tab" aria-controls="v-pills-technicals" aria-selected="false">Technicals</button>
          </div>

          <div class="tab-content" id="v-pills-tabContent">
            <!-- OVERVIEW -->
            <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel" aria-labelledby="v-pills-overview-tab">
              <?php 
                include_once("../../sql/functions/responsibility/responsibility.php");
                include_once("../../Layout/Responsibility/items/overview.php");
              ?>
            </div>
            <!-- SERVICE ADMIN/WAREHOUSE -->
            <div class="tab-pane fade" id="v-pills-admin_warehouse" role="tabpanel" aria-labelledby="v-pills-admin_warehouse-tab">
                <?php 
                    include_once("../../sql/functions/services_responsibility/service_responsibility.php");
                    include_once("../../Layout/Responsibility/items/admin_warehouse.php");
                ?>
            </div>
            <!-- SERVICE MEDICAL -->
            <div class="tab-pane fade" id="v-pills-medical" role="tabpanel" aria-labelledby="v-pills-medical-tab">
                <?php 
                    include_once("../../Layout/Responsibility/items/medical.php");
                ?>
            </div>
            <!-- SERVICE OFFICES -->
            <div class="tab-pane fade" id="v-pills-office" role="tabpanel" aria-labelledby="v-pills-office-tab">
                <?php 
                    include_once("../../Layout/Responsibility/items/offices.php");
                ?>
            </div>
            <!-- SERVICE OPERATIONS -->
            <div class="tab-pane fade" id="v-pills-operations" role="tabpanel" aria-labelledby="v-pills-operations-tab">
                <?php 
                    include_once("../../Layout/Responsibility/items/operations.php");
                ?>
            </div>
            <!-- SERVICE CHAPLINS -->
            <div class="tab-pane fade" id="v-pills-chaplins" role="tabpanel" aria-labelledby="v-pills-chaplins-tab">
                <?php 
                    include_once("../../Layout/Responsibility/items/chaplins.php");
                ?>
            </div>
            <!-- SERVICE TECHNICALS -->
            <div class="tab-pane fade" id="v-pills-technicals" role="tabpanel" aria-labelledby="v-pills-technicals-tab">
                <?php 
                    include_once("../../Layout/Responsibility/items/technicals.php");
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>