<?php include "config.php"; ?>
                          <div class="box col-md-6 table-responsive">
                            <div class="box-header with-border">

                              <h3 class="box-title callout callout-info">Clients Pay By Month</h3>
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

            <script type="text/javascript">
            $(document).ready(function(e) {
                  $('.data').DataTable(); //datatables
});
          </script>     