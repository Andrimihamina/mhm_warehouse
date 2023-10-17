<div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-admin">Admin</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Warehouse">Warehouse</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----ADMIN--->
            <div class="tab-pane fade show active profile-admin" id="profile-admin">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">IT Admin</th>
                    <th scope="col">CEO</th>
                    <th scope="col">Administrator</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($services_resp as $service):?>
                      <tr>
                        <?php 
                          $id_recherche = $service["id_service"];
                          include("../../sql/research/services_responsibility/service_responsibility.php");
                        ?>
                          <th scope="row"><?= strip_tags($service["id_service_resp"])?></th>
                          <td><?=$services_affiche?></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["1"];?>" value="1"  <?php $check=$service["1"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["2"];?>" value="1"  <?php $check=$service["2"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["3"];?>" value="1"  <?php $check=$service["3"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- WAREHOUSE -->
            <div class="tab-pane fade profile-Warehouse pt-3" id="profile-Warehouse">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Nurse Two</th>
                    <th scope="col">Technical</th>
                    <th scope="col">Logistic</th>
                    <th scope="col">IT</th>
                    <th scope="col">Comm</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($services_resp as $service):?>
                      <tr>
                        <?php 
                          $id_recherche = $service["id_service"];
                          include("../../sql/research/services_responsibility/service_responsibility.php");
                        ?>
                          <th scope="row"><?= strip_tags($service["id_service_resp"])?></th>
                          <td><?=$services_affiche?></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["1"];?>" value="1"  <?php $check=$service["1"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["2"];?>" value="1"  <?php $check=$service["2"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["3"];?>" value="1"  <?php $check=$service["3"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["2"];?>" value="1"  <?php $check=$service["2"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["3"];?>" value="1"  <?php $check=$service["3"];if($check=="1"){echo"checked";}?> ></div></td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
          </div>
    </div>