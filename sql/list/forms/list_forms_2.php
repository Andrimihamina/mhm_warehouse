
 <?php
    //FONCTION QUI RECHERCHE LA NUMERO DU PAGES A UtILISE
    while ($row= mysqli_fetch_array($list_deroul_forms))
    {
?>
    <option value= "<?php echo $row ['id_form']?>">
    <?php echo $row ['forms_description'] ?>
    </option>
<?php
   }
?>