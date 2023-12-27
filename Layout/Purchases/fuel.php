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
<div class="card">
    <div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Add New</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----OVERVIEW--->
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Date</th>
                     <th scope="col">Cards </th>
                     <th scope="col">Tickets</th>
                     <th scope="col">Cars</th>
                     <th scope="col">Fuel</th>
                     <th scope="col">Capacity</th>
                     <th scope="col">Amount</th>
                     <th scope="col">Old Balance</th>
                     <th scope="col">New Balance</th>
                     <th scope="col">Drivers</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php require_once ("../../sql/purchases/fueloverview.php");?>
                    <?php foreach($fuels as $fuel):?>
                      <tr>   
                        <th scope="row"><a href="#"><?= $fuel["id_code"]?></a></th>
                        <td><?= $fuel["Date"]?></td>
                        <td><?= $fuel["cards_number"]?></td>
                        <td><?= $fuel["ticket_number"]?></td>
                        <td><?= $fuel["cars_number"]?></td>
                        <td><?= $fuel["types_fuel"]?></td>
                        <td><?= $fuel["purchase_capacity"]?></td>
                        <td><?= $fuel["purchase_amout"]?></td>
                        <td><?= $fuel["available_balance"]?></td>
                        <td><?= $fuel["new_balance"]?></td>
                        <td><?= $fuel["drivers"]?></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
            </div>

            <!-- EDIT -->
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <form method="POST" action ="">
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Date</th>
                      <th scope="col">Cards</th>
                      <th scope="col">Ticket</th>
                      <th scope="col">Edit</th>
                    </tr> 
                  </thead>
                    <tbody>
                      <?php foreach($fuels as $fuel):?>
                        <tr>
                          <!-- ID -->
                          <th scope="row"><a href="#"><?= $fuel["id_code"]?></a></th>
                          <td><?= $fuel["Date"]?></td>
                          <td><?= $fuel["cards_number"]?></td>
                          <td><?= $fuel["ticket_number"]?></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </form>
            </div>

            <!-- ADD NEW -->
            <div class="tab-pane fade pt-3" id="profile-change-password" >
              <form method="POST" enctype="multipart/form-data">
              <!-- DATE -->
              <div class="row mb-3">
                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                <div class="col-md-2"><input type="date" name ="date" class="form-control"></div>
              </div>
              <!-- CARDS NUMBER -->
              <div class="row mb-3"> 
                <label for="inputText" class="col-sm-2 col-form-label">Cards</label>
                <div class="col-md-2"><select name="cards" id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option value="1" >Card I-N°1789</option>
                  <option value="2" >Card II N°25121</option></select>
                </div>
              </div>
              <!-- AVAILABLE BALANCE -->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Available balance (Ar)</label>
                <div class="col-sm-10"><input name="available_balance" type="text" class="form-control" /></div>
              </div>
              <!-- TICKET NUMBER -->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Ticket</label>
                <div class="col-sm-10"><input name="ticket_number" type="text" class="form-control" /></div>
              </div>
              <!-- CARS NUMBER -->
              <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Cars</label>
                <div class="col-md-2">
                  <select name="cars" id="inputState" class="form-select"><option selected>Choose...</option>
                    <!-- CARS NUMBER --><option value="ISUZU BLEU" >ISUZU BLEU</option>
                    <!-- CARS NUMBER --><option value="ISUZU GREEN" >ISUZU GREEN</option>
                    <!-- CARS NUMBER --><option value="GALOPPER" >GALOPPER</option>
                    <!-- CARS NUMBER --><option value="DAIHATSU" >DAIHATSU</option>
                    <!-- CARS NUMBER --><option value="LANDCRUISER" >LAND CRUISER</option>
                    <!-- CARS NUMBER --><option value="STAREX" >STAREX</option>
                    <!-- CARS NUMBER --><option value="SPRINTER" >SPRINTER</option>
                    <!-- CARS NUMBER --><option value="HONDA" >MOTORBIKE HONDA</option>
                    <!-- CARS NUMBER --><option value="SCOOTER" >SCOOTER BLUE</option>
                    <!-- CARS NUMBER --><option value="OTHERS" >VEHICLES OTHERS</option>
                  </select>
                </div>
              </div>
              <!-- TYPES FUEL -->
              <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Fuel Types</label>
                <div class="col-md-2">
                  <select name="types_fuel" id="inputState" class="form-select"><option selected>Choose...</option>
                    <option value="Sp95" >SP95</option>
                    <option value="Gasoil" >Gasoil</option>
                  </select>
                </div>
              </div>
              <!-- PURCHASE CAPACITY -->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Capacity (liters)</label>
                <div class="col-sm-10"><input name="purchase_capacity" type="text" class="form-control" /></div>
              </div>
              <!-- PURCHASE AMOUNT -->
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Prices (Ar)</label>
                <div class="col-sm-10"><input name="purchase_amount" type="text" class="form-control" /></div>
              </div> 
              <!-- BILL SCAN -->
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Ticket Picture</label>
                <div class="col-sm-10"><input name="ticket_picture"  type ="file" class="form-control"></div>
              </div>
              <!-- ADD -->
              <div class="text-center"><button type="submit" class="btn btn-primary" value="done">Submit</button></div>
            </div>
          
      </form>
            </div>
            
          </div>
    </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>