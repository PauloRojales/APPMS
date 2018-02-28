$(document).ready(function(e) { 

  add_product_func();

  });
function add_product_func() {
  $.ajax({
  type: "GET",
  url: "addfile/crud_addproduct.php",
  success: function (data){
  $('.view_products').html(data)
    }
  });
}

function clear_data() {
  $("#Package_name").val("");

}
function clear_updated_data() {

}