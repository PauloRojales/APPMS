<html>
   <head>
      <?php include 'config.php'; ?>
      <?php include 'modal.php'; ?>
   </head>
   <body>
      <div class="table-responsive">
         <table class="table table-striped table-bordered data">
            <thead>
               <tr class="success">
                  <th>ID</th>
                  <th>Product Package</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = $conn->prepare("SELECT * FROM apptopus_product");
                  $query->execute();
                  $query->setFetchMode(PDO::FETCH_ASSOC);
                  while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
               <tr>
                  <td><?php echo $data['apptopus_product_id']; ?></td>
                  <td><?php echo $data['product_package'];?></td>
                  <td><button type="button" id="<?php echo $data['apptopus_product_id']; ?>" class="btn btn-warning btn-sm detail_product" data-toggle="modal" data-target="#update_product"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> 
                     <button type="button" id="<?php echo $data['apptopus_product_id']; ?>" class="btn btn-danger btn-sm delete_product"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                  </td>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </body>
</html>
<script type="text/javascript">
   $(document).ready(function(e) {
     //CRUD
   
     //INSERT DATA
     $('.new_product').click (function() {
       var Package_name = $("#Package_name").val().trim();
   
       if(Package_name =="") {
   
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
           url: "addfile/crud_sql_func.php?eks=add_product",
           data: "Package_name="+Package_name,
           success: function (msg) {
          swal("Adding succcess!");
          // internal_customer_func();
          // clear_data();
           }
         });
       });
   
     });
   
     $('.delete_product').click(function() {
       var nis = this.id;
          swal({
          title: "Are you sure?",
          text: "Submit to delete this data",
          type: "warning",
          showCancelButton: true,
          closeOnConfirm: false,
          showLoaderOnConfirm: true
          },
            function () {
           $.ajax({
             type: "POST",
             url: "addfile/crud_sql_func.php?eks=delete_product",
             data: "nis="+nis,
             success: function (msg) {
           swal("Delete success!");
            // internal_customer_func();
             }
           });  
        });
     });
   
     $('.detail_product').click( function () {
       var nis = this.id;
       $.ajax({
         type: "POST",
         url: "addfile/crud_sql_func.php?eks=detail_product",
         data: "nis="+nis,
         dataType: "json",
         success: function (data) {
           $('#Product_ID').val(data.apptopus_product_id);
           $('#UPackage_name').val(data.product_package);
           $('#update_product').modal("show");
         }
       });
     });
   
     $('.UpdateInternalCustomer').click(function () {
       var nis = $("#Product_ID").val().trim();
       var UPackage_name = $("#UPackage_name").val().trim();
        swal({
        title: "Are you sure?",
        text: "Submit to update data",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true
              },   
         function () {
        $.ajax({
           type: "POST",
           url: "addfile/crud_sql_func.php?eks=updated_product",
           data: "nis="+nis+"&UPackage_name="+UPackage_name,
           success: function (msg) {
         //  internal_customer_func();
         //  clear_data();
          swal("Update success!");
           
           }
       });
    });
   
     });
   $('.data').DataTable(); //datatables
   });
</script>