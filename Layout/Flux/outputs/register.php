<form method="post" action="../../php/flux/outputs/register/register.php" id="project"> 
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
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>

                 <tbody>
                    <?php foreach($flux_out as $flux): ?>
                      <tr>
                        <!-- ITEMS-->
                        <td><?= $flux["id_abrev_code"]?></td>
                        <td><?= $flux["descriptions"]?></td>
                        <!-- QUATITY -->
                        <td><input name="qt-<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_out"]?>" value ="<?=$flux["quantity_out"]?>" type="number" class="form-control" style="width: 106px"></td>
                        <!-- HIDDEN LABEL -->
                        <td><input type="hidden" name="cancel_all" value="<?=$flux["nbr_chr"]?>"></td>
                        <td><input type="hidden" name="code-flux-<?=$flux["id_flux_out"]?>" value="<?=$flux["id_flux_out"]?>"></td>
                        <td><input type="hidden" name="<?=$flux["id_abrev_code"]?>-<?=$flux["id_flux_out"]?>" value="<?=$flux["id_abrev_code"]?>"></td>
                        <td>
                        <!-- CANCEL ITEMS -->
                        <button type="submit" name="cancel-<?= $flux["id_flux_out"]?>" value="cancel_item" class="btn btn-danger"><i class="ri-delete-bin-line"></i></button>
                        </td>
                        </tr>
                    <?php endforeach;?> 
                </tbody>

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