<?php require_once("../../php/functions/services_responsibility/services_responsibility_cons_med.php");?>
<?php foreach($prods as $prod):?>
    <tr>
    <td><?=$prod["id_code_cons_med"]?></td>
    <td><?=$prod["brand_cons_med"]?></td>
    <td><?=$prod["Descriptions"]?></td>
    <td><?=$prod["stock"]?></td>
    <td><input name="cos_med_qt-<?= $prod["id_cons_med"]?>" type="number" class="form-control" style="width: 106px"></td>
    <!-- EDIT -->
    <td><button type="submit" name="cos_med_done-<?= $prod["id_cons_med"]?>" value ="done" class="btn btn-info"><i class="ri-edit-box-line"></i></button></td>
    </tr>
<?php endforeach; ?>