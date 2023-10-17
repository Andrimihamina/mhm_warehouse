
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_checking_date))
    {
?>
    <option value= "<?php echo $row ['id_date']?>">
    <?php echo $row ['routing_check_date'] ?>
    </option>
<?php
   }
?>