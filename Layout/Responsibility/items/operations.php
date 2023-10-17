<div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-Security">Security</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Operations">Operations</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----Security--->
            <div class="tab-pane fade show active profile-Security" id="profile-Security">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsibles</th>
                    <th scope="col">Guards</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["37"];?>" value="1"  <?php $check=$service["37"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["38"];?>" value="1"  <?php $check=$service["38"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Operations -->
            <div class="tab-pane fade profile-Operations pt-3" id="profile-Operations">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Cleaning</th>
                    <th scope="col">Cooking</th>
                    <th scope="col">Transporter</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["39"];?>" value="1"  <?php $check=$service["39"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["40"];?>" value="1"  <?php $check=$service["40"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["41"];?>" value="1"  <?php $check=$service["41"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
          </div>
    </div>