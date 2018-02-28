<?php include "config.php";?>
<div class="col-md-12">
   <div class="form-group col-md-12">
      <label>Date range:</label>
      <div class="input-group">
         <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
         </div>
         <input class="form-control pull-right" id="date_vouchers" type="text">
      </div>
   </div>
   <div class="form-group col-md-12">
      <div class='box table-responsive'>
         <div class='box-header'>
            <h3 class='box-title'><i class='fa fa-money'></i> Company Expenses</h3>
         </div>
         <table class='table data'>
            <thead>
               <tr class='success'>
                  <th>Date</th>
                  <th>Particular</th>
                  <th>Amount</th>
                  <th>Charge to</th>
               </tr>
            </thead>
            <tbody id="query_date">
            </tbody>
            <tfoot class='callout callout-danger'>
               <tr>
                  <td>TOTAL</td>
                  <td></td>
                  <td id="monthly_pay"><span>₱</span></td>
                  <td></td>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function(e) {
        //Date range picker
        $('#date_vouchers').daterangepicker();
        $('.applyBtn').click(function() {
         var startDate = $('#date_vouchers').data('daterangepicker').startDate.format('YYYY-MM-DD'); 
         var endDate = $('#date_vouchers').data('daterangepicker').endDate.format('YYYY-MM-DD'); 
                   $.ajax({
                       type: "POST",
                       url: "addfile/dataview.php?type=get_date",
                       data: "startDate=" + startDate + "&endDate=" + endDate ,
                       success: function(data) {
                        $("#query_date").html(data.html);
                        console.log(data.html);
                       }
                   });
                 $.ajax({
                     url: 'addfile/dataview.php?type=monthly_expenses',
                     type: 'POST',
                     success: function(data) {
                         console.log(data.html);
                         $("#monthly_pay").html(data.html);
                     }
                 });
                });
          });
</script>