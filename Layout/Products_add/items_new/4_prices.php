<div class="card">
  <div class="card-body">
    <h5 class="card-title">D- Prices</h5>
    <div class="row g-3">
        <!-- QUANTITY -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Quantity **</label>
            <div class="col-md-2"><input name="med_quantity" type="number" class="form-control" id="inputCity" require /></div>
            <div class="col-md-2"><?php include("../../sql/list/dosage/boxes/list_boxes_1.php");?><select name="box" id="inputState" class="form-select"><option selected>Choose...</option><?php include("../../sql/list/dosage/boxes/list_boxes_2.php");?></select></div>
        </div>
        <!-- PRICES -->
        <div class="row mb-3"> 
            <label for="inputText" class="col-sm-2 col-form-label">Prices **</label>
            <div class="col-md-2"><input name="med_price" type="number" min="0.00" max="100000000.00" step="0.01" class="form-control" id="inputCity" require /></div>
        </div>
    </div>
  </div>
</div>

