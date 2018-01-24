$(document).ready(function(e) {

  MoneyINfunc();

});
function MoneyINfunc() {
  $.ajax({
    type: "GET",
    url: "addfile/MoneyIn.php",
    success: function (data){
      $('.MoneyInFunc').html(data)
    }
  });
}