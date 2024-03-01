<?php
session_start();
include_once("../../../../env/dns_warehouse.php");
include_once("../../../../env/dns_patient_system.php");

if(!empty($_POST)){
    
    foreach( $_POST as $cles =>$values){
        // CANCEL
        if ($values == "cancel-item"){
            $var_cancel = "$cles";

            // ID FLUX
           $ID_flux = str_replace("cancel-item-", "", $var_cancel);
       
           require_once ("../../../../sql/flux/outputs/cancel_item_h.php");
           
           $id_code_1 = "SELECT * FROM `flux_out` WHERE `id_flux_out` = '$ID_flux'"; 
           $id_code_2 = $db->query($id_code_1); 
           $id_code_3 = $id_code_2->fetchAll(); 
           $id_code = $id_code_3[0]["id_out"];
           
           header("Location: ../../../../Layout/Flux/outputs_history_view.php?id=$id_code");
           exit;
        }

         // RESTORER ALL           
         if ($values == "restore-item"){
            $var_cancel = "$cles";
      
           // ID FLUX
           $ID_flux = str_replace("restore-item-", "", $var_cancel);
       
           require_once ("../../../../sql/flux/outputs/restore_item.php");
           
           $id_code_1 = "SELECT * FROM `flux_out` WHERE `id_flux_out` = '$ID_flux'"; 
           $id_code_2 = $db->query($id_code_1); 
           $id_code_3 = $id_code_2->fetchAll(); 
           $id_code = $id_code_3[0]["id_out"];
           
           header("Location: ../../../../Layout/Flux/outputs_history_view.php?id=$id_code");
           exit;
        }

        // EDIT
        if ($values == "edit_item"){
            $var_cancel = "$cles";

            // ID FLUX
            $ID_flux = str_replace("edit-", "", $var_cancel);
            // QUANTITY IN
            $qt_edit = $_POST["qt-$ID_flux"];
        
            require_once ("../../../../sql/flux/outputs/edit_item.php");
            
            $id_code_1 = "SELECT * FROM `flux_out` WHERE `id_flux_out` = '$ID_flux'"; 
            $id_code_2 = $db->query($id_code_1); 
            $id_code_3 = $id_code_2->fetchAll(); 
            $id_code = $id_code_3[0]["id_out"];
            
            header("Location: ../../../../Layout/Flux/outputs_history_view.php?id=$id_code");
            exit;
        }

        // CANCEL ALL           
        if ($values == "cancel"){
            $var_cancel = "$cles";
      
            // ID FLUX ASSOCIATION
            $nbr_chr = $_POST["cancel_all"];
            
            require_once ("../../../../sql/flux/outputs/cancel_all.php");
            
            header("Location: ../../../../Layout/Flux/outputs_history.php");
            exit;
        }
        
  
    }
    
    session_status();
   header("Location: ../../../../Layout/Flux/outputs_history.php");
}

?>