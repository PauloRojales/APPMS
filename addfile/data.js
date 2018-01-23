$(document).ready(function(e) {

  UpdateExternalCustomer();

});
function UpdateExternalCustomer() {
  $.ajax({
    type: "GET",
    url: "addfile/CRUDExternalCustomers.php",
    success: function (data){
      $('.ViewExternalCustomer').html(data)
    }
  });

  $.ajax({
      type: "GET",
      url: "addfile/widgets/TotalCountOfExternalCustomer.php",
      success: function (data) {
        $('.TotalExternalCustomer').html(data)
        var sas = val(data);
      }
  });
  $.ajax({
      type: "GET",
      url: "addfile/widgets/TotalCountOfInternalCustomer.php",
      success: function (data) {
        $('.TotalInternalCustomer').html(data)
      }
  });
}

function clear_siswa_tambah() {
  $("#SchoolName").val("");
  $("#SchoolAddress").val("");
  $("#NumPreSchool").val("");
  $("#NumGraSchool").val("");
  $("#NumHighSchool").val("");
  $("#NumEmployees").val("");
  $("#SchoolPrincipal").val("");
  $("#PrincipalBirthday").val("");
  $("#PrincipalFacebook").val("");
  $("#PrincipalEmail").val("");
  $("#PrincipalLandline").val("");
  $("#PrincipalCellphone").val("");
  $("#SchoolAdministrator").val("");
  $("#AdministratorBirthday").val("");
  $("#AdministratorFacebook").val("");
  $("#AdministratorEmail").val("");
  $("#AdministratorLandline").val("");
  $("#AdministratorCellphone").val("");
  $("#SysAdministrator").val("");
  $("#SysContactNumber").val("");
  $("#SysEmailAddress").val("");
  $("#RelationManager").val("");
  $("#ProductAvail").val("");
  $("#DateStartFinish").val("");
}
function clear_update_tambah() {
  $("#SchoolName1").val("");
  $("#SchoolAddress1").val("");
  $("#NumPreSchool1").val("");
  $("#NumGraSchool1").val("");
  $("#NumHighSchool1").val("");
  $("#NumEmployees1").val("");
  $("#SchoolPrincipal1").val("");
  $("#PrincipalBirthday1").val("");
  $("#PrincipalFacebook1").val("");
  $("#PrincipalEmail1").val("");
  $("#PrincipalLandline1").val("");
  $("#PrincipalCellphone1").val("");
  $("#SchoolAdministrator1").val("");
  $("#AdministratorBirthday1").val("");
  $("#AdministratorFacebook1").val("");
  $("#AdministratorEmail1").val("");
  $("#AdministratorLandline1").val("");
  $("#AdministratorCellphone1").val("");
  $("#SysAdministrator1").val("");
  $("#SysContactNumber1").val("");
  $("#SysEmailAddress1").val("");
  $("#RelationManager1").val("");
  $("#ProductAvail1").val("");
  $("#DateStartFinish1").val("");
}