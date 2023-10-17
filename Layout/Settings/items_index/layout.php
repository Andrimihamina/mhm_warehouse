<!-- HEAD -->
<?php
  $B_head ="Settings";
  $titre = "Settings";
  $title_2 = "Settings";
  $link_2 ="../../Layout/Settings/settings.php";
  $title_3 =$title_3;
  $title ="Title/title_three.php";
  $section = "section Settings";
  require_once ("../Layout/head.php");
  
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
                    <?php foreach($details_settings as $setting):?>
                      <tr>
                        <th scope="row"><?= strip_tags($setting["$id"])?></th>
                        <td><?= $setting["$descriptions"]?></td>
                        <td><?= strip_tags($setting["$definitions"])?></td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
              </table>
            </div>

            <!-- EDIT -->
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <form method="POST" action ="../../php/settings/<?=$lien_edit?>">
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Descriptions</th>
                      <th scope="col">Edit Descriptions</th>
                      <th scope="col">Edit Definitions</th>
                    </tr> 
                  </thead>
                    <tbody>
                      <?php foreach($details_settings as $setting):?>
                        <tr>
                          <th scope="row"><?= strip_tags($setting["$id"])?></th>
                          <td><?= strip_tags($setting["$descriptions"])?></td>
                          <!-- DESCRIPTIONS -->
                          <td><textarea class="form-control" name="Des-<?=$setting["$id"]?>" id="floatingTextarea" style="height: 30px;"><?= strip_tags($setting["$descriptions"])?></textarea></td>
                          <!-- DEFINITIONS -->
                          <td><textarea class="form-control" name="Def-<?=$setting["$id"]?>" id="floatingTextarea" style="height: 30px;"><?= strip_tags($setting["$definitions"])?></textarea></td>
                          
                          <td><button type="submit" class="btn btn-info" name="<?= strip_tags($setting["$id"])?>" value ="edit"><i class="ri-edit-box-line"></i></button></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                </table>
              </form>
            </div>

            <!-- ADD NEW -->
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <form method="POST" action ="../../php/settings/<?=$lien_add?>">
                <div class="row mb-3"><label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Descriptions</label><div class="col-md-8 col-lg-9"><input name="add_descriptions" type="text" class="form-control" id="currentPassword"></div></div>
                <div class="row mb-3"><label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Definitions</label><div class="col-md-8 col-lg-9"> <textarea  name="add_definitions" class="form-control" style="height: 100px"></textarea></div></div>
                <!-- SAVE -->
                <div class="text-center"><button type="submit" name="add" class="btn btn-primary" value="done">Save</button></div>
              </form>
            </div>
            
          </div>
    </div>
</div>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>