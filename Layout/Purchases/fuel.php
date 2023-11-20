<!-- HEAD -->
<?php
  $B_head ="Purchases";
  $titre = "Fuel";
  $title_2 = "Fuel";
  $title ="Title/title_two.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");

  include_once ("../../php/purchases/fuel/resize.php");
  require_once ("../../php/purchases/fuel/add.php");

  require_once ("../../php/error/error_suppliers.php");
  require_once ("../../php/error/error_suppliers_img.php");
?>  

<!-- BODY -->
<form class="login-form" method="post" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">PURCHASES FUEL BY CARDS</h5></div>
      <section class="section">
        <div class="row">
          <!-- HISTORIQUE -->
          <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Overview</label><div class="col-lg-6"><a href="../../Layout/Purchases/fuel_overview.php"><button type="button" class="btn btn-outline-primary">View</button></a></div></div>
          <!-- DATE -->
          <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Date</label><div class="col-md-2"><input type="date" name ="date" class="form-control"></div></div>
          <!-- CARDS NUMBER -->
          <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Cards</label><div class="col-md-2"><select name="cards" id="inputState" class="form-select"><option selected>Choose...</option><option value="1" >Card I N°1789</option><option value="2" >Card II N°25121</option></select></div></div>
          <!-- AVAILABLE BALANCE -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Available balance (Ar)</label><div class="col-sm-10"><input name="available_balance" type="text" class="form-control" /></div></div>
          <!-- TICKET NUMBER -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Ticket</label><div class="col-sm-10"><input name="ticket_number" type="text" class="form-control" /></div></div>
           <!-- CARS NUMBER -->
          <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Cars</label><div class="col-md-2">
            <select name="cars" id="inputState" class="form-select"><option selected>Choose...</option>
              <!-- CARS NUMBER --><option value="ISUZU BLEU" >ISUZU BLEU</option>
              <!-- CARS NUMBER --><option value="ISUZU GREEN" >ISUZU GREEN</option>
              <!-- CARS NUMBER --><option value="GALOPPER" >GALOPPER</option>
              <!-- CARS NUMBER --><option value="DAIHATSU" >DAIHATSU</option>
              <!-- CARS NUMBER --><option value="LAND CRUSER" >LAND CRUSER</option>
              <!-- CARS NUMBER --><option value="STAREX" >STAREX</option>
              <!-- CARS NUMBER --><option value="SPRINTER" >SPRINTER</option>
              <!-- CARS NUMBER --><option value="MOTORBIKE HONDA" >MOTORBIKE HONDA</option>
              <!-- CARS NUMBER --><option value="SCOOTER BLUE" >SCOOTER BLUE</option>
              <!-- CARS NUMBER --><option value="VEHICLES OTHERS" >VEHICLES OTHERS</option>
            </select></div>
          </div>
          <!-- TYPES FUEL -->
          <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Fuel Types</label><div class="col-md-2">
            <select name="types_fuel" id="inputState" class="form-select"><option selected>Choose...</option>
              <option value="Sp95" >SP95</option>
              <option value="Gasoil" >Gasoil</option>
            </select></div>
          </div>
          <!-- PURCHASE CAPACITY -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Capacity (liters)</label><div class="col-sm-10"><input name="purchase_capacity" type="text" class="form-control" /></div></div>
          <!-- PURCHASE AMOUNT -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Prices (Ar)</label><div class="col-sm-10"><input name="purchase_amount" type="text" class="form-control" /></div></div> 
          <!-- BILL SCAN -->
          <div class="row mb-3"><label for="inputNumber" class="col-sm-2 col-form-label">Ticket Picture</label><div class="col-sm-10"><input name="ticket_picture"  type ="file" class="form-control"></div></div>
          <!-- ADD -->
          <div class="text-center"><button type="submit" class="btn btn-primary" value="done">Submit</button></div>
        </div>
      </section>
    </div>
  </div>
</form>

<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>