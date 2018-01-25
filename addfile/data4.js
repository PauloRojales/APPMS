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

$(document).ready(function(e) {

  ClientToPay();

});
function ClientToPay() {
  $.ajax({
    type: "GET",
    url: "addfile/ClientToPay.php",
    success: function (data){
      $('.ClientToPay').html(data)
    }
  });
}
