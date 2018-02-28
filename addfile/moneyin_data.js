    $(document).ready(function(e) {

        money_in_func();

    });

    function money_in_func() {
        $.ajax({
            type: "GET",
            url: "addfile/money_in.php",
            success: function(data) {
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
            url: "addfile/moneyin_clienttopay.php",
            success: function(data) {
                $('.ClientToPay').html(data)
            }
        });
    }

    function clear_data1() {
        $("#SchoolID").val("");
        $("#PaymentMonth").val("");
        $("#PaymentDate").val("");
        $("#PaymentBank").val("");
        $("#PaymentCheckNo").val("");
        $("#PaymentAmount").val("");
        $("#PaymentDate").val("");
        $("#PaymentStatus").val("");

    }

    function enableStartBtn() {
        $('#addcheckbut').prop('disabled', false); //<----to remove  disable attr of the button
    }

    function disableStartBtn() {
        $('#addcheckbut').prop('disabled', true); //<----to disable attr of the button
    }