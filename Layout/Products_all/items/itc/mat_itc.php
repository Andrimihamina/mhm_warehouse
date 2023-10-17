<?php 
    foreach($prods_mat_itc as $prod_mat_itc): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_itc["id_code_mat_itc"]?>"><?= $prod_mat_itc["id_code_mat_itc"]?></a></th>
        <td><?= $prod_mat_itc["manufacturer_name"]?></td>
        <td><?= $prod_mat_itc["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_itc["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_itc["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 