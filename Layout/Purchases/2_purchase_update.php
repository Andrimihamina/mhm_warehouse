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
<div class="card">
  <div class="card-body">
    <div class="text-center"></div>
      <section class="section">
        <div class="row">
          <div class="text-center"><h5 class="card-title">Purchases <b><?= $_GET["idProduct"];?></b></h5></div>
            
                <?php $id = $_GET["idProduct"]; ?>
                <?php require ("../../sql/purchases/2_purchase_details.php");?>
                <hr>

                 Suppliers : <?=$affiche_details[0]["name"];?> <br>  
                 Date Received : <?=$affiche_details[0]["created_date"];?> <br>  
                 Date Bill : <?=$affiche_details[0]["purchase_date"];?> <br>  
                 Proforma : <?=$affiche_details[0]["Proforma_number"];?> <br>  
                 Bill : <?=$affiche_details[0]["bill_number"];?> <br>  
                 Modus : <?=$affiche_details[0]["modus_payement"];?> <br>  
                 Due Date : <?=$affiche_details[0]["payment_due_date"];?> <br>  
                 Satus : <?=$affiche_details[0]["payment_done"];?> <br>  
                
          <div class="text-center">
            <button type="submit" name="register" class="btn btn-primary" value="<?= $_GET["idProduct"];?>">Payed</button>
          </div>

            
        </div>
      </section>
    </div>
  </div>
</div>
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