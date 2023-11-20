<?php
if(!empty($_POST)){
        if( 
        isset(
            $_POST["date"],
            $_POST["cards"],
            $_POST["available_balance"],
            $_POST["ticket_number"],
            $_POST["cars"],
            $_POST["types_fuel"],
            $_POST["purchase_capacity"],
            $_POST["purchase_amount"],
            )
            && !empty($_POST["date"])
            && !empty($_POST["cards"])
            && !empty($_POST["available_balance"])
            && !empty($_POST["ticket_number"])
            && !empty($_POST["cars"])
            && !empty($_POST["types_fuel"])
            && !empty($_POST["purchase_capacity"])
            && !empty($_POST["purchase_amount"])
            )
            {

        $date= strip_tags($_POST["date"]);
            if($date ==""){$_SESSION["error_suppliers"] =["Purchase date empty"];}
        $cards= strip_tags($_POST["cards"]);
            if($cards ==""){$_SESSION["error_suppliers"] =["Cards empty"];}
        $available_balance= $_POST["available_balance"];
            if($available_balance ==""){$_SESSION["error_suppliers"] =["Available balance empty"];}
        $ticket_number= strip_tags($_POST["ticket_number"]);
            if($ticket_number ==""){$_SESSION["error_suppliers"] =["Ticket Number empty"];}

        $cars= strip_tags($_POST["cars"]);
            if($cars ==""){$_SESSION["error_suppliers"] =["Cars empty"];}
        $types_fuel= strip_tags($_POST["types_fuel"]);
            if($types_fuel ==""){$_SESSION["error_suppliers"] =["Types Fuel empty"];}
        $purchase_capacity= strip_tags($_POST["purchase_capacity"]);
            if($purchase_capacity ==""){$_SESSION["error_suppliers"] =["Purchase capacity balance empty"];}
        $purchase_amount= $_POST["purchase_amount"];
            if($purchase_amount ==""){$_SESSION["error_suppliers"] =["Purchase amount empty"];}


        $ticket_picture= $_FILES["ticket_picture"]["name"];
            if($ticket_picture ==""){$_SESSION["error_suppliers"] =["Ticket Picture empty"];}

        /*=================== MAX NUMBER ===========*/
        
            $check_nbr= mysqli_query($dbc,"SELECT MAX(id) FROM fuel");
            $check_nbr = $check_nbr ->fetch_array();
            $nbr = intval($check_nbr[0]);
            //INCRIMMENTATION
            $nbr_in = $nbr + 1;

        // ID FLUX OUT
            $nb_char = strlen($nbr_in);
            switch($nb_char){
                case 7 :
                    $nb_chars = "-";
                    break;
                case 6 :
                    $nb_chars = "-0";
                    break;
                case 5 :
                    $nb_chars = "-00";
                    break;
                case 4 :
                    $nb_chars = "-000";
                    break;
                case 3 :
                    $nb_chars = "-0000";
                    break;
                case 2 :
                    $nb_chars = "-00000";
                    break;
                case 1 :
                    $nb_chars = "-000000";
                    break;
            }

        $id_code_in = "FUEL" . $nb_chars . $nbr_in;

        // NEW BALANCE
        $new_balance = $available_balance - $purchase_amount;

        // BILL SCAN
        $file_name = "fuel-img-" . $file_name;

        // NAME ADDING
        $name_adding = $_SESSION["user"]["username"];

        require_once ("../../sql/purchases/fuel.php");
    
    }else{$_SESSION["error_suppliers"] =["Many files empty"];}
}
?>