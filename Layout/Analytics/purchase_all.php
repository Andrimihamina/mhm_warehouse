<!-- HEAD -->
<?php
  $B_head ="Purchases";
  $titre = "History";
  $link_2 = "../../Layout/Analytics/purchases_history.php";
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
      $head_table = "ALL INPUTS";
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
                     <th scope="col">Suppliers </th>
                     <th scope="col">Categories </th>
                     <th scope="col">Descriptions</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Prices</th>
                     <th scope="col">Resposables</th>
                 </tr>
             </thead>
             <tbody>
             
             <?php 
            //  REQUETE FOR ALL INPUT DONE
             require_once ("../../sql/analytics/storiesPurchaseAll.php");
             ?>
             <?php 
                  foreach($ins as $in): 
              ?>
                  <tr>   
                      <th scope="row"><a href="#"><?= $in["id_in"]?></a></th>
                      <td><?= $in["created_date"]?></td>
                      <td><?= $in["name"]?></td>
                      <td><?= $in["categories"]?></td>
                      <td><?= $in["descriptions"]?></td>
                      <td><?= $in["quantity_added"]?></td>
                      <td><?= $in["purchase_price"]?></td>
                      <td><?= $in["name_adding"]?></td>
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