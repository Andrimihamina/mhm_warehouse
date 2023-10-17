<?php 
    foreach($pros_cons_itc as $pro_cons_itc): 
?>
    <tr>   
        <!-- ITEMS-->
        <th scope="row"><a href="#"><?= $pro_cons_itc["id_code_cons_itc"]?></a></th>
        <td><?= $pro_cons_itc["Descriptions"]?></td>
        <!-- FROM -->
        <td><?php if($pro_cons_itc["germany"]==1){echo"Germany";}else{echo"Mada";}?></td>
        <!-- QUANTITY -->
        <td><?= $pro_cons_itc["stock"];?></td>
        <!-- NEEDED -->
        <?php $qt_needed = $pro_cons_itc["quantity_avarage"] - $pro_cons_itc["stock"];?>
        <td><div class="col-md-10"><input type="number" name="qt-<?=$pro_cons_itc["id_itc"]?>" class="form-control" value="<?=$qt_needed?>"></div></td>  
        <!-- ADD -->
        <td></div><button type="button" name="sub-<?=$pro_cons_itc["id_itc"]?>" class="btn btn-success"><i class="bi bi-check-circle"></i></button></div></td>
    </tr>
<?php 
    endforeach;
?> 