<?php include "config.php";?>
<div class="col-md-12">
   <div class="form-group col-md-12">
      <label>Date range:</label>
      <div class="input-group">
         <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
         </div>
         <input class="form-control pull-right" id="date_budget" type="text">
      </div>
   </div>
   <div class="form-group col-md-12">
      <div class='box table-responsive'>
         <div class='box-header'>
            <h3 class='box-title'><i class='fa fa-money'></i> Company Budget </h3>
         </div>
         <table class='table data'>
            <thead>
               <tr class='success'>
                  <th>Account ID</th>
                  <th>Account Name</th>
                  <th>Budget</th>
               </tr>
            </thead>
            <tbody id="budget">
            </tbody>
            <tfoot class='callout callout-danger'>
               <tr>
                  <td>TOTAL</td>
                  <td></td>
                  <td id="monthly_budget"><span>₱</span></td>

               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function(e) {
        //Date range picker
        $('#date_budget').daterangepicker();
        $('.applyBtn').click(function() {
         var startDate = $('#date_budget').data('daterangepicker').startDate.format('YYYY-MM-DD'); 
         var endDate = $('#date_budget').data('daterangepicker').endDate.format('YYYY-MM-DD'); 
                   $.ajax({
                       type: "POST",
                       url: "addfile/dataview.php?type=get_date_budget",
                       data: "startDate=" + startDate + "&endDate=" + endDate ,
                       success: function(data) {
                        $("#budget").html(data.html);
                        console.log(data.html);
                       }
                   });

              $.ajax({
                  url: 'addfile/dataview.php?type=monthly_budget',
                  type: 'POST',
                  success: function(data) {
                      console.log(data.html);
                      $("#monthly_budget").html(data.html);
                  }
              });
            });
          });
</script>