<?php
  if(
    isset($_POST["used"])
    && !empty($_POST["used"])
  ){
    // Quelle est la categories du CONSUMABLE
    $used = $_POST["used"];

    $sql_used = "INSERT INTO `mat_itc_used` (
      `id`, 
      /*IDENTITY*/
      `id_mat_itc`, 
      /*DECRIPTION FOR USED*/
      `used_for`) VALUES (
      NULL,  
      /*IDENTITY*/
      '$mat_itc_id',
      /*DESCRIPITON FOR USED*/
      '$used')";

      //On prerare la requete
      $query_used= $db->prepare($sql_used);
      //On execute la requete
    $query_used->execute(); 
    }
?>


