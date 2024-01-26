<?php 
    foreach($pros_cons_itc as $pro_cons_itc): 
?>
    <tr>   
        <!-- SUPPLIERS-->
        <th scope="row"><a href="#"><?= $pro_cons_itc["suppliers"]?></a></th>
        <td><?= $pro_cons_itc["Descriptions"]?></td>
        <td><?= $pro_cons_itc["Price"]?></td>
        <td><?= $pro_cons_itc["Expiration_date"]?></td>
        
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_itc["id_itc"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_itc["id_itc"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 