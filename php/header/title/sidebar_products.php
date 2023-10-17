<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){
        
        // ADMIN
        case 1 :
            include_once ("../../../../sidebar/html/products.php");
            break; 
        // CEO 
        case 2 :
            include_once ("../../../../sidebar/html/products.php");
            break;  
        // DEPUTY
        case 3 :
            include_once ("../../../../sidebar/html/products_users.php");
            break; 
        // WAREHOUSE
                // WAREHOUSE RESPONSIBLE
                case 4 :
                    include_once ("../../../../sidebar/html/products.php");
                    break;
                // STORKEEPER MEDICAL
                case 5 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // STORKEEPER TECHNICAL
                case 6 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // STORKEEPER OPERATIONS
                case 7 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // STORKEEPER IT
                case 8 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // STORKEEPER COMMUNICATION
                case 9 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
        // RESPONSIBLES
                // RESPONSIBLES NURSE
                case 11 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // RESPONSIBLES DELIVERY
                case 12 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // RESPONSIBLES OBSTETRIC OUTPATIENTS
                case 13 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // RESPONSIBLES PEDIATRIC
                case 14 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // RESPONSIBLES OFFICE
                case 15 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
        // USERS
                // USERS MEDICAL
                case 16 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // USERS MEDICAL
                case 17 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // USERS TECHNICAL
                case 18 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
                // USERS OPERATIONS
                case 19 :
                    include_once ("../../../../sidebar/html/products_users.php");
                    break;
    } 
}
?>