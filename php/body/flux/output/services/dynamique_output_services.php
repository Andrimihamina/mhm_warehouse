<?php
if(isset($_SESSION["services"])){
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
            $_POST["priority"],
            $_POST["services"],
            $_POST["patient_number"],
            )
            && !empty($_POST["priority"])
            && !empty($_POST["services"])
    ){
        $priority= strip_tags($_POST["priority"]);
        $_SESSION["error"] =[];
        $services= strip_tags($_POST["services"]);
        $_SESSION["error"] =[];
        $patient_number= strip_tags($_POST["patient_number"]);
        $_SESSION["error"] =[]; 

    // SERVICE EST VIDE
    if($services != "Open this select menu"){
         /*
        ID INPUT
        */
        /*
            ===================On verifiee maximum de chiffre a entre===========
             */
            $check_nbr= mysqli_query($dbc,"SELECT MAX(nbr_chr) FROM flux_out");
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
            ----------------------------CODE OUT-------------------------------------------
            */
            $id_code_out = "OUT" . $nb_chars . $nbr_in;

        $_SESSION["services"] = [
            "priority" => $priority,
            "services" => $services,
            "patient_number" => $patient_number,
            "id_code_out" => $id_code_out,
            "nbr_chr" => $nbr_in,
        ];

        header("Location: ../research");
    }else
    {$_SESSION["error"] = ["Enter the Service!"];}
    }else
    {$_SESSION["error"] = ["The file isn't complet"];}
}

?>