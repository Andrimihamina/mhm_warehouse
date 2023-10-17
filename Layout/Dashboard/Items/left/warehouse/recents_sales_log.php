 <!-- Recent Sales -->
 <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Week</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Order <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Id Out</th>
                    <th scope="col">Responsible</th>
                    <th scope="col">Service</th>
                    <th scope="col">Qt</th>
                    <th scope="col">View</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($products_recent_order_log as $product_recent_order): 
                  ?>

                  <tr>
                    
                    <!---ID FLUX OUT-->
                    <td>
                      <?=$product_recent_order["id_out"];?>
                    </td>
                    <!---NOM RESPONSABLE-->
                    <td>
                        <?php
                          $id_out = $product_recent_order["id_out"];

                              $sql_order = "SELECT * FROM `flux_out` WHERE `id_out` = '$id_out'";
                              $requete_order= $db->query($sql_order);
                              $affiche_order = $requete_order->fetch();
                              print_r($affiche_order["orderer"]);
                        ?>
                    </td>
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
                    <td>
                        <?=$product_recent_order["number_out"];?>
                    </td>

                    <td>
                      <?php
                        $priority = $affiche_order["priority"];

                        if($priority == "Urgent"){
                          $priority = "badge bg-danger";
                        }else{$priority = "badge bg-success";}
                      ?>
                      <a href="../../../flux_output/resp_stock/resp_stock_1?id=<?=$id_out?>">
                        <span class="<?=$priority;?>">
                          <?=$affiche_order["priority"];?>
                        </span>
                      </a> 
                    </td>
                  
                  </tr>

                  <?php 
                      endforeach;
                  ?>      
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->