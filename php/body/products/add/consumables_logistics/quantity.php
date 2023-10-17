<?php
//On traite le formulaire
if(!empty($_POST)){
  
     /*
    ========================  =============================
    */
    //QTT INITIAL
    $quantity_initial = $_POST['quantity_initial']; 

    //QTT MINIMAL
    $quantity_minimal =$_POST['quantity_minimal'];

    //QTT AVARAGE
    $quantity_avarage = $_POST['quantity_avarage'];
   
    $stock = $quantity_initial;

    $sql_quantity = "INSERT INTO `cons_log_quantity` 
    (`id`, 
    `id_cons_log`, 
    /*QUANTITY INITIAL*/
    `quantity_initial`, 
    /*QUANTITY MINIMAL*/
    `quantity_minimal`, 
    /*QUANTITY AVARAGE*/
    `quantity_avarage`, 
    /*STOCK*/
    `stock`, 
    /*STOCK IN*/
    `stock_in`, 
    /*STOCK OUT*/
    `stock_out`) VALUES 
    (NULL, 
    /*IDENTITY*/
    '$cons_log_id', 
    /*QUANTITY INITIAL*/
    '$quantity_initial', 
    /*QUANTITY MINIMAL*/
    '$quantity_minimal',
    /*QUANTITY AVARAGE*/
    '$quantity_avarage',  
    /*STOCK*/
    '$stock', 
    /*STOCK IN*/
    '0', 
    /*STOCK OUT*/
    '0')";

    //On prerare la requete
    $query_cons_log_quantity = $db->prepare($sql_quantity);
    //On execute la requete
    $query_cons_log_quantity->execute(); 
    
}


