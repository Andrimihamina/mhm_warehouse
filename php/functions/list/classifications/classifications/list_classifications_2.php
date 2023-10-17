
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_classification))
    {
?>
    <option value= "<?php echo $row ['id_class']?>">
    <?php echo $row ['classifications_descriptions'] ?>
    </option>
<?php
   }
?>