<!-- HEAD -->
<?php
  $B_head ="Suppliers";
  $titre = "Purchases";
  $title_2 = "Suppliers";
  $title ="Title/title_two.php";
  $section = "section";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->

<?php require_once ("../../php/suppliers/suppliers.php");?>
<div class="row">
  <div class="col-lg-12">
    <?php
      // SQL
      include_once("../../sql/purchases/suppliers.php");
    ?>
    <div class="card">
      <div class="card-body pt-3">
        <!-- HEAD -->
        <ul class="nav nav-tabs nav-tabs-bordered">
          <!-- OVERVIEW -->
          <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
          <!-- EDIT -->
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Suppliers</button></li>
          <!-- ADD -->
          <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-add">Add Suppliers</button></li>
        </ul>
        <!-- FIRST VIEW -->
        <div class="tab-content pt-2">
          <div class="tab-pane fade show active profile-overview" id="profile-overview">
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Suppliers<span>| All</span></h5>
                      <table class="table table-borderless datatable">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Categories</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Location</th>
                            <th scope="col">Mail</th>
                          </tr>
                        </thead> 
                        <tbody>
                          <?php 
                              foreach($suppliers as $supplier): 
                          ?>
                            <tr>
                              <th scope="row"><a href="#"><a href="#?id=<?=$supplier["id_suppliers"] ?>"><?= strip_tags($supplier["id_suppliers"] )?></a></th>
                              <td><a href="#" class="text-primary"><?= $supplier["sup_categories"]?></a></td>
                              <td><a href="#" class="text-primary"><?= strip_tags($supplier["name"])?></a></td>
                              <td><a href="#" class="text-primary"><?= strip_tags($supplier["contact"])?></a></td>
                              <td><a href="#" class="text-primary"><?= strip_tags($supplier["location"])?></a></td>
                              <td><a href="#" class="text-primary"><?= strip_tags($supplier["mail"])?></a></td>
                            </tr>
                          <?php 
                              endforeach;
                          ?>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
          </div>

          <!-- SECOND VIEW -->
          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <div class="col-12">
                  <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                      <h5 class="card-title">Suppliers<span>| All</span></h5>
                        <table class="table table-borderless datatable">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Categories</th>
                              <th scope="col">Name</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Location</th>
                              <th scope="col">Mail</th>
                              <th scope="col">Edit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <section>
                              <?php 
                                foreach($suppliers as $supplier):
                              ?>
                                <article>
                                  <tr>
                                    <th scope="row"><a href="#"><a href="#?id=<?=$supplier["id_suppliers"] ?>"><?= strip_tags($supplier["id_suppliers"] )?></a></th>
                                    <td><div class="col-md-8 col-lg-9"><input name="fullName" type="text" class="form-control" id="fullName" value="<?= $supplier["sup_categories"]?>"></div></td>
                                    <td><div class="col-md-8 col-lg-9"><input name="fullName" type="text" class="form-control" id="fullName" value="<?= strip_tags($supplier["name"])?>"></div></td>
                                    <td><div class="col-md-8 col-lg-9"><input name="fullName" type="text" class="form-control" id="fullName" value="<?= strip_tags($supplier["contact"])?>"></div></td>
                                    <td><div class="col-md-8 col-lg-9"><input name="fullName" type="text" class="form-control" id="fullName" value="<?= strip_tags($supplier["location"])?>"></div></td>
                                    <td><div class="col-md-8 col-lg-9"><input name="fullName" type="text" class="form-control" id="fullName" value="<?= strip_tags($supplier["mail"])?>"></div></td>
                                    <td><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>
                                  </tr>
                                </article>
                              <?php 
                                endforeach;
                              ?>
                            </section>
                          </tbody>   
                        </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- THERED VEW -->
          <div class="tab-pane fade profile-edit pt-3" id="profile-add">
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Suppliers<span>| All</span></h5>
                    <form method="POST">
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Categories</label>
                        <div class="col-md-8 col-lg-9"><input type="text" name="sup_categories" class="form-control" id="currentPassword"></div>
                      </div>
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Name</label>
                        <div class="col-md-8 col-lg-9"><textarea class="form-control" name="sup_name" style="height: 100px"></textarea></div>
                      </div>
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contact</label>
                        <div class="col-md-8 col-lg-9"><textarea class="form-control" name="sup_contact" style="height: 100px"></textarea></div>
                      </div>
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Location</label>
                        <div class="col-md-8 col-lg-9"><textarea class="form-control" name="sup_location" style="height: 100px"></textarea></div>
                      </div>                                    
                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mail</label>
                        <div class="col-md-8 col-lg-9"><textarea class="form-control" name="sup_mail" style="height: 100px"></textarea></div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- BODY -->
<!-- FOOTER -->
<?php
  require_once ("../Layout/footer.php");
?>