<?php 
    foreach($prods_cons_itc as $prod_cons_itc): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_cons_itc["id_code_cons_itc"]?>"><?= $prod_cons_itc["id_code_cons_itc"]?></a></th>
        <td><?= $prod_cons_itc["brand_cons_itc"]?></td>
        <td><?= $prod_cons_itc["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_cons_itc["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_cons_itc["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 