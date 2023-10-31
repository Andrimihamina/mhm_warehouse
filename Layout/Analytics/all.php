<!-- HEAD -->
<?php
  $B_head ="Orders";
  $titre = "History";
  $link_2 = "../../Layout/Analytics/orders_history.php";
  $title_2 = "History";
  $title_3 = "All";
  $title ="Title/title_three.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "ALL OUTPUTS";
    ?>
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
                     <th scope="col">Services </th>
                     <th scope="col">Descriptions</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Order</th>
                     <th scope="col">Storage</th>
                 </tr>
             </thead>
             <tbody>
             
             <?php 
            //  REQUETE FOR ALL OUTPUT DONE
             require_once ("../../sql/analytics/storiesAll.php");
             ?>
             <?php 
                  foreach($outs as $out): 
              ?>
                  <tr>   
                      <th scope="row"><a href="#"><?= $out["id_out"]?></a></th>
                      <td><?= $out["created_date"]?></td>
                      <td><?= $out["services_descriptions"]?></td>
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
<!-- FOOTER -->

<?php
  require_once ("../Layout/footer.php");
?>