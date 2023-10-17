<?php 
    foreach($prods_cons_tec as $prod_cons_tec): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="../../Layout/Products_view/view_in_systems.php?idProduit=<?=$prod_cons_tec["id_code_cons_tec"]?>"><?= $prod_cons_tec["id_code_cons_tec"]?></a></th>
        <td><?= $prod_cons_tec["brand_cons_tec"]?></td>
        <td><?= $prod_cons_tec["Descriptions"]?></td>
        <!-- USED -->
        <td><?= $prod_cons_tec["used_for"]?></td>
        <!-- QUANTITY -->
        <td><?= $prod_cons_tec["stock"];?></td>
    </tr>
<?php 
    endforeach;
?> 