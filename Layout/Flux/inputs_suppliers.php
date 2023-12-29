<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux";
  $title ="Title/title_two.php";
  $title_2 = "Inputs";
  $section = "section";
  require_once ("../Layout/head.php");

  include_once ("../../php/flux/inputs/resize.php");
  require_once ("../../php/flux/inputs/suppliers.php");

  require_once ("../../php/error/error_suppliers.php");
  require_once ("../../php/error/error_suppliers_img.php");
?>  
<!-- BODY -->
<form class="login-form" method="post" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="text-center"><h5 class="card-title">SUPPLIERS</h5></div>
      <section class="section">
        <div class="row">

          <!-- DATE -->
          <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Date</label><div class="col-sm-3"><input type="date" class="form-control" name="purchase_date"></div></div>
          <!-- SUPPLIERS -->
          <div class="row mb-3"> <label for="inputText" class="col-sm-2 col-form-label">Suppliers</label><div class="col-md-2"><?php include("../../sql/list/suppliers/suppliers_1.php");?><select name="purchase_suppliers" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/suppliers/suppliers_2.php");?></select></div></div>
          <!-- PRO FORMA -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Pro-Forma</label><div class="col-sm-10"><input name="purchase_proforma" type="text" class="form-control" /></div></div>
          <!-- BILL -->
          <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">No. Bill</label><div class="col-sm-10"><input name="purchase_bill" type="text" class="form-control" /></div></div>
          <!-- BILL SCAN -->
          <div class="row mb-3"><label for="inputNumber" class="col-sm-2 col-form-label">Bill Picture</label><div class="col-sm-10"><input name="purchase_bill_scan"  type ="file" class="form-control"></div></div>
          <!-- PAYMENT TYPE -->
          <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Payment type</legend>
              <div class="col-xl-6">
                  <div class="row">
                      <div class="form-check"><input class="form-check-input" type="radio" name="payment" id="gridRadios4" value="Cash" checked><label class="form-check-label" for="gridRadios4">Cash</label></div>
                      <div class="form-check"><input class="form-check-input" type="radio" name="payment" id="gridRadios5" value="Check"><label class="form-check-label" for="gridRadios5">Check</label></div>
                      <div class="form-check"><input class="form-check-input" type="radio" name="payment" id="gridRadios6" value="Bank transfer"><label class="form-check-label" for="gridRadios6">Bank transfer</label></div>
                  </div>
              </div>
          </div> 
          <!-- PAYMENT -->
          <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Payment</legend>
            <div class="col-xl-6">
                <div class="row">
                    <div class="form-check"><input class="form-check-input" type="radio" name="payment_done" id="payement_yes" value="payed" checked><label class="form-check-label" for="payement_yes">Done</label></div>
                    <div class="form-check"><input class="form-check-input" type="radio" name="payment_done" id="payement_no" value="Not_payed" ><label class="form-check-label" for="payement_no">With Deadline </label></div>
                </div>
            </div>
          </div>

          <!-- DUE DATE -->
          <div class="row mb-3"><label for="inputDate" class="col-sm-2 col-form-label">Due date</label><div class="col-sm-3"><input type="date" name ="purchase_payment_due_date" class="form-control"></div></div>
          <!-- COMMENTS -->
          <div class="form-floating mb-3"><textarea class="form-control" name="purchase_commets" id="floatingTextarea" style="height: 100px;"></textarea><label for="floatingTextarea">Comments</label></div>
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