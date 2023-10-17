
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_suppliers))
    {
?>
    <option value= "<?php echo $row ['id_suppliers']?>">
    <?php echo $row ['name'] ?>
    </option>
<?php
   }
?>