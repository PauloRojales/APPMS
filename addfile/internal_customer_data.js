$(document).ready(function(e) { 

  internal_customer_func();

  });
function internal_customer_func() {
  $.ajax({
  type: "GET",
  url: "addfile/crud_internal_customer.php",
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