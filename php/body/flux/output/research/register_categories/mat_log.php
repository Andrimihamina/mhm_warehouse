<?php


        if($abbrev_value_indentif == "MAT-LOG-"){

            //ON REMPLACE LE ID LES 13 LETTRE PAR VIDE POUR AVOIR LE LES
    
            $code_flux = str_replace("$id_cons", "", $cles);

            //ID du code flux
            $code_flux_out = "code-flux-" . $code_flux;

            // QT OUT
            $qt_in = "qt" ."-". $id_cons  . $code_flux;


            $identifiant = $id_cons . $code_flux;
            
            /*
            echo "<pre>";
            print_r($code_flux_out); 
            echo "=";
            print_r($_POST["$code_flux_out"]);
            echo "</pre>";
            */

            //ID DU FLUX IN
            $id_flux_out = $_POST["$code_flux_out"];
            
            /*
            echo "<pre>";
            print_r($qt_in);
            echo "=";
            print_r($_POST["$qt_in"]);
            echo "</pre>";
            */
            
            //QUANTITE DU MEDICINE ENTRANT
            $qt_med_in = $_POST["$qt_in"];
            
            
            //IDENTIFIANT DU MEDICINE IN
            $identifiant =$_POST["$identifiant"];

            /*
            UPTADE
            */
            $sql_flux_out_update = "UPDATE `flux_out` SET `done_order` = '1' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
            $query_flux_out_update= $db->prepare($sql_flux_out_update);
                //On execute la requete
            $query_flux_out_update->execute();
            
            $sql_flux_out_update_qt = "UPDATE `flux_out` SET `quantity_out` = '$qt_med_in' WHERE `flux_out`.`id_flux_out` = '$id_flux_out'";
            $query_flux_out_update_qt= $db->prepare($sql_flux_out_update_qt);
                //On execute la requete
            $query_flux_out_update_qt->execute();
          
        }//AUTRES

?>