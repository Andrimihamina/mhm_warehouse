<!-- HEAD -->
<?php
  $B_head ="Purchases";
  $titre = "Fuel";
  $title_2 = "Fuel Overview";
  $title ="Title/title_two.php";
  $section = "section dashboard";
  require_once ("../Layout/head.php");
?>  

<!-- BODY -->
<div class="col-lg-12">
  <div class="row">

    <?php
    // TITLE TABLE
      $head_table = "OVERVIEW FUEL PURCHASES";
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
                     <th scope="col">Cards </th>
                     <th scope="col">Tickets</th>
                     <th scope="col">Cars</th>
                     <th scope="col">Fuel</th>
                     <th scope="col">Capacity</th>
                     <th scope="col">Amount</th>
                     <th scope="col">Old Balance</th>
                     <th scope="col">New Balance</th>
                     <th scope="col">Drivers</th>
                 </tr>
             </thead>
             <tbody>
             
             <?php 
             require_once ("../../sql/purchases/fueloverview.php");
             ?>
             <?php 
                  foreach($fuels as $fuel): 
              ?>
                  <tr>   
                      <th scope="row"><a href="#"><?= $fuel["id_code"]?></a></th>
                      <td><?= $fuel["Date"]?></td>
                      <td><?= $fuel["cards_number"]?></td>
                      <td><?= $fuel["ticket_number"]?></td>
                      <td><?= $fuel["cars_number"]?></td>
                      <td><?= $fuel["types_fuel"]?></td>
                      <td><?= $fuel["purchase_capacity"]?></td>
                      <td><?= $fuel["purchase_amout"]?></td>
                      <td><?= $fuel["available_balance"]?></td>
                      <td><?= $fuel["new_balance"]?></td>
                      <td><?= $fuel["drivers"]?></td>
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