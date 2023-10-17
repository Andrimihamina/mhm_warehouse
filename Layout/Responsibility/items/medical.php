<div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-Anesthesiologist">Anesthesiologists</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Dentist">Dentist</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Doctors">Doctors</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Secretary">M. Secretary</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Midwife">Midwifes</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-nurse">Nurses</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-Pediatrics">N. Pediatrics</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----Anesthesiologist--->
            <div class="tab-pane fade show active profile-Anesthesiologist" id="profile-Anesthesiologist">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Leaders</th>
                    <th scope="col">Anesthesiologists</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["5"];?>" value="1"  <?php $check=$service["5"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["24"];?>" value="1"  <?php $check=$service["24"];if($check=="1"){echo"checked";}?> ></div></td>
                       </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Dentist -->
            <div class="tab-pane fade profile-Dentist pt-3" id="profile-Dentist">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Dentist</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["18"];?>" value="1"  <?php $check=$service["18"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["19"];?>" value="1"  <?php $check=$service["19"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>
            
            <!-- Doctors -->
            <div class="tab-pane fade profile-Doctors pt-3" id="profile-Doctors">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">General</th>
                    <th scope="col">Volunteer</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["17"];?>" value="1"  <?php $check=$service["17"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["48"];?>" value="1"  <?php $check=$service["48"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- M.Secretary -->
            <div class="tab-pane fade profile-Secretary pt-3" id="profile-Secretary">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Medical Secretary</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["25"];?>" value="1"  <?php $check=$service["25"];if($check=="1"){echo"checked";}?> ></div></td>
                       </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Midwife -->
            <div class="tab-pane fade profile-Midwife pt-3" id="profile-Midwife">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Leaders Outpatients</th>
                    <th scope="col">Leaders inpatients</th>
                    <th scope="col">Pink</th>
                    <th scope="col">Delivery</th>
                    <th scope="col">Stork Center</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["6"];?>" value="1"  <?php $check=$service["6"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["7"];?>" value="1"  <?php $check=$service["7"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["20"];?>" value="1"  <?php $check=$service["20"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["21"];?>" value="1"  <?php $check=$service["21"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["22"];?>" value="1"  <?php $check=$service["22"];if($check=="1"){echo"checked";}?> ></div></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- nurse -->
            <div class="tab-pane fade profile-nurse pt-3" id="profile-nurse">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Leaders</th>
                    <th scope="col">One</th>
                    <th scope="col">Three</th>
                    <th scope="col">Four</th>
                    <th scope="col">Stork Center</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["9"];?>" value="1"  <?php $check=$service["9"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["13"];?>" value="1"  <?php $check=$service["13"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["14"];?>" value="1"  <?php $check=$service["14"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["15"];?>" value="1"  <?php $check=$service["15"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["23"];?>" value="1"  <?php $check=$service["23"];if($check=="1"){echo"checked";}?> ></div></td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

            <!-- Pediatrics -->
            <div class="tab-pane fade profile-Pediatrics pt-3" id="profile-Pediatrics">
              <div class="card-body">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Services</th>
                    <th scope="col">Leaders</th>
                    <th scope="col">Nurses Outpatients</th>
                    <th scope="col">Nurses Inpatients</th>
                    <th scope="col">OT</th>
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
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["8"];?>" value="1"  <?php $check=$service["8"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["26"];?>" value="1"  <?php $check=$service["26"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["27"];?>" value="1"  <?php $check=$service["27"];if($check=="1"){echo"checked";}?> ></div></td>
                          <td> <div class="form-check"><input class="form-check-input" type="checkbox" name="<?=$service["42"];?>" value="1"  <?php $check=$service["42"];if($check=="1"){echo"checked";}?> ></div></td>
                     </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
              </div>
            </div>

          </div>
    </div>