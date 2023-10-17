<?php
  if(
    isset($_POST["used"])
    && !empty($_POST["used"])
  ){
    // Quelle est la categories du CONSUMABLE
    $used = $_POST["used"];

    $sql_used = "INSERT INTO `mat_med_used` (
      `id`, 
      /*IDENTITY*/
      `id_mat_med`, 
      /*DECRIPTION FOR USED*/
      `used_for_mat_med`) VALUES (
      NULL,  
      /*IDENTITY*/
      '$mat_med_id',
      /*DESCRIPITON FOR USED*/
      '$used')";

      //On prerare la requete
      $query_used= $db->prepare($sql_used);
      //On execute la requete
    $query_used->execute(); 
    }
?>


