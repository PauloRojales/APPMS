            <?php include "modal.php"; ?>
            <div class="form-group">
                  <label><h3>Select External Customers</h3></label>
                    <form action ="#" method="POST">
                    <select id ="SchoolNumber" class="form-control">
                    <?php
                    include "config.php";
                    $query = $conn->prepare("SELECT app_school_id,app_school_name FROM apptopus_externalcustomers");
                    $query->execute();
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                    <option value="<?php echo $data["app_school_id"]; ?>"><?php 
                    $var=$_POST['SchoolNumber'];
                    echo $var;


                    echo $data["app_school_id"]; echo $data["app_school_name"];?></option>
                  <?php  }; ?>
                    </select>
                    <form>
                </div>


                        <div class="form-group">
                         <div class="col-md-6">
                          <div class="box col-md-6 table-responsive">
                            <div class="box-header with-border">
                              <h3 class="box-title">Cash Receivable</h3>
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
                      $query = $conn->prepare("SELECT apptopus_payment_month,apptopus_payment_date,apptopus_payment_checkno,apptopus_payment_bank,apptopus_payment_amount,apptopus_payment_status FROM apptopus_payment join  apptopus_externalcustomers WHERE apptopus_externalcustomers.app_school_id = apptopus_payment.apptopus_payment_id ");
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
                      </div>


                <div class="form-group">
                 <div class="col-md-6">
                  <div class="box col-md-6 table-responsive">
                    <div class="box-header with-border">
                      <div class="pull-right">
                          <a href="" data-toggle="modal" data-target="#AddCheck"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Check </button></a>
                      </div>
                      <h3 class="box-title">Cash Receipt</h3>
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
              $query = $conn->prepare("SELECT * FROM apptopus_payment");
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
                      </td>
              </tr>
              <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>      


              <script type="text/javascript">
                $(document).ready(function(e) {
                  $('.data').DataTable(); //datatables
});
              </script>      