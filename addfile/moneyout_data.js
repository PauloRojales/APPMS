$(document).ready(function(e) {
     list_of_voucher();
  $("#Vouchers").on("click", function() {
    budget_outflow();
  });
  $("#companybudget").on("click", function() {
    list_of_budget();
  });
  $("#rebalance").on("click", function() {
    remaining_balance();
  });
});

function budget_outflow() {
  $.ajax({
    type: "GET",
    url: "addfile/money_out_addnew.php",
    success: function (data){
      $('.budget_outflow').html(data)
    }
  });
}

function list_of_voucher() {
  $.ajax({
    type: "GET",
    url: "addfile/money_out_list.php",
    success: function (data){
      $('.list_of_vouchers').html(data)
    }
  });
}

function list_of_budget() {
  $.ajax({
    type: "GET",
    url: "addfile/money_out_companybudget.php",
    success: function (data){
      $('.list_of_budget').html(data)
    }
  });
}

function remaining_balance() {
  $.ajax({
    type: "GET",
    url: "addfile/money_out_balance.php",
    success: function (data){
      $('.remain_balance').html(data)
    }
  });
}
function clear_updated_data() {
  $("#voucher_id_update").val("");
  $("#voucher_date_update").val("");
  $("#voucher_particular_update").val("");
  $("#voucher_amount_update").val("");
  $("#voucher_chargeto_update").val("");
}