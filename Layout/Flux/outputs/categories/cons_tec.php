<?php require_once("../../php/functions/services_responsibility/services_responsibility_cons_tec.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_cons_tec"]?></td>
    <td><?=$prod["brand_cons_tec"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="cos_tec_qt-<?= $prod["id_cons_tec"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="cos_tec_done-<?= $prod["id_cons_tec"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>