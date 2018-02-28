$(document).ready(function(e) {

  view_possible_customer();

});

function view_possible_customer() {
  $.ajax({
    type: "GET",
    url: "addfile/crud_possible_customer.php",
    success: function (data){
      $('.ViewPossibleCustomer').html(data)
    }
  });
}

function clear_data() {
  $("#PCSchoolName").val("");
  $("#PCSchoolAddress").val("");
  $("#PCNumPreSchool").val("");
  $("#PCNumGraSchool").val("");
  $("#PCNumHighSchool").val("");
  $("#PCNumEmployees").val("");
  $("#PCSchoolPrincipal").val("");
  $("#PCPrincipalBirthday").val("");
  $("#PCPrincipalFacebook").val("");
  $("#PCPrincipalEmail").val("");
  $("#PCPrincipalLandline").val("");
  $("#PCPrincipalCellphone").val("");
  $("#PCSchoolAdministrator").val("");
  $("#PCAdministratorBirthday").val("");
  $("#PCAdministratorFacebook").val("");
  $("#PCAdministratorEmail").val("");
  $("#PCAdministratorLandline").val("");
  $("#PCAdministratorCellphone").val("");
  $("#PCSysAdministrator").val("");
  $("#PCSysContactNumber").val("");
  $("#PCSysEmailAddress").val("");
  $("#PCRelationManager").val("");
  $("#PCProductAvail").val("");
  $("#PCDateStartFinish").val("");
}

function clear_update_data() {
  $("#PCSchoolName1").val("");
  $("#PCSchoolAddress1").val("");
  $("#PCNumPreSchool1").val("");
  $("#PCNumGraSchool1").val("");
  $("#PCNumHighSchool1").val("");
  $("#PCNumEmployees1").val("");
  $("#PCSchoolPrincipal1").val("");
  $("#PCPrincipalBirthday1").val("");
  $("#PCPrincipalFacebook1").val("");
  $("#PCPrincipalEmail1").val("");
  $("#PCPrincipalLandline1").val("");
  $("#PCPrincipalCellphone1").val("");
  $("#PCSchoolAdministrator1").val("");
  $("#PCAdministratorBirthday1").val("");
  $("#PCAdministratorFacebook1").val("");
  $("#PCAdministratorEmail1").val("");
  $("#PCAdministratorLandline1").val("");
  $("#PCAdministratorCellphone1").val("");
  $("#PCSysAdministrator1").val("");
  $("#PCSysContactNumber1").val("");
  $("#PCSysEmailAddress1").val("");
  $("#PCRelationManager1").val("");
  $("#PCProductAvail1").val("");
  $("#PCDateStartFinish1").val("");
}