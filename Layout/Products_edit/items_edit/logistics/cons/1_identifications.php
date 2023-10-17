<div class="card">
  <div class="card-body">
    <h5 class="card-title">A- Identifications</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <!--NAME-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Descriptions</label><div class="col-sm-10"><input name="descriptions" type="text" class="form-control" value="<?=$edits_med_id[0]["Descriptions"]?>"></div></div>
            <!--BRANDS-->
            <div class="row mb-3"><label for="inputText" class="col-sm-2 col-form-label">Brand</label><div class="col-sm-10"><input name="brands" type="text" class="form-control" value="<?=$edits_med_id[0]["brand_cons_log"]?>"></div></div>
            <!-- SUBMIT -->
            <div class="text-center"><div class="row mb-3"><div class="col-sm-10"><button type="submit" name="edit" value ="<?=$edits_med_id[0]["id_cons_log"]?>" class="btn btn-primary">EDIT</button></div></div></div>
        </div>           
    </div>
</div>