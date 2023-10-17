 <!-- ALL ORDERS -->
 <div class="col-12">
  <div class="card recent-sales overflow-auto">

    <div class="card-body">
      <h5 class="card-title">Orders</h5>

      <table class="table table-borderless datatable">
        <!-- HEAD TABLE -->
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Responsible</th>
            <th scope="col">Service</th>
            <th scope="col">Qt</th>
            <th scope="col">View</th>
          </tr>
        </thead>

        <!-- BODY TABLE -->
        <tbody>
          <?php foreach($all_orders as $all_order):?>
            <tr>
              <!-- ID -->
              <td><?=$all_order["id_out"];?></td>
              <!-- RESPONSIBLES -->
              <?php $id_out = $all_order["id_out"]; $sql_order = "SELECT * FROM `flux_out` WHERE `id_out` = '$id_out'"; $requete_order = $db->query($sql_order); $affiche_order = $requete_order->fetch(); $order= $affiche_order["orderer"];?>
              <td><?=$order?></td> 
              <!-- SERVICES -->
              <?php $id_service = $affiche_order["services"]; $sql_service = "SELECT * FROM `services` WHERE `id_service` = '$id_service'"; $requete_services = $db->query($sql_service); $affiche_service = $requete_services->fetch(); $service= $affiche_service["services_descriptions"];?>
              <td><?=$service;?></td>
              <!-- NUMBERS OF TYPE -->
              <td><?=$all_order["number_out"];?></td>
              <!-- PRIORITY -->
              <?php $priority = $affiche_order["priority"]; if($priority == "URGENT"){$priority = "badge bg-danger";}else{$priority = "badge bg-success";}?>
              <td><a href="../../Layout/Flux/outputs_storage_principal.php?id=<?=$all_order["id_out"];?>"><span class="<?=$priority;?>"><?=$affiche_order["priority"];?></span></a></td>
            </tr>
          <?php endforeach;?>      
        </tbody>
      </table>

    </div>

  </div>
</div>
<!-- END ALL ORDERS -->