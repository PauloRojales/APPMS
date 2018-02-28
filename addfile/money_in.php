<?php include "modal.php"; ?>
<div class=" form-group col-md-12">
   <label>
      <h4>Select External Customers</h4>
   </label>
   <select id="Sid" class="form-control target">
      <option selected="selected" id="0"> Select </option>
      <?php
         include "config.php";
         $query = $conn->prepare("SELECT app_school_id,app_school_name FROM apptopus_externalcustomers");
         $query->execute();
         $query->setFetchMode(PDO::FETCH_ASSOC);
         while ($data = $query->fetch(PDO::FETCH_ORI_NEXT))
         { ?>
      <option value="<?php echo $data["app_school_id"]; ?>"><?php echo $data["app_school_name"]; ?></option>
      <?php }; ?>
   </select>
</div>
</div>
<!-- Tab 1 -->
<div class="nav-tabs-custom">
   <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_1" data-toggle="tab">Cash Receivable</a></li>
      <li><a href="#tab_2" data-toggle="tab">Cash Receipt</a></li>
      <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
   </ul>
   <div class="tab-content dataa">
      <div class="tab-pane active dat" id="tab_1">
         <div class="box col-md-6 table-responsive">
            <div class="box-header with-border">
               <div class="pull-right">
                  <a href="" data-toggle="modal" data-target="#AddCheck" id="<?php $var ?>"><button type="button" class="btn btn-success btn-sm" id="addcheckbut" disabled="disabled" ><i class="fa fa-plus"></i> Add New Check </button></a>
               </div>
            </div>
            <div id="listeddata">
               <table class="table table-bordered data">
                  <thead>
                     <tr class="success">
                        <th>Month</th>
                        <th>Date</th>
                        <th>Check No.</th>
                        <th>Bank</th>
                        <th>Amount</th>
                        <th style="width: 40px">Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody id="paymentdata">
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr class="callout callout-danger">
                        <td>TOTAL</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="total_uncleared_amount"><span>₱</span></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
      <!-- Tab 1 -->
      <!-- Tab 2 -->
      <div class="tab-pane" id="tab_2">
         <div class="box col-md-6 table-responsive">
            <div class="box-header with-border">
            </div>
            <div class="datalist">
               <table class="table table-bordered data">
                  <thead>
                     <tr class="success">
                        <th>Month</th>
                        <th>Date</th>
                        <th>Check No.</th>
                        <th>Bank</th>
                        <th>Amount</th>
                        <th style="width: 40px">Status</th>
                     </tr>
                  </thead>
                  <tbody id ="paiddata">
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tbody>
                  <tfoot class="callout callout-danger">
                     <tr>
                        <td>TOTAL</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="total_cleared_amount"><span>₱</span></td>
                        <td></td>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
      <!-- Tab 2 -->
   </div>
</div>
</div>
<script type="text/javascript">
   $(document).ready(function() {
       // Add new check
       $("#Sid").change(function() {
           enableStartBtn();
           var nis = this.id;
           $('#AddCheck').click(function() {
               $.ajax({
                   type: "POST",
                   url: "addfile/crud_sql_func.php?eks=detailcheck",
                   data: {
                       "selected": $('#Sid').val()
                   },
                   dataType: "json",
                   success: function(data) {
                       $('#SchoolID').val($('#Sid').val());
                       $('#SchoolName').val(data.app_school_name);
                       $('#PaymentStatus').val('uncleared');
                   }
               });
           });
       });
   
       $('.addnewcheck').click(function() {
           var SchoolID = $("#SchoolID").val().trim();
           var PaymentMonth = $('#PaymentMonth').val().trim();
           var PaymentDate = $("#PaymentDate").val().trim();
           var PaymentCheckNo = $("#PaymentCheckNo").val().trim();
           var PaymentBank = $("#PaymentBank").val().trim();
           var PaymentAmount = $("#PaymentAmount").val().trim();
           var PaymentStatus = $("#PaymentStatus").val().trim();
   
           if (PaymentMonth == "" || PaymentDate == "" || PaymentCheckNo == "" || PaymentBank == "" || PaymentAmount == "") {
   
               swal("You miss input");
           } else $.ajax({
               type: "POST",
               url: "addfile/crud_sql_func.php?eks=addcheck",
               data: "SchoolID=" + SchoolID + "&PaymentMonth=" + PaymentMonth + "&PaymentDate=" + PaymentDate + "&PaymentCheckNo=" + PaymentCheckNo + "&PaymentBank=" + PaymentBank + "&PaymentAmount=" + PaymentAmount + "&PaymentStatus=" + PaymentStatus,
               success: function(msg) {
                   swal("Adding succcess!");
                   money_in_func();
                   clear_data1();
               }
           });
       });
       $("#Sid").change(function() {
           $.ajax({
               url: 'addfile/dataview.php?type=list',
               type: 'POST',
               data: {
                   "selected": $('#Sid').val()
               },
               success: function(data) {
                   //  console.log(data.html);
                   $("#paymentdata").html(data.html);
               }
           });
   
           $.ajax({
               url: 'addfile/dataview.php?type=paidlist',
               type: 'POST',
               data: {
                   "selected": $('#Sid').val()
               },
               success: function(data) {
                   // console.log(data.html);
                   $("#paiddata").html(data.html);
               }
           });
           $.ajax({
               url: 'addfile/dataview.php?type=cleared',
               type: 'POST',
               data: {
                   "selected": $('#Sid').val()
               },
               success: function(data) {
                   console.log(data.html);
                   $("#total_uncleared_amount").html(data.html);
               }
           });
           $.ajax({
               url: 'addfile/dataview.php?type=uncleared',
               type: 'POST',
               data: {
                   "selected": $('#Sid').val()
               },
               success: function(data) {
                   console.log(data.html);
                   $("#total_cleared_amount").html(data.html);
               }
           });
       });
       $('.data').DataTable(); //datatables
   });
</script>