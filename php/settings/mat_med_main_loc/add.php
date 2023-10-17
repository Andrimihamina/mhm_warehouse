<?php
    session_start();
    require_once("../../../env/dns_warehouse.php");

    $_SESSION["error_none"]=[];

    include_once ("../1_add_variables.php");
    $add= ($_POST["add"]);

    if($add === "done"){
        // EMPTY
        if($_SESSION["error_none"]===[]){
            $tbl_check = "mat_location";
            $colums_id = "id_location";
            $colums_des = "location_descriptions";
            $colums_def = "location_definitions";
            $link_set ="med_mat_man_loc.php";

            $check = mysqli_query($dbc,"SELECT * FROM `$tbl_check` WHERE `$colums_des` ='$add_descriptions'");
            $checkrows_id = mysqli_num_rows($check);
        
                // DOUBLON
                if($checkrows_id > 0){
                    $_SESSION["error_doublons"][] = "This Items is alredy register";
                    header("Location: ../../../Layout/Settings/$link_set");
                }
                else{
                    $sql_from= "INSERT INTO `$tbl_check` (`$colums_id`, `$colums_des`,  `$colums_def`) VALUES (NULL, '$add_descriptions',  '$add_definitions')"; 
                    $query_from = $db->prepare($sql_from);
                    $query_from->execute();
            }
        header("Location: ../../../Layout/Settings/$link_set");}
    }header("Location: ../../../Layout/Settings/$link_set")
    
?>