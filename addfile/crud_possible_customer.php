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
                  <th>Date Finish</th>
                  <th>Date Finish</th>
                  <!--  <th>Status</th> -->
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  $query = $conn->prepare("SELECT * FROM apptopus_possiblecustomers");
                  $query->execute();
                  $query->setFetchMode(PDO::FETCH_ASSOC);
                  while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
               <tr>
                  <td><?php echo $data['app_possible_customer_id']; ?></td>
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
                  <td><?php echo $data['app_start']; ?></td>
                  <td><?php echo $data['app_finish']; ?></td>
                  <!--  <td><?php// echo $data['app_school_status']; ?></td> -->
                  <td>
                     <button type="button" id="<?php echo $data['app_possible_customer_id']; ?>" class="btn btn-warning btn-sm upposcus" data-toggle="modal" data-target="#UpdatePossibleCustomer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                     <button type="button" id="<?php echo $data['app_possible_customer_id']; ?>" class="btn btn-success btn-sm clearedcheck"><span class="glyphicon glyphicon-ok" aria-hidden="true"></button>
                     <!--<button type="button" id="<?php //echo $data['app_possible_customer_id']; ?>" class="btn btn-danger btn-sm delposcus"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>-->
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
   $('.newposclient').click (function() {
      var SchoolName = $("#PCSchoolName").val().trim();
      var SchoolAddress = $("#PCSchoolAddress").val().trim();
      var NumPreSchool = $('#PCNumPreSchool').val().trim();
      var NumGraSchool = $("#PCNumGraSchool").val().trim();
      var NumHighSchool = $("#PCNumHighSchool").val().trim();
      var NumEmployees = $("#PCNumEmployees").val().trim();
      var SchoolPrincipal = $("#PCSchoolPrincipal").val().trim();
      var PrincipalBirthday = $("#PCPrincipalBirthday").val().trim();
      var PrincipalFacebook = $("#PCPrincipalFacebook").val().trim();
      var PrincipalEmail = $("#PCPrincipalEmail").val().trim();
      var PrincipalLandline = $("#PCPrincipalLandline").val().trim();
      var PrincipalCellphone = $("#PCPrincipalCellphone").val().trim();
      var SchoolAdministrator = $("#PCSchoolAdministrator").val().trim();
      var AdministratorBirthday = $("#PCAdministratorBirthday").val().trim();
      var AdministratorFacebook = $("#PCAdministratorFacebook").val().trim();
      var AdministratorEmail = $("#PCAdministratorEmail").val().trim();
      var AdministratorLandline = $("#PCAdministratorLandline").val().trim();
      var AdministratorCellphone = $("#PCAdministratorCellphone").val().trim();
      var SysAdministrator = $("#PCSysAdministrator").val().trim();
      var SysContactNumber = $("#PCSysContactNumber").val().trim();
      var SysEmailAddress = $("#PCSysEmailAddress").val().trim();
      var RelationManager = $("#PCRelationManager").val().trim();
      var ProductAvail = $("#PCProductAvail").val().trim();
      var DateStart = $("#PCDateFinish").val().trim();
      var DateFinish = $("#PCDateStart").val().trim();
   
     if(SchoolName =="" || SchoolAddress =="" || NumPreSchool =="" || NumGraSchool=="" || NumHighSchool=="" || NumEmployees=="" || SchoolPrincipal==""|| PrincipalBirthday=="" || PrincipalBirthday=="" || PrincipalFacebook=="" || PrincipalEmail=="" || PrincipalLandline=="" || PrincipalCellphone=="" || SchoolAdministrator=="" || AdministratorBirthday=="" || AdministratorFacebook=="" || AdministratorEmail=="" || AdministratorLandline=="" || AdministratorCellphone=="" ||SysAdministrator=="" || SysContactNumber=="" || SysEmailAddress=="" || RelationManager=="" || ProductAvail=="" || DateStart=="" || DateFinish =="") {
   
     swal("Incomplete Details");
     }
     else swal({
     title: "Are you sure?",
     text: "Submit to save data",
     type: "info",
     showCancelButton: true,
     closeOnConfirm: false,
     showLoaderOnConfirm: true
     }, 
     function () {
     $.ajax({
     type: "POST",
     url: "addfile/crud_sql_func.php?eks=insertposcus",
     data: "SchoolName="+SchoolName+"&SchoolAddress="+SchoolAddress+"&NumPreSchool="+NumPreSchool+"&NumGraSchool="+NumGraSchool+"&NumHighSchool="+NumHighSchool+"&NumEmployees="+NumEmployees+"&SchoolPrincipal="+SchoolPrincipal+"&PrincipalBirthday="+PrincipalBirthday+"&PrincipalFacebook="+PrincipalFacebook+"&PrincipalEmail="+PrincipalEmail+"&PrincipalLandline="+PrincipalLandline+"&PrincipalCellphone="+PrincipalCellphone+"&SchoolAdministrator="+SchoolAdministrator+"&AdministratorBirthday="+AdministratorBirthday+"&AdministratorFacebook="+AdministratorFacebook+"&AdministratorEmail="+AdministratorEmail+"&AdministratorLandline="+AdministratorLandline+"&AdministratorCellphone="+AdministratorCellphone+"&SysAdministrator="+SysAdministrator+"&SysContactNumber="+SysContactNumber+"&SysEmailAddress="+SysEmailAddress+"&RelationManager="+RelationManager+"&ProductAvail="+ProductAvail+"&DateStart="+DateStart+"&DateFinish="+DateFinish,
       success: function (msg) {
       view_possible_customer();
       clear_data();
     swal("Adding success!");
         }
       });
     });
   });
   
   $('.delposcus').click(function() {
   
   var nis = this.id;
   
   swal({
     title: "Are you sure you want to delete ?",
     text: "Submit to run ajax request",
     type: "info",
     showCancelButton: true,
     closeOnConfirm: false,
     showLoaderOnConfirm: true
          },
    function () {
        $.ajax({
         type: "POST",
         url: "addfile/crud_sql_func.php?eks=deleteposcus",
         data: "nis="+nis,
         success: function (msg) {
         view_possible_customer();
         swal("Delete success!");
         }
       });
   });
   
   
   });
   
   $('.upposcus').click( function () {
   var nis = this.id;
   
   $.ajax({
     type: "POST",
     url: "addfile/crud_sql_func.php?eks=detailposcus",
     data: "nis="+nis,
     dataType: "json",
     success: function (data) {
     $('#PCUExternalCustomer').val(data.app_possible_customer_id);
     $('#PCSchoolName1').val(data.app_school_name);
     $('#PCSchoolAddress1').val(data.app_school_address);
     $('#PCNumPreSchool1').val(data.app_school_preschool);
     $('#PCNumGraSchool1').val(data.app_school_gradeschool);
     $('#PCNumHighSchool1').val(data.app_school_highschool);
     $('#PCNumEmployees1').val(data.app_school_employees);
     $('#PCSchoolPrincipal1').val(data.app_school_principal);
     $('#PCPrincipalBirthday1').val(data.app_principal_birthday);
     $('#PCPrincipalFacebook1').val(data.app_principal_facebook);
     $('#PCPrincipalEmail1').val(data.app_principal_email);
     $('#PCPrincipalLandline1').val(data.app_principal_landline);
     $('#PCPrincipalCellphone1').val(data.app_principal_cellphone);
     $('#PCSchoolAdministrator1').val(data.app_school_admin);
     $('#PCAdministratorBirthday1').val(data.app_admin_birthday);
     $('#PCAdministratorFacebook1').val(data.app_admin_facebook);
     $('#PCAdministratorEmail1').val(data.app_admin_email);
     $('#PCAdministratorLandline1').val(data.app_admin_landline);
     $('#PCAdministratorCellphone1').val(data.app_admin_cellphone);
     $('#PCSysAdministrator1').val(data.app_school_sysadmin);
     $('#PCSysContactNumber1').val(data.app_sysadmin_number);
     $('#PCSysEmailAddress1').val(data.app_sysadmin_email);
     $('#PCRelationManager1').val(data.app_relation_manager);
     $('#PCProductAvail1').val(data.app_avail_product);
     $('#PCDateStart1').val(data.app_start);
     $('#PCDateFinish1').val(data.app_finish);
     $('#possiblecus').modal("show");
   
   }
   });
   });
   
   $('.updatepos').click(function () {
     var nis = $("#PCUExternalCustomer").val().trim();
     var SchoolName = $("#PCSchoolName1").val().trim();
     var SchoolAddress = $("#PCSchoolAddress1").val().trim();
     var NumPreSchool = $("#PCNumPreSchool1").val().trim();
     var NumGraSchool = $("#PCNumGraSchool1").val().trim();
     var NumHighSchool = $("#PCNumHighSchool1").val().trim();
     var NumEmployees = $("#PCNumEmployees1").val().trim();
     var SchoolPrincipal = $("#PCSchoolPrincipal1").val().trim();
     var PrincipalBirthday = $("#PCPrincipalBirthday1").val().trim();
     var PrincipalFacebook = $("#PCPrincipalFacebook1").val().trim();
     var PrincipalEmail = $("#PCPrincipalEmail1").val().trim();
     var PrincipalLandline = $("#PCPrincipalLandline1").val().trim();
     var PrincipalCellphone = $("#PCPrincipalCellphone1").val().trim();
     var SchoolAdministrator = $("#PCSchoolAdministrator1").val().trim();
     var AdministratorBirthday = $("#PCAdministratorBirthday1").val().trim();
     var AdministratorFacebook = $("#PCAdministratorFacebook1").val().trim();
     var AdministratorEmail = $("#PCAdministratorEmail1").val().trim();
     var AdministratorLandline = $("#PCAdministratorLandline1").val().trim();
     var AdministratorCellphone = $("#PCAdministratorCellphone1").val().trim();
     var SysAdministrator = $("#PCSysAdministrator1").val().trim();
     var SysContactNumber = $("#PCSysContactNumber1").val().trim();
     var SysEmailAddress = $("#PCSysEmailAddress1").val().trim();
     var RelationManager = $("#PCRelationManager1").val().trim();
     var ProductAvail = $("#PCProductAvail1").val().trim();
     var DateStart = $("#PCDateStart1").val().trim();
     var DateFinish = $("#PCDateFinish1").val().trim();
   
   
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
     url: "addfile/crud_sql_func.php?eks=updateposcus",
     data: "nis="+nis+"&SchoolName="+SchoolName+"&SchoolAddress="+SchoolAddress+"&NumPreSchool="+NumPreSchool+"&NumGraSchool="+NumGraSchool+"&NumHighSchool="+NumHighSchool+"&NumEmployees="+NumEmployees+"&SchoolPrincipal="+SchoolPrincipal+"&PrincipalBirthday="+PrincipalBirthday+"&PrincipalFacebook="+PrincipalFacebook+"&PrincipalEmail="+PrincipalEmail+"&PrincipalLandline="+PrincipalLandline+"&PrincipalCellphone="+PrincipalCellphone+"&SchoolAdministrator="+SchoolAdministrator+"&AdministratorBirthday="+AdministratorBirthday+"&AdministratorFacebook="+AdministratorFacebook+"&AdministratorEmail="+AdministratorEmail+"&AdministratorLandline="+AdministratorLandline+"&AdministratorCellphone="+AdministratorCellphone+"&SysAdministrator="+SysAdministrator+"&SysContactNumber="+SysContactNumber+"&SysEmailAddress="+SysEmailAddress+"&RelationManager="+RelationManager+"&ProductAvail="+ProductAvail+"&DateStart="+DateStart+"&DateFinish="+DateFinish,
       success: function (msg) {
       view_possible_customer();
       clear_update_data();
      swal("Update success!");
     }
   });
   });
   });
   
   
       $('.clearedcheck').click (function() {
       var nis = this.id;
       swal({
         title: "Are you sure you want to clear this customer",
         type: "info",
         showCancelButton: true,
         closeOnConfirm: false,
         showLoaderOnConfirm: true
              },
         function () {
            $.ajax({
             type: "POST",
             url: "addfile/crud_sql_func.php?eks=clearedposcus",
             data: "nis="+nis,
             success: function (msg) {
             view_possible_customer();
             swal("Client Cleared!");
             }
           });
       });
     });
   
   $('.data').DataTable(); //datatables
   });
</script>