<!-- HEAD -->
<?php
    $B_head ="Services";
    $titre = "Services";
    $title_2 = "Services";
    $title ="Title/title_two.php";
    $section = "section Services";
    require_once ("../Layout/head.php");
    require_once("../../sql/functions/services/services.php");
?> 

<!-- BODY -->
<div class="card">
    <div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Add New</button></li>
      </ul>
          <div class="tab-content pt-2">

            <!----OVERVIEW--->
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Definitions</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php foreach($services as $service):?>
                      <tr>
                        <th scope="row"><?= strip_tags($service["id_service"])?></th>
                        <td><?= $service["services_descriptions"]?></td>
                        <td><?= strip_tags($service["services_definitions"])?></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
            </div>

            <!-- EDIT -->
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <form>
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Descriptions</th>
                      <th scope="col">Definitions</th>
                    </tr>
                  </thead>
                    <tbody>
                      <?php foreach($services as $service):?>
                        <tr>
                          <th scope="row"><?= strip_tags($service["id_service"])?></th>
                          <td><?= $service["services_descriptions"]?></td>
                          <td><?= strip_tags($service["services_definitions"])?></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </form>
            </div>

            <!-- ADD NEW -->
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <form>
                <div class="row mb-3"><label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descriptions</label><div class="col-md-8 col-lg-9"><input name="descriptions" type="text" class="form-control" id="currentPassword"></div></div>
                <div class="row mb-3"><label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Definitions</label><div class="col-md-8 col-lg-9"> <textarea  name="definitions" class="form-control" style="height: 100px"></textarea></div></div>
                <!-- SAVE -->
                <div class="text-center"><button type="submit" class="btn btn-primary">Save</button></div>
              </form>
            </div>
            
          </div>
    </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>