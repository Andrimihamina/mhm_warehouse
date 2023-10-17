
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_charrieres))
    {
?>
    <option value= "<?php echo $row ['id_charrieres']?>">
    <?php echo $row ['charrieres_descriptions'] ?>
    </option>
<?php
   }
?>