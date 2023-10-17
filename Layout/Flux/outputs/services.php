<div class="card">
  <div class="card-body">
    <div class="text-center"></div>
      <section class="section">
        <div class="row">
            <?php if($priority=="URGENT"){$PrioText="danger";}else{$PrioText="primary";}?>
            <div class="text-center"> 
                <b><?=$services_affiches?></b> --
                <b>ID:</b> <?=$id_code_out?>
                <div class="text-<?=$PrioText?>"><b><?=$priority?></b></div>  
            </div>
          <a href="../../php/flux/outputs/modify_services.php"><div class="text-center"><button type="button" class="btn btn-primary" value="done">Edit</button></div></a>
        </div>
      </section>
    </div>
  </div>
</div>