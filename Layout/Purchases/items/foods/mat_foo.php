<?php 
    foreach($pros_mat_foo as $pro_mat_foo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_mat_foo["id_code_mat_foo"]?></a></th>
        <td><?= $pro_mat_foo["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_mat_foo["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_mat_foo["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_mat_foo["quantity_avarage"] - $pro_mat_foo["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_mat_foo["id_foo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_mat_foo["id_foo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>  
    </tr>
<?php 
    endforeach;
?> 