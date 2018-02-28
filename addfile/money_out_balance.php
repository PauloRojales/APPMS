<?php include "config.php";?>
    <div class="form-group col-md-12">
      <div class="table">
         <table class="table table-striped table-bordered data">
            <thead>
               <tr class="success">
                  <th>Chart of Account</th>
                  <th>Remaining Budget</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = $conn->prepare("SELECT * FROM apptopus_account");
                  $query->execute();
                  $query->setFetchMode(PDO::FETCH_ASSOC);
                  while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
               <tr>
                  <td><?php echo $data['apptopus_account_name']; ?></td>
                  <td><?php echo $data['apptopus_account_budget']; ?></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
    </div>