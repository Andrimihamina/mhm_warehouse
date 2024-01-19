<!-- HEAD -->
<?php
$B_head ="Purchases";
$titre = "Purchases";
$title_2 = "Recovery status";
$link_2 = "../../Layout/Purchases/1_purchase.php";
$title_3 = "Details";
$title ="Title/title_three.php";
$section = "section dashboard";
require_once ("../Layout/head.php");
?> 
<!-- BODY -->
<form method="post" action="../../php/purchases/finance/update.php" id="project"> 
  <section class="section"> 
    <div class="row">

    <!-- PURCHASE -->
      <div class="col-lg-4"> 
        <div class="row">

          <div class="card">
            <div class="card-body"> 

              <div class="text-center"><h5 class="card-title"><b><?= $_GET["idProduct"];?></b></h5></div>
    
                <?php $id = $_GET["idProduct"]; ?>
                <?php require ("../../sql/purchases/2_purchase_details.php");?>
                <hr>
                  <!-- SUPPLIERS -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Suppliers :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["name"];?> </div>
                    </div>
                  <!-- DATE RECEVED -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Date Received :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["created_date"];?></div>
                    </div>
                  <!-- BILL -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Date Bill :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["purchase_date"];?> </div>
                    </div>
                  <!-- PROFORMA DATE -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Proforma :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["Proforma_number"];?></div>
                    </div>
                  <!-- BILL -->
                  <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Bill N°: </label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["bill_number"];?>  </div>
                    </div>
                  <!-- PAYEMENET MODUS -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Modus :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["modus_payement"];?></div>
                    </div>
                  <!-- DUE DATE -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Due Date :</label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["payment_due_date"];?>  </div>
                    </div>
                  <!-- TOTAL PRICES -->
                    <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">T. Invoce : </label>
                      <div class="col-sm-5"> Ar-<?=$affiche_total["total_quantity"];?> </div>
                    </div>
            
                    
            </div>
          </div>

        </div>
      </div>

    <!-- MHM PAYMENT -->
      <div class="col-lg-4">
        <div class="card">
            <div class="card-body"> 

              <div class="text-center"><h5 class="card-title">MHM Payment</h5></div>
    
                <?php $id = $_GET["idProduct"]; ?>
                <?php require ("../../sql/purchases/2_purchase_details.php");?>
                <hr>

                  <!-- STATUS -->
                  <div class="row mb-2">
                      <label for="inputText" class="col-sm-5">Status : </label>
                      <div class="col-sm-5"> <?=$affiche_details[0]["payment_done"];?> </div>
                  </div>

                  <!-- NOT PAYED YET -->
                  <?php
                    $payed = $affiche_details[0]["payment_done"];
                    if($payed == "Not_payed"){
                  ?>
                  <!-- Date Payment -->
                  <div class="row mb-2">
                    <label for="inputDate" class="col-sm-5">Date Payment : </label>
                    <div class="col-sm-5"><input type="date" name ="date_payment" class="form-control"></div>
                  </div>

                  <!-- REF -->
                  <div class="row mb-2">
                    <label for="inputText" class="col-sm-5 col-form-label">REF :</label>
                    <div class="col-sm-5"><input name="ref_payment" type="text" class="form-control" /></div>
                  </div>

                  <!-- AMOUNT -->
                  <div class="row mb-2">
                    <label for="inputText" class="col-sm-5 col-form-label">Amout :</label>
                    <div class="col-sm-5"><input name="amount_payment" type="text" class="form-control" /></div>
                  </div>

                  <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary" value="<?= $_GET["idProduct"];?>">Payed</button>
                  </div>

                  <!-- ALREADY PAYED -->
                  <?php
                    }else{
                  ?>
                    <!-- Date Payment -->
                  <div class="row mb-2">
                    <label for="inputDate" class="col-sm-5">Date Payment : </label>
                    <div class="col-sm-5">  <?=$affiche_details[0]["date_payment"];?></div>
                  </div>

                  <!-- REF -->
                  <div class="row mb-2">
                    <label for="inputText" class="col-sm-5">REF :</label>
                    <div class="col-sm-5"><?=$affiche_details[0]["ref_payment"];?></div>
                  </div>

                  <!-- AMOUNT -->
                  <div class="row mb-2">
                    <label for="inputText" class="col-sm-5 ">Amout :</label>
                    <div class="col-sm-5">Ar-<?=$affiche_details[0]["amount_payment"];?></div>
                  </div>

                  <?php
                    }
                  ?>

            </div>
          </div>

      </div>

    <!-- PICTURES -->
      <div class="col-lg-4">

        <div class="card">
            <div class="card-body"> 

              <div class="text-center"><h5 class="card-title">Bill Picture </h5></div>
    
                <?php $id = $_GET["idProduct"]; ?>
                <?php require ("../../sql/purchases/2_purchase_details.php");?>
                <hr>

                <div class="col-md-12">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                  <img src="../../../warehouse_img/img/bill_img/<?=$affiche_details[0]["bill_scan"];?>" class="img-fluid rounded-start" alt="IMG">
                </div> 
              </div>

            </div>
          </div>

      </div>


    </div>
  </section>
</form>

<div class="col-lg-12">
  <!-- REGISTER -->
  <div class="card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">DETAILS</h5></div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Qt</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
 
                 <tbody>
                    
                    <!----IDENTITE UTILISER DANS INPRIM-->
                    <!--POUR AVOIR ID-->
                    <?php $id = $_GET["idProduct"]; ?>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <?php require ("../../sql/purchases/2_purchase_details.php");?>
                    <?php foreach($affiche_details as $all): ?>
                      <tr>
                        <!-- ITEMS-->
                        <td><?= $all["id_abrev_code"]?></td>
                        <td><?= $all["descriptions"];?></td>
                        <td><?= $all["quantity_added"];?></td>
                        <td><?= $all["purchase_price"];?></td>
                    <?php endforeach;?> 
                </tbody>

            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>