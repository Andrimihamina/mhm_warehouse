<?php 
    foreach($pros_cons_foo as $pro_cons_foo): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_cons_foo["id_code_cons_foo"]?></a></th>
        <td><?= $pro_cons_foo["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_cons_foo["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_cons_foo["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_cons_foo["quantity_avarage"] - $pro_cons_foo["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_foo["id_foo"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_foo["id_foo"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 