<?php
if(isset($_SESSION["suppliers"])){
    header("Location: ../research");
    exit;
}
if(!empty($_POST)){
    //POST n'est pas vide, on verifier que toutes les donnes sont presents
    if(
         /*
       ============== INJECTION DU VARIABLE =============================
        */
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
            && !empty($_POST["payment"])
    ){
        $purchase_date= strip_tags($_POST["purchase_date"]);
        $_SESSION["error"] =[];
        $purchase_suppliers= strip_tags($_POST["purchase_suppliers"]);
        $_SESSION["error"] =[];
        $purchase_proforma= strip_tags($_POST["purchase_proforma"]);
        $_SESSION["error"] =[];
        $purchase_bill= strip_tags($_POST["purchase_bill"]);
        $_SESSION["error"] =[];

        $purchase_bill_scan= $_FILES["purchase_bill_scan"]["name"];
        $_SESSION["error"] =[];

        $payment= strip_tags($_POST["payment"]);
        $_SESSION["error"] =[];
        $purchase_payment_due_date= strip_tags($_POST["purchase_payment_due_date"]);
        $_SESSION["error"] =[];
        $purchase_commets= strip_tags($_POST["purchase_commets"]);
        $_SESSION["error"] =[];

         /*
        ID INPUT
        */
        /*
            ===================On verifiele maximum de chiffre a entre===========
             */
            $check_nbr= mysqli_query($dbc,"SELECT MAX(nbr_in) FROM flux_in");
            $check_nbr = $check_nbr ->fetch_array();
            $nbr = intval($check_nbr[0]);
            //On incriment le nombre pour le bd
            $nbr_in = $nbr + 1;
            /*
            ------------------ On compule le ID CODE MED -----------------------------
            */
            //Nomination
            //Nombre de caracter du nombre d'abreviaton dans le BD
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
            /*
            ----------------------------CODE IN-------------------------------------------
            */
            $id_code_in = "IN" . $nb_chars . $nbr_in;

         //Non de l'users Image
         $file_name = "bill-img-" . $file_name;

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

        header("Location: ../research");
    }else
    {$_SESSION["error"] = ["The file isn't complet"];}
}

?>