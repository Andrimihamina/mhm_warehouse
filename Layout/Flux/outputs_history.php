<!-- HEAD -->
<?php
  $B_head ="Flux";
  $titre = "Flux"; 
  $title ="Title/title_three.php";
  $title_2 = "Outputs";
  $link_2 = "../../Layout/Flux/outputs_services.php";
  $title_3 = "History";
  $section = "section";
  require_once ("../Layout/head.php");

  require_once ("../../php/flux/outputs/services.php");

  require_once ("../../php/error/error_services.php");
  // ORDERS HISTORIQUE
  require_once ("../../sql/flux/orders/orders_historique.php"); 
  // ORDERS HISTORIQUE
  require_once ("../../sql/flux/orders/orders_historique_delivered.php"); 
?>  
<!-- BODY -->
<form class="login-form" method="post" enctype="multipart/form-data">
<section class="section">
  <div class="row">

  <!-- Pending Order  -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Pending Order </h5>

                <table class="table table-borderless datatable">

                  <thead>
                    <tr>
                      <th scope="col">Id Out</th>
                      <th scope="col">Service</th>
                      <th scope="col">Nb</th>
                      <th scope="col">Priority</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php  foreach($affiche_orders as $order_hist):?>
                    <tr>

                      <!---ID FLUX OUT-->
                      <td><?=$order_hist["id_out"];?></td>

                      <!---NOM RESPONSABLE-->
                        <?php
                          $id_out = $order_hist["id_out"];

                          $sql_order = "SELECT * FROM `flux_out` WHERE `id_out` = '$id_out'";
                          $requete_order= $db->query($sql_order);
                          $affiche_order = $requete_order->fetch();
                        ?>
                    

                      <!---SERVICES-->
                      <td>
                          <?php
                            $service =$affiche_order["services"];

                            $sql_services = "SELECT * FROM `services` WHERE `id_service` = '$service'";
                            $requete_services= $db->query($sql_services);
                            $affiche_services = $requete_services->fetch();
                            print_r($affiche_services["services_descriptions"]);
                          ?>
                      </td>

                      <!-- QUANTITE OUT -->
                      <td>
                          <?=$order_hist["number_out"];?>
                      </td>

                      <!-- PRIORITY -->
                      <td>
                        <?php
                          $priority = $affiche_order["priority"];
                          if($priority == "URGENT"){$priority = "badge bg-danger";}else{$priority = "badge bg-success";}
                        ?>                      
                        <span class="<?=$priority;?>"><?=$affiche_order["priority"];?></span>
                      </td>

                      <!-- STATUS -->
                      <td>
                        <a href="../flux/outputs_history_view.php?id=<?=$id_out?>">
                        <?php

                          $sql_order_can = "SELECT COUNT(cancel) As number_c FROM `flux_out` WHERE `id_out` = '$id_out' AND cancel = 1 GROUP BY cancel HAVING COUNT(cancel) >= 1 ";
                          $requete_order_can = $db->query($sql_order_can);
                          $affiche_order_can = $requete_order_can->fetch();
                         
                          if($affiche_order_can === false){
                            // IN PROCESS
                            $progress = "badge bg-primary";
                            $progresAf = "In-Process";                         
                          }else{
                           
                            // FONCTION SECOND
                            $sql_order_cout = "SELECT COUNT(id_out) As number_count FROM `flux_out` WHERE `id_out` = '$id_out' GROUP BY id_out HAVING COUNT(id_out) >= 1 ";
                            $requete_order_cout = $db->query($sql_order_cout);
                            $affiche_order_cout = $requete_order_cout->fetch();

                            if($affiche_order_cout != false){
                            $count_can =$affiche_order_can["number_c"];
                            $count_add = $affiche_order_cout["number_count"];

                            // THERE ARE THINGS NOT CANCELED 
                                    if($count_add>$count_can){
                                      // IN PROCESS
                                      $progress = "badge bg-primary";
                                      $progresAf = "In-Process"; 
                                    }else{ 
                                      // ONLY CANCEL
                                      $progress = "badge bg-success";
                                      $progresAf = "Cancel";  
                                    }
                            }
                            else{ 
                              // ONLY CANCEL
                              $progress = "badge bg-success";
                              $progresAf = "Cancel";  
                            }
                          }
                        ?>                      
                        <span class="<?=$progress;?>"><?=$progresAf;?></span>  
                        </a> 
                      </td>
                         
                    </tr>

                    <?php endforeach;?>      
                  </tbody>
                </table>

        </div>
      </div>
    </div> 

  <!-- Delivered Order  -->
  <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Delivered Order </h5>

                <table class="table table-borderless datatable">

                  <thead>
                    <tr>
                      <th scope="col">Id Out</th>
                      <th scope="col">Service</th>
                      <th scope="col">Nb</th>
                      <th scope="col">View</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php  foreach($affiche_orders_delivered as $order_hist_done):?>
                    <tr>

                      <!---ID FLUX OUT-->
                      <td><?=$order_hist_done["id_out"];?></td>

                      <!---NOM RESPONSABLE-->
                        <?php
                          $id_out = $order_hist_done["id_out"];

                          $sql_order = "SELECT * FROM `flux_out` WHERE `id_out` = '$id_out'";
                          $requete_order= $db->query($sql_order);
                          $affiche_order = $requete_order->fetch();
                        ?>
                    

                      <!---SERVICES-->
                      <td>
                          <?php
                            $service =$affiche_order["services"];

                            $sql_services = "SELECT * FROM `services` WHERE `id_service` = '$service'";
                            $requete_services= $db->query($sql_services);
                            $affiche_services = $requete_services->fetch();
                            print_r($affiche_services["services_descriptions"]);
                          ?>
                      </td>

                      <!-- QUANTITE OUT -->
                      <td>
                          <?=$order_hist_done["number_out"];?>
                      </td>

                      <!-- STATUS -->
                      <td>
                        <a href="../flux/outputs_history_view_done.php?id=<?=$id_out?>">
                          <button type="button"  class="btn btn-info"><i class="bi bi-check-circle"></i></button>
                        </a> 
                      </td>
                    </tr>

                    <?php endforeach;?>      
                  </tbody>
                </table>

        </div>
      </div>
    </div> 

  </div>
</section>
</form>
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>