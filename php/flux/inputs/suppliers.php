<?php
if(isset($_SESSION["suppliers"])){
    header("Location: ../flux/inputs_register.php");
    exit;
}
if(!empty($_POST)){
        if( 
        isset(
            $_POST["purchase_date"],
            $_POST["purchase_suppliers"],
            $_POST["purchase_proforma"],
            $_POST["purchase_bill"],
            $_POST["payment"],
            $_POST["purchase_payment_due_date"],
            $_POST["purchase_commets"]
            )
            && !empty($_POST["purchase_date"])
            && !empty($_POST["purchase_suppliers"])
            && !empty($_POST["purchase_bill"])
            && !empty($_POST["payment"]))
            {

        $purchase_date= strip_tags($_POST["purchase_date"]);
            if($purchase_date ==""){$_SESSION["error_suppliers"] =["Purchase date empty"];}
        $purchase_suppliers= strip_tags($_POST["purchase_suppliers"]);
            if($purchase_suppliers ==""){$_SESSION["error_suppliers"] =["Suppliers empty"];}
        $purchase_proforma= strip_tags($_POST["purchase_proforma"]);

        $purchase_bill= strip_tags($_POST["purchase_bill"]);
            if($purchase_bill ==""){$_SESSION["error_suppliers"] =["Number Bill empty"];}

        $purchase_bill_scan= $_FILES["purchase_bill_scan"]["name"];
            if($purchase_bill_scan ==""){$_SESSION["error_suppliers"] =["Bill Scan empty"];}

        $payment= strip_tags($_POST["payment"]);
            if($payment ==""){$_SESSION["error_suppliers"] =["Payement Modus empty"];}
        $purchase_payment_due_date= strip_tags($_POST["purchase_payment_due_date"]);
        $purchase_commets= strip_tags($_POST["purchase_commets"]);

        /*=================== MAX NUMBER ===========*/
            $check_nbr= mysqli_query($dbc,"SELECT MAX(nbr_in) FROM flux_in");
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

        $id_code_in = "IN" . $nb_chars . $nbr_in;

        // BILL SCAN
        $file_name = "bill-img-" . $file_name;

        // SESSION NOT EMPTY
        $_SESSION["suppliers"] = [
            "purchase_date" => $purchase_date,
            "purchase_suppliers" => $purchase_suppliers,
            "purchase_proforma" => $purchase_proforma,
            "purchase_bill" => $purchase_bill,
            "purchase_bill_scan" => $file_name,
            "payment" => $payment,
            "purchase_payment_due_date" => $purchase_payment_due_date,
            "purchase_commets" => $purchase_commets,
            "nbr_in" => $nbr_in,
            "id_code_in" => $id_code_in,
            "nbr_chr" => $nb_char,
        ];
        
        header("Location: ../flux/inputs_register.php");
    
    }else{$_SESSION["error_suppliers"] =["Many files empty"];}
}

?>