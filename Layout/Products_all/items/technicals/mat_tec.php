<?php 
    foreach($prods_mat_tec as $prod_mat_tec): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_tec["id_code_mat_tec"]?>"><?= $prod_mat_tec["id_code_mat_tec"]?></a></th>
        <td><?= $prod_mat_tec["manufacturer_name"]?></td>
        <td><?= $prod_mat_tec["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_tec["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_tec["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 