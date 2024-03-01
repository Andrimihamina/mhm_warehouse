<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux"; 
  $title ="Title/title_two.php";
  $title_2 = "Outputs";
  $section = "section";
  require_once ("../Layout/head.php");

  require_once ("../../php/flux/outputs/services.php");

  require_once ("../../php/error/error_services.php");
?>  
<!-- BODY -->
<form class="login-form" method="post" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="text-center">
        <h5 class="card-title">CHOOSES SERVICES               
        <a href="../../Layout/Flux/outputs_history.php"><button type="button" class="btn btn-outline-primary"><i class="bi bi-info-circle">History</i></button></a>
        </h5>
      </div>    
      <!-- HISTORY -->

      <section class="section">
        <div class="row">
          <!-- SERVICES -->
          <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Services</label><div class="col-md-2"><?php include("../../php/flux/services_responsible/list_services_1.php");?><select name="services" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../php/flux/services_responsible/list_services_2.php");?></select></div></div>
          <!-- PRIORITY -->
          <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-50">Priority</legend>
              <div class="col-xl-6">
                  <div class="row">
                      <div class="form-check"><input class="form-check-input" type="radio" name="priority" id="urgent" value="URGENT"><label class="form-check-label btn btn-outline-danger" for="urgent">Urgent</label></div>
                      <div class="form-check"><input class="form-check-input" type="radio" name="priority" id="normal" value="ROUTINE" checked><label class="form-check-label btn btn-outline-primary" for="normal">Normal</label></div>
                  </div>
              </div>
          </div> 
         
         <!-- ADD -->
          <div class="text-center"><button type="submit" class="btn btn-primary" value="done">Submit</button></div>
        </div>
      </section>
    </div>
  </div>
</div>
</form>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>