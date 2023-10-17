<?php
$titre = "Login";

//ON INCLU LE HEADER
require_once ("../html/header/header_login.php");
//IMPLIMENTATION DE L'INSCRIPTION DYNAMIQUE
include_once("dynamic_log.php");

//WRITTEN THE PAGES
?>

<!---------BODY------>
<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <!--TOP LOGO-->  
              <?php
              //ON INCLU LE LOGO ON TOP
              include_once ("../html/logo/logo.php");
              //ON INCLU L'ERREUR
              include_once ("../php/error/error_login.php");
              ?>
              <!-- End Logo -->
              <form class="login-form" action="" method="post">
                <div class="card mb-3">
                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                    </div>

                    <form class="row g-3 needs-validation" novalidate>

                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Registration</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">id</span>
                          <input type="number" name="mhm_number" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Please enter your username.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">Don't have account? <a href="../register/">Create an account</a></p>
                      </div>
                    </form>

                  </div>
                </div>
              </form>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href ="#">Andry Mihamina</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
  <!-- End #main -->

<?php
//On inclut le footer avec les liens Java
include_once ("../boostrap/js_login/script.php");
?>