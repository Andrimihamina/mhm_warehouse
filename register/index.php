<?php
$titre = "Create an Account";

//ON INCLU LE HEADER
require_once ("../html/header/header_login.php");

//IMPLIMENTATION DE L'IMAGE DANS LA BD
include_once("image_users.php");

//IMPLIMENTATION DE L'INSCRIPTION DYNAMIQUE
include_once("dynamic_register.php");
?>

<body>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!--TOP LOGO-->
              <?php
              //ON INCLU LE LOGO
              include_once ("../html/logo/logo.php");
              
              //ON INCLU L'ERREUR
              include_once ("../php/error/error_register.php");
              ?>
              
              <!-- End Logo -->
              <form class="login-form" method="post" enctype="multipart/form-data">
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <!--Password responsible-->
                    <div class="col-12">
                      <label for="yourName" class="form-label">Code authorization</label>
                      <input type="password" name="mhm_admin_warehouse_resp" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, call the responsible!</div>
                    </div>

                    <!--Name-->
                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <input type="text" name="username" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <!--responsible-->
                    <div class="col-12">
                      <label for="yourName" class="form-label">Responsibiity</label>
                          <div class="row mb-3">
                            <div class="col-12">
                            <!----LIST 1 -->
                            <?php include_once("../sql/list/responsibility/resposibility_register_1.php");?>
                            <select class="form-select" name="responsibility" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <!----LIST 2 -->
                                <?php include_once("../sql/list/responsibility/resposibility_register_2.php");?> 
                            </select>
                            </div>
                        </div>
                      <div class="invalid-feedback">Please, enter your responsibility!</div>
                    </div>

                    <!--Matriculation-->
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Registration</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">id</span>
                        <input type="text" name="mhm_number" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your MHM ID.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="pass" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirm Your Password</label>
                      <input type="password" name="confirm_pass" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="row mb-3">
                        <label for="yourPassword" class="form-label">Choose Picture</label>
                        <div class="col-12">
                          <input class="form-control" type ="file" name="users_img">
                        </div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="../login/">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>
              </form>
              <div class="credits">
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php
//On inclut le footer avec les liens Java
include_once ("../boostrap/js_login/script.php");
?>