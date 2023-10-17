<div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-Logistics">Logistics</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Finances">Finances</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-IT">IT</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Communication">Communication</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-HR">HR</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----Logistics--->
            <div class="tab-pane fade show active profile-Logistics" id="profile-Logistics">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsible</th>
                    <th scope="col">Drivers</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["35"];?>" value="1"  <?php $check=$service["35"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["49"];?>" value="1"  <?php $check=$service["49"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Finances -->
            <div class="tab-pane fade profile-Finances pt-3" id="profile-Finances">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsibles</th>
                    <th scope="col">Assistant</th>
                    <th scope="col">M. casher</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["43"];?>" value="1"  <?php $check=$service["43"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["50"];?>" value="1"  <?php $check=$service["50"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["16"];?>" value="1"  <?php $check=$service["16"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
            <!-- IT -->
            <div class="tab-pane fade profile-IT pt-3" id="profile-IT">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsibles</th>
                    <th scope="col">IT</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["31"];?>" value="1"  <?php $check=$service["31"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["31"];?>" value="1"  <?php $check=$service["31"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Communication -->
            <div class="tab-pane fade profile-Communication pt-3" id="profile-Communication">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsibles</th>
                    <th scope="col">Assistant</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["32"];?>" value="1"  <?php $check=$service["32"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["32"];?>" value="1"  <?php $check=$service["32"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- HR -->
            <div class="tab-pane fade profile-HR pt-3" id="profile-HR">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Responsibles</th>
                    <th scope="col">Assistant</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["33"];?>" value="1"  <?php $check=$service["33"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["34"];?>" value="1"  <?php $check=$service["34"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
          </div>
    </div>