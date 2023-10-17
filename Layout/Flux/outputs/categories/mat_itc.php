<?php require_once("../../php/functions/services_responsibility/services_responsibility_mat_itc.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_mat_itc"]?></td>
    <td><?=$prod["manufacturer_name"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="mat_itc_qt-<?= $prod["id_mat_itc"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="mat_itc_done-<?= $prod["id_mat_itc"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>