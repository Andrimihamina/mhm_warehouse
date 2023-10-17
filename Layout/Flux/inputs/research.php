<form method="post"> 
  <div class="col-lg-12">
    <!-- ITEMS -->
    <div class="card">
      <div class="card-body">
        <div class="text-center"><h5 class="card-title">RESEARCH</h5></div><div class="card-body">
          <table class="table table-borderless datatable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brands</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Prices</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                require_once ("../../Layout/Flux/categories/medicines.php"); 

                require_once ("../../Layout/Flux/categories/cons_med.php"); 
                require_once ("../../Layout/Flux/categories/cons_log.php");
                require_once ("../../Layout/Flux/categories/cons_tec.php");
                require_once ("../../Layout/Flux/categories/cons_itc.php");
                require_once ("../../Layout/Flux/categories/cons_foo.php");

                require_once ("../../Layout/Flux/categories/mat_med.php");
                require_once ("../../Layout/Flux/categories/mat_log.php");
                require_once ("../../Layout/Flux/categories/mat_tec.php");
                require_once ("../../Layout/Flux/categories/mat_itc.php");
                require_once ("../../Layout/Flux/categories/mat_foo.php");
                require_once ("../../Layout/Flux/categories/mat_imo.php");
              ?>
                
              
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</form>