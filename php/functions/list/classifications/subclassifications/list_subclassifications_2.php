
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_subclassification))
    {
?>
    <option value= "<?php echo $row ['id_med_sub_class']?>">
    <?php echo $row ['med_subclassification_description'] ?>
    </option>
<?php
   }
?>