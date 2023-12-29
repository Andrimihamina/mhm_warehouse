<!-- HEAD -->
<?php
$B_head ="Purchases";
$titre = "Purchases";
$title_2 = "Recovery status";
$title ="Title/title_two.php";
$section = "section dashboard";
require_once ("../Layout/head.php");

?> 
<!-- BODY -->
<div class="card">
    <div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
      </ul>
          <div class="tab-content pt-2">
 
            <!----OVERVIEW--->
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Qt.</th>
                     <th scope="col">D. Date</th>
                     <th scope="col">P. Date</th>
                     <th scope="col">Suppliers </th>
                     <th scope="col">Proforma</th>
                     <th scope="col">Bills</th>
                     <th scope="col">Modus P.</th>
                     <th scope="col">Due date</th>
                     <th scope="col">Done</th>
                     <th scope="col">View</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php require_once ("../../sql/purchases/1_overview_recovery_status.php");?>
                    <?php foreach($all_purchase as $all):?>
                      <tr>   
                        <th scope="row"><a href="#"><?= $all["id_in"]?></a></th>
                        <td><?= $all["number_buy"]?></td>
                        <td><?= $all["created_date"]?></td>
                        <td><?= $all["purchase_date"]?></td>
                        <td><?= $all["name"]?></td>
                        <td><?= $all["Proforma_number"]?></td>
                        <td><?= $all["bill_number"]?></td>
                        <td><?= $all["modus_payement"]?></td>
                        <td><?= $all["payment_due_date"]?></td>
                        <td><?= $all["payment_done"]?></td>
                        <td><a href="../../Layout/Purchases/2_purchase_update.php?idProduct=<?= $all["id_in"]?>"><button type="button" class="btn btn-info"><i class="ri-edit-box-line"></i></button></a></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
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