<?php 
    foreach($prods_mat_med as $prod_mat_med): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_mat_med["id_code_mat_med"]?>"><?= $prod_mat_med["id_code_mat_med"]?></a></th>
        <td><?= $prod_mat_med["manufacturer_name"]?></td>
        <td><?= $prod_mat_med["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_mat_med["used_for_mat_med"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_mat_med["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 