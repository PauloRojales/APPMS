            <?php include "modal.php"; ?>
            <div class="box col-md-6 ">
                 <div>
                    <label><h3>Select External Customers</h3></label>
                </div>
              
            <div class="form-group">
                    <select id="Sid" class="form-control target " onchange="pos()">
                      <option selected="selected"></option>
                    <?php
                    include "config.php";
                    $query = $conn->prepare("SELECT app_school_id,app_school_name FROM apptopus_externalcustomers");
                    $query->execute();
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                    <option value="<?php echo $data["app_school_id"]; ?>"><?php 
                    echo $data["app_school_id"]; echo $data["app_school_name"];?></option>
                  <?php  }; ?>
                    </select>
                </div>
                </div>
      <?php $val =$_POST['val']; echo $val; ?>


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
                                    <a href="" data-toggle="modal" data-target="#AddCheck"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Check </button></a>
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
                      <tbody>
              <?php
              $query = $conn->prepare("SELECT * FROM apptopus_payment WHERE apptopus_payment_id ='$val'");
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
                    <td><button type="button" id="<?php echo $data['apptopus_payment_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#Update-ViewInternalCustomer"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> 
                      <button type="button" id="<?php echo $data['apptopus_payment_id']; ?>" class="btn btn-danger btn-sm DeleteInternalCustomer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>

                       <button type="button" id="<?php echo $data['apptopus_payment_id']; ?>" class="btn btn-success btn-sm ClearedCustomer"><span class="glyphicon glyphicon-ok" aria-hidden="true"></button>
                      </td>
              </tr>
              <?php } ?>
                      </tbody>
                    </table>
                  </div>

 
              </div>
              <!-- /.tab-pane -->
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
                              <tbody>
                      <?php
                      $query = $conn->prepare("SELECT * FROM apptopus_payment WHERE apptopus_payment_id = '' ");
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
                      <?php } ?>
                              </tbody>
                            </table>
                          </div>
              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>      

          <script type="text/javascript">
          $(document).ready(function(){
       //     var selectedValue=$('#SchoolNumber').children(":selected").val();
       //     console.log(selectedValue);


       //    var val= $('#Sid option:selected').val();
        //   console.log(val);

            $('#Sid').on('change', function() {
                  var val= $(this).val();
                  console.log(val);
                    });

                  $('.data').DataTable(); //datatables
            });
          </script>    

          <script src="addfile/data4.js"></script>  