
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_types))
    {
?>
    <option value= "<?php echo $row ['id_types']?>">
    <?php echo $row ['types_descriptions'] ?>
    </option>
<?php
   }
?>