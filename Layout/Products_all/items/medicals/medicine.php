<?php 
    foreach($prods_med as $prod_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_med["id_code_med"]?>"><?= $prod_med["id_code_med"]?></a></th>
        <td><?= $prod_med["commercial_name"]?></td>
        <td><?= $prod_med["Descriptions"]?></td>
        <td><?= $prod_med["forms_description"]?></td>
        <!-- APPLICATIONS -->
        <td><?= $prod_med["med_affiche_application"]?></td>
        <!-- CLASSIFCIATIONS -->
        <td><?= $prod_med["med_affiche_classification"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_med["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 