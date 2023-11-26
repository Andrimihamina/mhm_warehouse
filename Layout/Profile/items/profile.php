<div class="card">
    <div class="card-body pt-3">
      <ul class="nav nav-tabs nav-tabs-bordered">
        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button></li>
        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button></li>
      </ul>
          <div class="tab-content pt-2">
            <!----OVERVIEW--->
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Profile Details</h5>
              <!-- NAME -->
              <div class="row"><div class="col-lg-3 col-md-4 label ">Name</div><div class="col-lg-9 col-md-8"><?=$UserName;?></div></div>
              <!-- RESPONSABILITY -->
              <div class="row"><div class="col-lg-3 col-md-4 label">Responsability</div><div class="col-lg-9 col-md-8"><?=$Responsability;?></div></div>
              <!-- PHONE -->
              <div class="row"><div class="col-lg-3 col-md-4 label">Phone</div><div class="col-lg-9 col-md-8">None</div></div>
              <!-- EMAIL -->
              <div class="row"><div class="col-lg-3 col-md-4 label">Email</div><div class="col-lg-9 col-md-8">None</div></div>
            </div>

            <!-- EDIT -->
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <form>
                <!-- IMAGE -->
                <div class="row mb-3"><label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image</label>
                  <div class="col-md-8 col-lg-9"><img src="../../../warehouse_img/img/users_img/<?=$UsersImage;?>" alt="IMG">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>
                <!-- NAME -->
                <div class="row mb-3"><label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label><div class="col-md-8 col-lg-9"> <input name="fullName" type="text" class="form-control" id="fullName" value="<?=$UserName;?>"></div></div>
                <!-- PHONE -->
                <div class="row mb-3"><label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label><div class="col-md-8 col-lg-9"><input name="phone" type="text" class="form-control" id="Phone" value="None"></div></div>
                <!-- MAIL -->
                <div class="row mb-3"><label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label><div class="col-md-8 col-lg-9"><input name="email" type="email" class="form-control" id="Email" value="None"></div></div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Save Changes</button></div>
              </form>
            </div>

            <!-- PASSWORD -->
            <?php require_once ("../../register/edit.php");?>
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <form  method="POST">
                <!-- CURRENT PASSWORD -->
                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Responsable Password</label><div class="col-md-8 col-lg-9"><input name="AutPassword" type="password" class="form-control" id="currentPassword"></div>
                </div>
                <!-- NEW PASSWORD -->
                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label><div class="col-md-8 col-lg-9"><input name="newpassword" type="password" class="form-control" id="newPassword"></div>
                </div>
                <!-- NEW PASSWOR -->
                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label><div class="col-md-8 col-lg-9"><input name="renewpassword" type="password" class="form-control" id="renewPassword"></div>
                </div>
                <!-- SAVE -->
                <div class="text-center">
                  <button type="submit" name="id_users" class="btn btn-primary" value ="<?=$id_users_users?>">Change Password</button>
                </div>
              </form>

            </div>
          </div> 
    </div>
</div>