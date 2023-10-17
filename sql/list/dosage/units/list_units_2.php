
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_units))
    {
?>
    <option value= "<?php echo $row ['id_units_mv']?>">
    <?php echo $row ['units_description'] ?>
    </option>
<?php
   }
?>