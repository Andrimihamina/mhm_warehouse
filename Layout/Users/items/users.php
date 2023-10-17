<!-- Top Selling -->
<div class="col-12">
  <div class="card top-selling overflow-auto">

            <div class="card-body pb-0">
              <h5 class="card-title">Users<span>| All</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Responsibilities</th>
                    <th scope="col">Modify</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($users as $user): 
                  ?>
                    <tr>
                      <th scope="row"><img src="../../../warehouse_img/img/users_img/<?=$user["users_img"];?>" alt="IMG"></th>
                      <td><?=$user["mhm_matricule"]?></td>
                      <td><?=$user["name"]?></td>
                      <td class="fw-bold">
                        <?php
                          $resp= $user["responsibility"];
                          $sql_resp = "SELECT * FROM `mhm_resp`  WHERE id_resp =$resp";
                          $requete_resp = $db->query($sql_resp);
                          $responsibilities = $requete_resp->fetchall();      
                          $resp = print_r($responsibilities[0]["responsability"])
                        ?>
                      </td>
                      <td><button type="button" class="btn btn-info" name="edit"><i class="ri-edit-box-line"></i></button></td>
                    </tr>
                  <?php 
                    endforeach;
                  ?>
                </tbody>
              </table>

          </div>

        </div>
</div>