<form method="post" action="../../php/flux/outputs/register/order_view.php" id="project"> 
<div class="col-lg-12">
  <!-- REGISTER -->
  <div class="card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">VIEW ORDER</h5></div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody> 
 
                 <tbody>
                    
                    <!----IDENTITE UTILISER DANS INPRIM-->
                    <!--POUR AVOIR ID-->
                    <input type="hidden" name="id" value="<?=$id_out?>">
                    <?php foreach($affiche_orders as $flux): ?>
                      <tr>
                        <!-- ITEMS-->
                        <td><?= $flux["id_abrev_code"]?></td>
                        <td><?= $flux["descriptions"]?></td>
                        <?php include ("../../sql/flux/orders/currently_stock.php");?>
                        <!-- QUATITY -->
                        <td><?=$flux["quantity_out"]?></td>
                      </tr>
                    <?php endforeach;?> 
                </tbody>

            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</form>