<?php require_once("../../php/functions/services_responsibility/services_responsibility_cons_itc.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_cons_itc"]?></td>
    <td><?=$prod["brand_cons_itc"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="cos_itc_qt-<?= $prod["id_cons_itc"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="cos_itc_done-<?= $prod["id_cons_itc"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>