<?php include "config.php";?>
<?php include "modal.php";?>
<div class="col-md-12"></div>
<div class="col-md-12">
   <div class="form-group col-md-2">
      <a href="" data-toggle="modal" data-target="#add_accounts" id=""><button type="button" class="btn btn-block btn-success btn-md">Add Chart of Account</button></a>
   </div>
   <div  class="form-group col-md-2">
      <a href="" data-toggle="modal" data-target="#budgetvoucher" id=""><button type="button" class="btn btn-block btn-success btn-md">Add Company Budget</button></a>
   </div>
   <div class="form-group col-md-2" > <a href="" data-toggle="modal" data-target="#idvoucher" id=""><button type="button" class="btn btn-block btn-success btn-md">Add Expenses</button></a>
   </div>
</div>
   <div class="form-group col-md-4">
      <div class="table">
         <table class="table table-striped table-bordered data">
            <thead>
               <tr class="success">
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Budget</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = $conn->prepare("SELECT * FROM apptopus_account");
                  $query->execute();
                  $query->setFetchMode(PDO::FETCH_ASSOC);
                  while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
               <tr>
                  <td><?php echo $data['apptopus_account_id']; ?></td>
                  <td><?php echo $data['apptopus_account_name']; ?></td>
                  <td><?php echo $data['apptopus_account_budget']; ?></td>
                  <td><button type="button" id="<?php echo $data['apptopus_account_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#update_accounts"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> 
                     <button type="button" id="<?php echo $data['apptopus_account_id']; ?>" class="btn btn-danger btn-sm DeleteInternalCustomer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                  </td>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
    </div>
   <div class="form-group col-md-8">
      <div class="table">
         <table class="table table-striped table-bordered data">
            <thead>
               <tr class="success">
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Particular</th>
                  <th>Payee</th>
                  <th>Bank</th>
                  <th>Check Number</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = $conn->prepare("SELECT * FROM app_vouchers");
                  $query->execute();
                  $query->setFetchMode(PDO::FETCH_ASSOC);
                  while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
               <tr>
                  <td><?php echo $data['apptopus_date_vouchers']; ?></td>
                  <td><?php echo $data['apptopus_amount_vouchers']; ?></td>
                  <td><?php echo $data['apptopus_particular_vouchers']; ?></td>
                  <td><?php echo $data['apptopus_chargeto_vouchers']; ?></td>
                  <td><?php echo $data['apptopus_vouchers_bank']; ?></td>
                   <td><?php echo $data['apptopus_vouchers_banknum']; ?></td>
                  <td><button type="button" id="<?php echo $data['apptopus_account_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#Update-ViewInternalCustomer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> 
                     <button type="button" id="<?php echo $data['apptopus_account_id']; ?>" class="btn btn-danger btn-sm DeleteInternalCustomer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                  </td>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
    </div>
<script type="text/javascript">
   $(document).ready(function(e) {
       //CRUD
       //INSERT DATA
       $('.addnewvouchers').click(function() {
           var voucher_date = $("#voucher_date").val().trim();
           var particular = $("#voucher_particular").val().trim();
           var amount = $('#voucher_amount').val().trim();
           var chargeto = $('#voucher_chargeto').val().trim();
   
           if (voucher_date == "" || particular == "" || amount == "" || chargeto == "") {
   
               swal("You miss input");
           } else swal({
                   title: "Are you sure?",
                   text: "Submit to save the data",
                   type: "info",
                   showCancelButton: true,
                   closeOnConfirm: false,
                   showLoaderOnConfirm: true
               },
               function() {
                   $.ajax({
                       type: "POST",
                       url: "addfile/crud_sql_func.php?eks=insertvoucher",
                       data: "voucher_date=" + voucher_date + "&particular=" + particular + "&amount=" + amount + "&chargeto=" + chargeto,
                       success: function(msg) {
                           swal("Adding succcess!");
                       }
                   });
               });
       });

       //DELETE DATA
       $('.deletevoucher').on("click", function() {
           var nis = this.id;
           swal({
                   title: "Delete this data?",
                   type: "info",
                   showCancelButton: true,
                   closeOnConfirm: false,
                   showLoaderOnConfirm: true
               },
               function() {
                   $.ajax({
                       type: "POST",
                       url: "addfile/crud_sql_func.php?eks=deletevoucher",
                       data: "nis=" + nis,
                       success: function(msg) {
                           budget_outflow();;
                           swal("Delete success!");
                       }
                   });
               });
       });
   
       //FETCH DATA
       $('.updatevoucher').click(function() {
           var nis = this.id;
           $.ajax({
               type: "POST",
               url: "addfile/crud_sql_func.php?eks=detailvoucher",
               data: "nis=" + nis,
               dataType: "json",
               success: function(data) {
                   $("#voucher_id_update").val(data.vouchers_id)
                   $("#voucher_date_update").val(data.apptopus_date_vouchers)
                   $("#voucher_particular_update").val(data.apptopus_particular_vouchers)
                   $('#voucher_amount_update').val(data.apptopus_amount_vouchers)
                   $('#voucher_chargeto_update').val(data.apptopus_chargeto_vouchers)
                   $('#detail_idvoucher').modal("show");
               }
           });
       });
   
       //UPDATE DATA
       $('.updated_vouchers').click(function() {
           var nis = $("#voucher_id_update").val().trim();
           var voucher_date_update = $("#voucher_date_update").val().trim();
           var voucher_particular_update = $("#voucher_particular_update").val().trim();
           var voucher_amount_update = $('#voucher_amount_update').val().trim();
           var voucher_chargeto_update = $('#voucher_chargeto_update').val().trim();
   
           swal({
                   title: "Are you sure?",
                   text: "Submit to update data",
                   type: "warning",
                   showCancelButton: true,
                   closeOnConfirm: false,
                   showLoaderOnConfirm: true
               },
               function() {
                   $.ajax({
                       type: "POST",
                       url: "addfile/crud_sql_func.php?eks=updatevoucher",
                       data: "nis=" + nis + "&voucher_date_update=" + voucher_date_update + "&voucher_particular_update=" + voucher_particular_update + "&voucher_amount_update=" + voucher_amount_update + "&voucher_chargeto_update=" + voucher_chargeto_update,
                       success: function(msg) {
                           //  clear_update_data();
                           swal("Update success!");
                       }
                   });
               });
   
       });

       // INSERT NEW CHART OF ACCOUNT
       $('.add_chartaccount').click (function() {
         var Account = $("#voucher_account").val().trim();
         var Id = $("#voucher_account_id").val().trim();
         var chart_date = $("#chart_date").val().trim();
         if(Account =="") {
     
           swal("You miss input");
         }
       
         else swal({
         title: "Are you sure?",
         text: "Submit to save the data",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true
             }, 
             function () {
             $.ajax({
             type: "POST",
             url: "addfile/crud_sql_func.php?eks=insertaccount",
             data: "Account="+Account+"&Id="+Id+"&chart_date="+chart_date,
             success: function (data) {
              alert(data);
             swal("Adding succcess!");
             }
           });
         });
       });

       // INSERT BUDGET IN CHART OF ACCOUNT
       $('.add_budget').click (function() {
         var voucher_budget = $("#voucher_budget").val().trim();
         var Account = $("#voucher_account_id").val().trim();
         var voucher_chart_name =$("#Account_name").val().trim();
         if(voucher_budget =="") {
     
           swal("You miss input");
         }
       
         else swal({
         title: "Are you sure?",
         text: "Submit to save the data",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true
             }, 
             function () {
             $.ajax({
             type: "POST",
             url: "addfile/crud_sql_func.php?eks=insertbudget",
             data: "voucher_account_id="+voucher_account_id+"&voucher_budget="+voucher_budget+"&voucher_chart_name="+voucher_chart_name,
             success: function (msg) {
             swal("Adding succcess!");
             }
           });
         });
       });
   
       $('.data').DataTable(); //datatables
   
       //TOTAL AMOUNT 
       $.ajax({
           url: 'addfile/dataview.php?type=totalamount',
           type: 'POST',
           success: function(data) {
               console.log(data.html);
               $("#total_amount").html(data.html);
           }
       });
   
       // VARIANCE
       $.ajax({
           url: 'addfile/dataview.php?type=totalvariance',
           type: 'POST',
           success: function(data) {
               console.log(data.html);
               $("#total_variance").html(data.html);
           }
       });
   
   });
</script>