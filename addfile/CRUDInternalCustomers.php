<html>
  <head>
    <?php include 'config.php'; ?>
    <?php include 'modal.php'; ?>
  </head>
  <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered data-siswa">
      <thead>
        <tr class="success">
						  <th>ID</th>
						  <th>First Name</th>
						  <th>Middle Name</th>
						  <th>Last Name</th>
              <th>Action</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $query = $conn->prepare("SELECT * FROM apptopus_internalcustomers");
      $query->execute();
      $query->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $data['apptopus_internal_id']; ?></td>
          <td><?php echo $data['apptopus_employee_fname']; ?></td>
          <td><?php echo $data['apptopus_employee_mname']; ?></td>
          <td><?php echo $data['apptopus_employee_lname']; ?></td>
          <td><button type="button" id="<?php echo $data['apptopus_internal_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#Update-ViewInternalCustomer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> 
            <button type="button" id="<?php echo $data['apptopus_internal_id']; ?>" class="btn btn-danger btn-sm DeleteInternalCustomer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
  $('.newemployee').click (function() {
    var Fname = $("#Fname").val().trim();
    var Mname = $("#Mname").val().trim();
    var Lname = $('#Lname').val().trim();



      $.ajax({
        type: "POST",
        url: "addfile/crud.php?eks=InsertEmployee",
        data: "Fname="+Fname+"&Mname="+Mname+"&Lname="+Lname,
        success: function (msg) {
        InternalCustomer();
        clear_data();
        }
      });

  });

  $('.DeleteInternalCustomer').click(function() {
    var nis = this.id;
    var conf = confirm("Do you want to delete ? " +nis);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud.php?eks=DeleteInternalCustomer",
          data: "nis="+nis,
          success: function (msg) {
          InternalCustomer();
          }
        });
    }
  });

  $('.DetailIinternalCustomer').click( function () {
    var nis = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud.php?eks=DetailIinternalCustomer",
      data: "nis="+nis,
      dataType: "json",
      success: function (data) {
        $('#Unis').val(data.apptopus_internal_id);
        $('#UFname').val(data.apptopus_employee_fname);
        $('#UMname').val(data.apptopus_employee_mname);
        $('#ULname').val(data.apptopus_employee_lname);
        $('#Update-ViewInternalCustomer').modal("show");
      }
    });
  });

  $('.UpdateInternalCustomer').click(function () {
    var nis = $("#Unis").val().trim();
    var Fname = $("#UFname").val().trim();
    var Mname = $("#UMname").val().trim();
    var Lname = $('#ULname').val().trim();


    $.ajax({
        type: "POST",
        url: "addfile/crud.php?eks=UpdatedInternalCustomer",
        data: "nis="+nis+"&Fname="+Fname+"&Mname="+Mname+"&Lname="+Lname,
        success: function (msg) {
        InternalCustomer();
        clear_data();
        
        }
    });
  });
$('.data-siswa').DataTable(); //datatables
});
</script>
