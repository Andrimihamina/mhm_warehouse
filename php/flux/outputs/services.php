<?php
if(isset($_SESSION["services"])){header("Location: ../flux/outputs_register.php");exit;}

if(!empty($_POST)){

    if(isset($_POST["priority"],$_POST["services"])
            && !empty($_POST["priority"])
            && !empty($_POST["services"])
    ){
        $priority= strip_tags($_POST["priority"]);
        $services= strip_tags($_POST["services"]);
        if($services=="Choose..."){$_SESSION["error_services"] =["Choose the service that makes the order"];}

        if($_SESSION["error_services"]==""){
                $check_nbr= mysqli_query($dbc,"SELECT MAX(nbr_chr) FROM flux_out");
                $check_nbr = $check_nbr ->fetch_array();
                $nbr = intval($check_nbr[0]);

                // NUBER IN
                $nbr_in = $nbr + 1;

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
                
                // CODE OUT
                $id_code_out = "OUT" . $nb_chars . $nbr_in;

            $_SESSION["services"] = [
                "priority" => $priority,
                "services" => $services,
                "id_code_out" => $id_code_out,
                "nbr_chr" => $nbr_in,
            ];

            header("Location: ../flux/outputs_register.php");
            exit;
            }  
    }
}



?>