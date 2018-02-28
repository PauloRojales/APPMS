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
                  <th>Date Start</th>
                  <th>Date Finish</th>
                  <th>Status</th>
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
                  <td><?php echo"<a href='addfile/solo_page/solo_page.php?id=".$data['app_school_id']."'>".$data['app_school_name'].'</a>'; ?></td>
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
                  <td><?php echo $data['app_start']; ?></td>
                  <td><?php echo $data['app_finish']; ?></td>
                  <td><?php echo $data['app_school_status']; ?></td>
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
     //DELETE DATA
     $('.hapus-siswa').on("click",function() {
       var nis = this.id;
        swal({
           title: "Delete this data?",
           type: "info",
           showCancelButton: true,
           closeOnConfirm: false,
           showLoaderOnConfirm: true
             }, 
   function () {
      $.ajax({
             type: "POST",
             url: "addfile/crud_sql_func.php?eks=delete",
             data: "nis="+nis,
             success: function (msg) {
             update_external_customer();
            swal("Delete success!");
             }
           });
         });  
     });
   
     //FETCH DATA
     $('.detail-siswa').click( function () {
           var nis = this.id;
           $.ajax({
           type: "POST",
           url: "addfile/crud_sql_func.php?eks=detail",
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
             $('#DateStart1').val(data.app_start);
             $('#DateFinish1').val(data.app_finish);
             $('#optionsRadios1').val(data.app_school_status);
             $('#modal-update-siswa').modal("show");
         }
       });
     });
   
     //UPDATE DATA
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
       var DateStart = $("#DateStart1").val().trim();
       var DateFinish = $("#DateFinish1").val().trim();
       var Status = $("#optionsRadios1").val().trim();
       swal({
       title: "Are you sure?",
       text: "Submit to update data",
       type: "warning",
       showCancelButton: true,
       closeOnConfirm: false,
       showLoaderOnConfirm: true
           }, 
       function () {
       $.ajax({
               type: "POST",
               url: "addfile/crud_sql_func.php?eks=update",
               data: "nis="+nis+"&SchoolName="+SchoolName+"&SchoolAddress="+SchoolAddress+"&NumPreSchool="+NumPreSchool+"&NumGraSchool="+NumGraSchool+"&NumHighSchool="+NumHighSchool+"&NumEmployees="+NumEmployees+"&SchoolPrincipal="+SchoolPrincipal+"&PrincipalBirthday="+PrincipalBirthday+"&PrincipalFacebook="+PrincipalFacebook+"&PrincipalEmail="+PrincipalEmail+"&PrincipalLandline="+PrincipalLandline+"&PrincipalCellphone="+PrincipalCellphone+"&SchoolAdministrator="+SchoolAdministrator+"&AdministratorBirthday="+AdministratorBirthday+"&AdministratorFacebook="+AdministratorFacebook+"&AdministratorEmail="+AdministratorEmail+"&AdministratorLandline="+AdministratorLandline+"&AdministratorCellphone="+AdministratorCellphone+"&SysAdministrator="+SysAdministrator+"&SysContactNumber="+SysContactNumber+"&SysEmailAddress="+SysEmailAddress+"&RelationManager="+RelationManager+"&ProductAvail="+ProductAvail+"&DateStart="+DateStart+"&DateFinish="+DateFinish+"&Status="+Status,
                 success: function (msg) {
                 update_external_customer();
                 clear_update_data();
                swal("Update success!");
                 }
             });
         });
     });

   $('.data').DataTable(); //datatables
   });
</script>