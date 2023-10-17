<div class="card">
  <div class="card-body">
    <div class="text-center"></div>
      <section class="section">
        <div class="row">
            <?php $priority = $affiche_orders[0]["priority"]; if($priority=="URGENT"){$PrioText="danger";}else{$PrioText="primary";}?>
            <div class="text-center"> 
                <b><?php $id_service = $affiche_orders[0]["services"]; $sql_service = "SELECT * FROM `services` WHERE `id_service` = '$id_service'"; $requete_services = $db->query($sql_service); $affiche_service = $requete_services->fetch(); echo $service= $affiche_service["services_descriptions"];?></b> --
                <b>ID:</b> <?=$affiche_orders[0]["id_out"]?>
                <div class="text-<?=$PrioText?>"><b><?=$priority?></b></div>  
            </div>
        </div>
      </section>
    </div>
  </div>
</div>