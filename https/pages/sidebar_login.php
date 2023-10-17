<?php
$page = $_SESSION["user"]["pages"];
    if($page !=""){
        switch($page){
        // ADMIN IT
        case 1 :
            //REDIRETION DANS LE DASHBORD DE SUPER ADMIN
            include_once ("../../../../sidebar/html/login.php");
            break; 
        // CEO
        case 2 :
            //REDIRETION DANS LE DASHBORD DU CEO
            break;  
        // TEAM LEADER
        case 3 :
            //REDIRETION DANS LE DASHBORD DU CEO
            
            break; 
        // RESPONSIBLE
        case 4 :
            //REDIRETION DANS LE DASHBORD DU CEO
           
            break;
        // USERS
        case 5 :
            //REDIRETION DANS LE DASHBORD DU CEO
            
            break;  
        // WAREHOUSE
        case 6 :
            //REDIRETION DANS LE DASHBORD DU WAREHOUSE

            break;  
    } 
}
?>