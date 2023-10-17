
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_state_date))
    {
?>
    <option value= "<?php echo $row ['id_state']?>">
    <?php echo $row ['states'] ?>
    </option>
<?php
   }
?>