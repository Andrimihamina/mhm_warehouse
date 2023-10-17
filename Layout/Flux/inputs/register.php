<form method="post" action="../../php/flux/inputs/register/register.php" id="project"> 
  <div class="col-lg-12">
      <!-- REGISTER -->
      <div class="card">
        <div class="card-body">
          <div class="text-center"><h5 class="card-title">REGISTER</h5></div><div class="card-body">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Prices</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($flux_in as $flux): ?>
                      <tr>
                        <!-- ITEMS-->
                        <th scope="row"><?= $flux["id_flux_in"]?></th>
                        <td><?= $flux["descriptions"]?></td>
                        <!-- QUATITY -->
                        <td><input name="qt-<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_in"]?>" value ="<?=$flux["quantity_added"]?>" type="number" class="form-control" style="width: 106px"></td>
                        <!-- PRICE -->
                        <td><div class="input-group mb-2"><span class="input-group-text">Ar</span><input type="text" name="pr-<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_in"]?>"  value="<?=$flux["purchase_price"]?>" class="form-control" aria-label="Amount (to the nearest Ariary)" style="width: 106px"></div></td>  
                        <!-- HIDDEN LABEL -->
                        <td><input type="hidden" name="cancel_all" value="<?=$flux["nbr_in"]?>"></td>
                        <td><input type="hidden" name="code-flux-<?=$flux["id_flux_in"]?>" value="<?=$flux["id_flux_in"]?>"></td>
                        <td><input type="hidden" name="<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_in"]?>" value="<?=$flux["id_abrev_code"]?>"></td>
                        <td>
                          <!-- EDIT -->
                          <button type="submit" name="edit-<?= $flux["id_flux_in"]?>" value="edit_item" class="btn btn-success" ><i class="bi bi-check-circle"></i></button>
                          <!-- CANCEL ITEMS -->
                          <button type="submit" name="cancel-<?= $flux["id_flux_in"]?>" value="cancel_item" class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                        </td>
                        </tr>
                    <?php endforeach;?> 
                </tbody>

              </table> 
            </div>

            <div class="text-center">
              <button type="submit" name="cancel"  class="btn btn-primary" value="cancel">Cancel</button>
              <button type="submit" name="register" class="btn btn-primary" value="done">Submit</button>
            </div>
        </div>
      </div>
  </div>
</form>