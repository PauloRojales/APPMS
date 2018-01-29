
            <?php include "config.php"; ?>
            <?php 
              if(!empty($_GET['type'])) {
              $val = $_GET['type'];
              if($val=='list'){
              if(!empty($_POST['selected'])){

              $var= $_POST['selected'];
              $query = $conn->prepare("SELECT * FROM apptopus_payment WHERE apptopus_payment_id ='$var' && apptopus_payment_status ='uncleared' ");
              $query->execute();
              $query->setFetchMode(PDO::FETCH_ASSOC);
              ob_start();
              while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
              <tr>
                   <td><?php echo $data['apptopus_payment_month']; ?></td>
                   <td><?php echo $data['apptopus_payment_date']; ?></td>
                   <td><?php echo $data['apptopus_payment_checkno']; ?></td>
                   <td><?php echo $data['apptopus_payment_bank']; ?></td>
                   <td><?php echo $data['apptopus_payment_amount']; ?></td>
                   <td><?php echo $data['apptopus_payment_status']; ?></td>
                    <td><!--<button type="button" id="<?php // echo $data['apptopus_payment_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#updatecheck"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> -->
                      <button type="button" id="<?php echo $data['apptopus_payment_id']; ?>" class="btn btn-danger btn-sm deletecheck"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>

                       <button type="button" id="<?php echo $data['apptopus_payment_id']; ?>" class="btn btn-success btn-sm clearedcheck"><span class="glyphicon glyphicon-ok" aria-hidden="true"></button>
                      </td>
              </tr>
              <?php }
              $output=ob_get_contents();
              ob_end_clean();
              $ret = array();
              $ret['html'] = $output;
              header('Content-type: application/json');
              die(json_encode($ret));
              }
            }

             if($val=='paidlist'){

                      $var= $_POST['selected'];           
                      $query = $conn->prepare("SELECT * FROM apptopus_payment WHERE apptopus_payment_id ='$var' && apptopus_payment_status = 'cleared' ");
                      $query->execute();
                      $query->setFetchMode(PDO::FETCH_ASSOC);
                      while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                      <tr>
                           <td><?php echo $data['apptopus_payment_month']; ?></td>
                           <td><?php echo $data['apptopus_payment_date']; ?></td>
                           <td><?php echo $data['apptopus_payment_checkno']; ?></td>
                           <td><?php echo $data['apptopus_payment_bank']; ?></td>
                           <td><?php echo $data['apptopus_payment_amount']; ?></td>
                           <td><?php echo $data['apptopus_payment_status']; ?></td>
                      </tr>
                      <?php }
                          $output=ob_get_contents();
                          ob_end_clean();
                          $ret = array();
                          $ret['html'] = $output;
                          header('Content-type: application/json');
                          die(json_encode($ret));

            }
              die();
            } ?>



            <?php include "modal.php"; ?>
            <div class="box col-md-6 ">
                 <div>
                    <label><h3>Select External Customers</h3></label>
                </div>
              
                    <div class="form-group">
                    <select id="Sid" class="form-control target" >
                    <option selected="selected"></option>
                    <?php
                    include "config.php";
                    $query = $conn->prepare("SELECT app_school_id,app_school_name FROM apptopus_externalcustomers");
                    $query->execute();
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                    <option id="vali" value="<?php echo $data["app_school_id"]; ?>"><?php echo $data["app_school_name"];?></option>
                  <?php  }; ?>
                    </select>
                </div>
                </div>

               <script type="text/javascript">
                 $(document).ready(function() {
                    $("#Sid").change(function(){
                              $.ajax({
                              url: 'addfile/MoneyIn.php?type=list',
                              type: 'POST',
                              data:  { "selected" : $('#Sid').val()},
                              success: function(data){
                                console.log(data.html);
                                $("#paymentdata").html(data.html);
                              }
                          });

                              $.ajax({
                              url: 'addfile/MoneyIn.php?type=paidlist',
                              type: 'POST',
                              data:  { "selected" : $('#Sid').val()},
                              success: function(data){
                                console.log(data.html);
                                $("#paiddata").html(data.html);
                              }
                          });
                    });
                });
               </script>

              <!-- Tab 1 -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Cash Receivable</a></li>
              <li><a href="#tab_2" data-toggle="tab">Cash Receipt</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  <div class="box col-md-6 table-responsive">
                    <div class="box-header with-border">
                                 <div class="pull-right">
                                    <a href="" data-toggle="modal" data-target="#AddCheck" id="<?php echo $data['apptopus_payment_id']; ?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Check </button></a>
                                </div>
                      <h3 class="box-title callout callout-info">Cash Receivable</h3>
                        </div>
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
                        <td><span>₱</span></td>
                        <td></td>
                        <td></td>
                      </tr>
                      </tfoot>
                    </table>
                  </div>

              </div>
              <!-- Tab 1 -->

              <!-- Tab 2 -->
              <div class="tab-pane" id="tab_2">
                          <div class="box col-md-6 table-responsive">
                            <div class="box-header with-border">

                              <h3 class="box-title callout callout-info">Cash Receipt</h3>
                                </div>
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
                                <td><span>₱</span></td>
                                <td></td>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
              </div>

              <!-- Tab 2 -->
            </div>
          </div>      

          <script type="text/javascript">
          $(document).ready(function(){
              // Add new check
              $('#AddCheck').click( function () {
                var nis = this.id;
                $.ajax({
                  type: "POST",
                  url: "addfile/crud3.php?eks=detailcheck",
                  data: "nis="+nis,
                  dataType: "json",
                  success: function (data) {
                    $('#SchoolID').val(data.apptopus_payment_id);
                    $('#SchoolNameID').val(data.app_school_name);
                    $('#PaymentStatus').val('uncleared');
                  }
                });
              });

                $('.deletecheck').click(function() {
                  alert("Working");
                  var nis = this.id;
                  var conf = confirm("Do you want to delete ? " +nis);
                  if (conf==true) {
                      $.ajax({
                        type: "POST",
                        url: "addfile/crud3.php?eks=deletecheck",
                        data: "nis="+nis,
                        success: function (msg) {

                        }
                      });
                  }
                });

                $('.clearedcheck').click(function() {
                  alert("Working");
                  var nis = this.id;
                  var conf = confirm("Do you want to cleared check ? " +nis);
                  if (conf==true) {
                      $.ajax({
                        type: "POST",
                        url: "addfile/crud3.php?eks=cleared",
                        data: "nis="+nis,
                        success: function (msg) {

                        }
                      });
                  }
                });
                  $('.data').DataTable(); //datatables
            });
          </script>    
