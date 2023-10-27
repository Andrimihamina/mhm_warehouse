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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=1?>-<?=$id_service;?>" value="1"  <?php $check=$service["1"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=2?>-<?=$id_service;?>" value="1"  <?php $check=$service["2"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=3?>-<?=$id_service;?>" value="1"  <?php $check=$service["3"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td><button type="submit" class="btn btn-info" name="<?=$id_service?>" value="edit"><i class="ri-edit-box-line"></i></button></td>
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
                    <th scope="col">ITC</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=4?>-<?=$id_service;?>" value="1"  <?php $check=$service["4"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=10?>-<?=$id_service;?>" value="1"  <?php $check=$service["10"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=11?>-<?=$id_service;?>" value="1"  <?php $check=$service["11"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=12?>-<?=$id_service;?>" value="1"  <?php $check=$service["12"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=44?>-<?=$id_service;?>" value="1"  <?php $check=$service["44"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td><button type="submit" class="btn btn-info" name="<?=$id_service?>" value="edit"><i class="ri-edit-box-line"></i></button></td>
                       </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
          </div>
    </div>