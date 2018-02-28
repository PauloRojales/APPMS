$(document).ready(function(e) { 

  //client_details_func();
  $("#contact_per").on("click", function() {

  client_contact_func();
  });

  $("#hardware_det").on("click", function() {
 // client_hardwares_func();
  });

  });

function client_details_func() {
  $.ajax({
  type: "GET",
  url: "solo_client_details.php",
  success: function (data){
  $('.client_details').html(data)
    }
  });
}

function client_contact_func() {
   $.ajax({
  type: "GET",
  url: "solo_client_page.php",
  success: function (data){
  $('.client_contacts').html(data)
    }
  });
}

 function client_hardwares_func() {
   $.ajax({
  type: "GET",
  url: "solo_client_page.php",
  success: function (data){
  $('.client_hardwares').html(data)
    }
  });  
}