<form method="post" action="" id="project">  
      <div class="col-12">
         <div class="card recent-sales overflow-auto">
         <div class="card-body">
          <div class="text-center"><h5 class="card-title"><?=$head_table?></h5></div>
             <table class="table table-borderless datatable">
  
             <thead>
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Date</th>
                     <th scope="col">Descriptions</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Order</th>
                     <th scope="col">Storage</th>
                 </tr>
             </thead>
             <tbody>
             
             <?php 
            //  REQUETE FOR ALL OUTPUT DONE
             require_once ("../../sql/analytics/stories_orders.php");
             ?>
             <?php 
                  foreach($outs as $out): 
              ?>
                  <tr>   
                      <th scope="row"><a href="#"><?= $out["id_out"]?></a></th>
                      <td><?= $out["created_date"]?></td>
                      <td><?= $out["descriptions"]?></td>
                      <td><?= $out["quantity_out"]?></td>
                      <td><?= $out["orderer"]?></td>
                      <td><?= $out["name_resp_storage"]?></td>
                  </tr>
              <?php 
                  endforeach;
              ?> 
          </tbody>
        
        </table>
    </div>
  </div>
  </div>
  </form> 
  </div>
</div>