$(document).ready(function(e) { 

  InternalCustomer();

});
  function  InternalCustomer() {
  $.ajax({
    type: "GET",
    url: "addfile/CRUDInternalCustomers.php",
    success: function (data){
      $('.ViewInternalCustomer').html(data)
    }
  });
}

function clear_data() {
  $("#Fname").val("");
  $("#Mname").val("");
  $("#Lname").val("");

}
function clear_updated_data() {
  $("#UFname").val("");
  $("#UMname").val("");
  $("#ULname").val("");
}