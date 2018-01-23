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
						  <th>School Name</th>
						  <th>School Address</th>
						  <th>Number of Pre-School</th>
						  <th>Number of Grade School</th>
						  <th>Number of High School</th>
						  <th>Number of Employees</th>
						  <th>Name of School Principal</th>
						  <th>Principal Birthday</th>
						  <th>Principal Facebook</th>
						  <th>Principal Email</th>
						  <th>Principal Landline</th>
						  <th>Principal Cellphone</th>
						  <th>Name of School Administrator</th>
						  <th>Administrator Birthday</th>
						  <th>Administrator Facebook</th>
						  <th>Administrator Email</th>
						  <th>Administrator Landline</th>
						  <th>Administrator Cellphone</th>
						  <th>Name of System Administrator</th>
						  <th>System Administrator Contact Number</th>
						  <th>System Administrator EmailAddress</th>
						  <th>Relation Manager</th>
						  <th>Product Avail</th>
						  <th>Date Start Finish</th>
						<!--  <th>Status</th> -->
              <th>Action</th>
        </tr>
      </thead>

      <tbody>
      <?php
      $query = $conn->prepare("SELECT * FROM apptopus_externalcustomers");
      $query->execute();
      $query->setFetchMode(PDO::FETCH_ASSOC);
      while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
        <tr>
          <td><?php echo $data['app_school_id']; ?></td>
          <td><?php echo $data['app_school_name']; ?></td>
          <td><?php echo $data['app_school_address']; ?></td>
          <td><?php echo $data['app_school_preschool']; ?></td>
          <td><?php echo $data['app_school_gradeschool']; ?></td>
    		  <td><?php echo $data['app_school_highschool']; ?></td>
    		  <td><?php echo $data['app_school_employees']; ?></td>
    		  <td><?php echo $data['app_school_principal']; ?></td>
    		  <td><?php echo $data['app_principal_birthday']; ?></td>
    		  <td><?php echo $data['app_principal_facebook']; ?></td>
    		  <td><?php echo $data['app_principal_email']; ?></td>
    		  <td><?php echo $data['app_principal_landline']; ?></td>
    		  <td><?php echo $data['app_principal_cellphone']; ?></td>
    		  <td><?php echo $data['app_school_admin']; ?></td>
    		  <td><?php echo $data['app_admin_birthday']; ?></td>
    		  <td><?php echo $data['app_admin_facebook']; ?></td>
    		  <td><?php echo $data['app_admin_email']; ?></td>
    		  <td><?php echo $data['app_admin_landline']; ?></td>
    		  <td><?php echo $data['app_admin_cellphone']; ?></td>
    		  <td><?php echo $data['app_school_sysadmin']; ?></td>
    		  <td><?php echo $data['app_sysadmin_number']; ?></td>
    		  <td><?php echo $data['app_sysadmin_email']; ?></td>
    		  <td><?php echo $data['app_relation_manager']; ?></td>
    		  <td><?php echo $data['app_avail_product']; ?></td>
    		  <td><?php echo $data['app_start_finish']; ?></td>
    		<!--  <td><?php// echo $data['app_school_status']; ?></td> -->
          <td><button type="button" id="<?php echo $data['app_school_id']; ?>" class="btn btn-warning btn-sm detail-siswa" data-toggle="modal" data-target="#modal-update-siswa"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
          <button type="button" id="<?php echo $data['app_school_id']; ?>" class="btn btn-danger btn-sm hapus-siswa"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
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
  $('.newclient').click (function() {
    var SchoolName = $("#SchoolName").val().trim();
    var SchoolAddress = $("#SchoolAddress").val().trim();
    var NumPreSchool = $('#NumPreSchool').val().trim();
    var NumGraSchool = $("#NumGraSchool").val().trim();
    var NumHighSchool = $("#NumHighSchool").val().trim();
    var NumEmployees = $("#NumEmployees").val().trim();
    var SchoolPrincipal = $("#SchoolPrincipal").val().trim();
    var PrincipalBirthday = $("#PrincipalBirthday").val().trim();
  	var PrincipalFacebook = $("#PrincipalFacebook").val().trim();
  	var PrincipalEmail = $("#PrincipalEmail").val().trim();
  	var PrincipalLandline = $("#PrincipalLandline").val().trim();
  	var PrincipalCellphone = $("#PrincipalCellphone").val().trim();
  	var SchoolAdministrator = $("#SchoolAdministrator").val().trim();
  	var AdministratorBirthday = $("#AdministratorBirthday").val().trim();
  	var AdministratorFacebook = $("#AdministratorFacebook").val().trim();
  	var AdministratorEmail = $("#AdministratorEmail").val().trim();
  	var AdministratorLandline = $("#AdministratorLandline").val().trim();
  	var AdministratorCellphone = $("#AdministratorCellphone").val().trim();
  	var SysAdministrator = $("#SysAdministrator").val().trim();
  	var SysContactNumber = $("#SysContactNumber").val().trim();
  	var SysEmailAddress = $("#SysEmailAddress").val().trim();
  	var RelationManager = $("#RelationManager").val().trim();
  	var ProductAvail = $("#ProductAvail").val().trim();
  	var DateStartFinish = $("#DateStartFinish").val().trim();

      $.ajax({
        type: "POST",
        url: "addfile/crud.php?eks=insert",
        data: "SchoolName="+SchoolName+"&SchoolAddress="+SchoolAddress+"&NumPreSchool="+NumPreSchool+"&NumGraSchool="+NumGraSchool+"&NumHighSchool="+NumHighSchool+"&NumEmployees="+NumEmployees+"&SchoolPrincipal="+SchoolPrincipal+"&PrincipalBirthday="+PrincipalBirthday+"&PrincipalFacebook="+PrincipalFacebook+"&PrincipalEmail="+PrincipalEmail+"&PrincipalLandline="+PrincipalLandline+"&PrincipalCellphone="+PrincipalCellphone+"&SchoolAdministrator="+SchoolAdministrator+"&AdministratorBirthday="+AdministratorBirthday+"&AdministratorFacebook="+AdministratorFacebook+"&AdministratorEmail="+AdministratorEmail+"&AdministratorLandline="+AdministratorLandline+"&AdministratorCellphone="+AdministratorCellphone+"&SysAdministrator="+SysAdministrator+"&SysContactNumber="+SysContactNumber+"&SysEmailAddress="+SysEmailAddress+"&RelationManager="+RelationManager+"&ProductAvail="+ProductAvail+"&DateStartFinish="+DateStartFinish,
        success: function (msg) {
        UpdateExternalCustomer();
        clear_siswa_tambah();
        }
      });

  });

  $('.hapus-siswa').click(function() {
    var nis = this.id;
    var conf = confirm("Do you want to delete ? :" +nis);
    if (conf==true) {
        $.ajax({
          type: "POST",
          url: "addfile/crud.php?eks=delete",
          data: "nis="+nis,
          success: function (msg) {
            UpdateExternalCustomer();
          }
        });
    }
  });

  $('.detail-siswa').click( function () {
    var nis = this.id;

    $.ajax({
      type: "POST",
      url: "addfile/crud.php?eks=detail",
      data: "nis="+nis,
      dataType: "json",
      success: function (data) {
        $('#UExternalCustomer').val(data.app_school_id);
        $('#SchoolName1').val(data.app_school_name);
        $('#SchoolAddress1').val(data.app_school_address);
        $('#NumPreSchool1').val(data.app_school_preschool);
        $('#NumGraSchool1').val(data.app_school_gradeschool);
        $('#NumHighSchool1').val(data.app_school_highschool);
        $('#NumEmployees1').val(data.app_school_employees);
        $('#SchoolPrincipal1').val(data.app_school_principal);
        $('#PrincipalBirthday1').val(data.app_principal_birthday);
        $('#PrincipalFacebook1').val(data.app_principal_facebook);
        $('#PrincipalEmail1').val(data.app_principal_email);
        $('#PrincipalLandline1').val(data.app_principal_landline);
        $('#PrincipalCellphone1').val(data.app_principal_cellphone);
        $('#SchoolAdministrator1').val(data.app_school_admin);
        $('#AdministratorBirthday1').val(data.app_admin_birthday);
        $('#AdministratorFacebook1').val(data.app_admin_facebook);
        $('#AdministratorEmail1').val(data.app_admin_email);
        $('#AdministratorLandline1').val(data.app_admin_landline);
        $('#AdministratorCellphone1').val(data.app_admin_cellphone);
        $('#SysAdministrator1').val(data.app_school_sysadmin);
        $('#SysContactNumber1').val(data.app_sysadmin_number);
        $('#SysEmailAddress1').val(data.app_sysadmin_email);
        $('#RelationManager1').val(data.app_relation_manager);
        $('#ProductAvail1').val(data.app_avail_product);
        $('#DateStartFinish1').val(data.app_start_finish);
        $('#modal-update-siswa').modal("show");

      }
    });
  });

  $('.update-siswa').click(function () {
    var nis = $("#UExternalCustomer").val().trim();
    var SchoolName = $("#SchoolName1").val().trim();
    var SchoolAddress = $("#SchoolAddress1").val().trim();
    var NumPreSchool = $("#NumPreSchool1").val().trim();
    var NumGraSchool = $("#NumGraSchool1").val().trim();
    var NumHighSchool = $("#NumHighSchool1").val().trim();
    var NumEmployees = $("#NumEmployees1").val().trim();
    var SchoolPrincipal = $("#SchoolPrincipal1").val().trim();
    var PrincipalBirthday = $("#PrincipalBirthday1").val().trim();
    var PrincipalFacebook = $("#PrincipalFacebook1").val().trim();
    var PrincipalEmail = $("#PrincipalEmail1").val().trim();
    var PrincipalLandline = $("#PrincipalLandline1").val().trim();
    var PrincipalCellphone = $("#PrincipalCellphone1").val().trim();
    var SchoolAdministrator = $("#SchoolAdministrator1").val().trim();
    var AdministratorBirthday = $("#AdministratorBirthday1").val().trim();
    var AdministratorFacebook = $("#AdministratorFacebook1").val().trim();
    var AdministratorEmail = $("#AdministratorEmail1").val().trim();
    var AdministratorLandline = $("#AdministratorLandline1").val().trim();
    var AdministratorCellphone = $("#AdministratorCellphone1").val().trim();
    var SysAdministrator = $("#SysAdministrator1").val().trim();
    var SysContactNumber = $("#SysContactNumber1").val().trim();
    var SysEmailAddress = $("#SysEmailAddress1").val().trim();
    var RelationManager = $("#RelationManager1").val().trim();
    var ProductAvail = $("#ProductAvail1").val().trim();
    var DateStartFinish = $("#DateStartFinish1").val().trim();
    $.ajax({
        type: "POST",
        url: "addfile/crud.php?eks=update",
        data: "nis="+nis+"&SchoolName="+SchoolName+"&SchoolAddress="+SchoolAddress+"&NumPreSchool="+NumPreSchool+"&NumGraSchool="+NumGraSchool+"&NumHighSchool="+NumHighSchool+"&NumEmployees="+NumEmployees+"&SchoolPrincipal="+SchoolPrincipal+"&PrincipalBirthday="+PrincipalBirthday+"&PrincipalFacebook="+PrincipalFacebook+"&PrincipalEmail="+PrincipalEmail+"&PrincipalLandline="+PrincipalLandline+"&PrincipalCellphone="+PrincipalCellphone+"&SchoolAdministrator="+SchoolAdministrator+"&AdministratorBirthday="+AdministratorBirthday+"&AdministratorFacebook="+AdministratorFacebook+"&AdministratorEmail="+AdministratorEmail+"&AdministratorLandline="+AdministratorLandline+"&AdministratorCellphone="+AdministratorCellphone+"&SysAdministrator="+SysAdministrator+"&SysContactNumber="+SysContactNumber+"&SysEmailAddress="+SysEmailAddress+"&RelationManager="+RelationManager+"&ProductAvail="+ProductAvail,
        success: function (msg) {
        UpdateExternalCustomer();
        clear_update_tambah();

        }
    });
  });
$('.data-siswa').DataTable(); //datatables
});
</script>
