<?php
    /* =============== LOCATION 0 ====================== */
        $location_0= strip_tags($_POST["location_0"]);
        if($location_0 =="Choose..."){$_SESSION["error_incomplet"] =["Main Localisation empty"];}
        $location_1= strip_tags($_POST["location_1"]);
        if($location_1 =="Choose..."){$_SESSION["error_incomplet"] =["Sub Localisation empty"];}
        $location_2= strip_tags($_POST["location_2"]);

    /* =============== QUANTITY PRICE ======================*/
        $qt_price = strip_tags($_POST["med_quantity"]);
        if($qt_price ==""){$_SESSION["error_incomplet"] =["Quantity price empty"];}
        $box = strip_tags($_POST["box"]);
        if($box =="Choose..."){$_SESSION["error_incomplet"] =["Units Boxes for prices empty"];}
        $price = strip_tags($_POST["med_price"]);
        if($price ==""){$_SESSION["error_incomplet"] =["Price empty"];}

    /*=============== QUANTITY ======================*/
        $quantity_initial= $_POST["quantity_initial"];
        if($quantity_initial ==""){$_SESSION["error_incomplet"] =["Initial quantity empty"];}
        $quantity_minimal= $_POST["quantity_minimal"];
        $quantity_avarage= $_POST["quantity_avarage"];

    /*=============== FLUX ======================*/
        $stock_in = 0;
        $stock_out = 0;
        
    /*============== ID RESPONSIBLE ADDING ===================*/
        $name_adding = $_SESSION["user"]["username"];
?>