<table class="table table-borderless datatable">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Descriptions</th>
        <th scope="col">Definitions</th>
        <th scope="col">Modify</th>
    </tr>
</thead>
    <tbody>
        <?php foreach($responsibilities_list as $responsible):?>
            <tr>
                <th scope="row"><?= strip_tags($responsible["id_resp"])?></th>
                <td><?=$responsible["responsability"]?></td>
                <td><?= $responsible["responsibility_definition"]?></td>
                <td><button type="button" class="btn btn-info" name="<?= strip_tags($responsible["id_resp"])?>"><i class="ri-edit-box-line"></i></button></td>
            </tr> 
        <?php endforeach ?>
    </tbody>
</table>