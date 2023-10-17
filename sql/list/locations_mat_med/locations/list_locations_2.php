
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_location))
    {
?>
    <option value= "<?php echo $row ['id_location']?>">
    <?php echo $row ['location_descriptions'] ?>
    </option>
<?php
   }
?>