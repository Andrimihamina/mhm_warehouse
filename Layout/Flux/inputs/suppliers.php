
 <!-- SUPPLIER INFORMATIONS -->
 <div class="card">
   <div class="card-body">
     <div class="text-center"><h5 class="card-title">SUPPLIERS</h5></div>
       <section class="section">
         <div class="row">
           <div class="text-center"> <b>Date:</b> <?=$purchase_date?> | <b>Suppliers: </b> <?=$affiche_suppliers?>  | <b>Proforma:</b> <?=$proforma_number?> | <b>Bill:</b> <?=$bill_number?>  | <b>Payement:</b> <?=$modus_payement?>  </div>
           <!-- MODIFICATION SUPPLIERS -->
           <a href="../../php/flux/inputs/research/modify_suppliers.php">
             <div class="text-center"><button type="button" class="btn btn-primary">Edit</button></div>
           </a>
         </div>
       </section>
     </div>
   </div>
 </div>
