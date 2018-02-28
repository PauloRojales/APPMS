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
      url: "addfile/widgets/TotalCountOfPossibleCustomer.php",
      success: function (data) {
        $('.TotalPossibleCustomer').html(data)
      }
  });

  $.ajax({
      type: "GET",
      url: "addfile/widgets/TotalCountOfInternalCustomer.php",
      success: function (data) {
        $('.TotalInternalCustomer').html(data)
      }
  });