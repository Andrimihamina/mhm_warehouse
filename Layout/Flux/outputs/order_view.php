<form method="post" action="../../php/flux/outputs/register/order_view.php" id="project"> 
<div class="col-lg-12">
  <!-- REGISTER -->
  <div class="card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">REGISTER</h5></div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">C. Stock</th>
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
                        <td><?= $affiche_quantity[0]["stock"];?></td>
                        <!-- QUATITY -->
                        <td><input name="qt-<?= $flux["id_flux_out"]?>" value ="<?=$flux["quantity_out"]?>" type="number" class="form-control" style="width: 106px"></td>
                        <!-- HIDDEN LABEL -->
                        <td><input type="hidden" name="cancel_all" value="<?=$flux["nbr_chr"]?>"></td>
                        <td><input type="hidden" name="code-flux-<?=$flux["id_flux_out"]?>" value="<?=$flux["id_flux_out"]?>"></td>
                        <td><input type="hidden" name="<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_out"]?>" value="<?=$flux["id_abrev_code"]?>"></td>
                        <td>
                        <!-- EDIT ITEMS -->
                        <button type="submit" name="edit-<?= $flux["id_flux_out"]?>" value="edit_item" class="btn btn-primary"><i class="ri-edit-box-line"></i></button>
                        
                        <?php if($flux["cancel"] == 0)
                                {$can_res_color ="btn btn-danger"; $can_res_icon = "ri-delete-bin-line"; $text ="cancel-item";}
                              else
                                {$can_res_color ="btn btn-info"; $can_res_icon ="bx bx-repost"; $text ="restore-item";}
                        ?>
                        <!-- CANCEL ITEMS -->
                        <button type="submit" name="<?=$text?>-<?= $flux["id_flux_out"]?>" value="<?=$text?>" 
                                        
                                        class="<?=$can_res_color?>">
                                        <i class="<?=$can_res_icon?>"></i><?=$text?></button>
                        </td>
                        </tr>
                    <?php endforeach;?> 
                </tbody>

            </tbody>
          </table> 
        </div>
        <div class="text-center">
          <button type="submit" name="cancel"  class="btn btn-primary" value="cancel">Cancel All</button>
        </div>
      </div>
    </div>
  </div>
</form>