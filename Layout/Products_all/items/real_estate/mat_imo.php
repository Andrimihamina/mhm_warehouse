<?php 
    foreach($prods_mat_imo as $prod_mat_imo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_imo["id_code_mat_imo"]?>"><?= $prod_mat_imo["id_code_mat_imo"]?></a></th>
        <td><?= $prod_mat_imo["manufacturer_name"]?></td>
        <td><?= $prod_mat_imo["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_imo["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_imo["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 