<?php include "config.php"; ?>
<?php 
   //MONEY IN QUERY CHECKS
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
   <td>
      <!--<button type="button" id="<?php // echo $data['apptopus_payment_id']; ?>" class="btn btn-warning btn-sm DetailIinternalCustomer" data-toggle="modal" data-target="#updatecheck"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button> -->
      <button type="button" id="<?php echo $data['app_check_id']; ?>" class="btn btn-danger btn-sm deletecheck"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
      <button type="button" id="<?php echo $data['app_check_id']; ?>" class="btn btn-success btn-sm clearedcheck"><span class="glyphicon glyphicon-ok" aria-hidden="true"></button>
   </td>
</tr>
<?php } ?>
<script type="text/javascript">
   $('.deletecheck').on("click",function() {
     var nis = this.id;
     var conf = confirm("Do you want to delete ? " +nis);
     if (conf==true) {
         $.ajax({
           type: "POST",
           url: "addfile/crud_sql_func.php?eks=deletechecks",
           data: "nis="+nis,
           success: function (msg) {
   
           }
         });
     }
   });
   
   $('.clearedcheck').click(function() {
     var nis = this.id;
     var conf = confirm("Do you want to cleared check ? " +nis);
     if (conf==true) {
         $.ajax({
           type: "POST",
           url: "addfile/crud_sql_func.php?eks=clearedcheck",
           data: "nis="+nis,
           success: function (msg) {
   
           }
         });
     }
   });
</script>
<?php $output=ob_get_contents();
   ob_end_clean();
   $ret = array();
   $ret['html'] = $output;
   header('Content-type: application/json');
   die(json_encode($ret));
   }
   }
   //MONEY IN QUERY CLEARED CHECKS
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
   //MONEY IN QUERY UNCLEARED CHECKS
   if($val == 'cleared')
   {
     $var= $_POST['selected'];
   
     $stmt = $conn->prepare("SELECT SUM(apptopus_payment_amount) AS value_sum FROM apptopus_payment WHERE apptopus_payment_id= '$var' &&   apptopus_payment_status='uncleared'");
           $stmt->execute();
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $output= '<span>₱</span> '.$row['value_sum'];
           $ret = array();
           $ret['html'] = $output;
           header('Content-type: application/json');
           die(json_encode($ret));                   
   }
   if($val == 'uncleared')
   {
     $var= $_POST['selected'];
   
     $stmt = $conn->prepare("SELECT SUM(apptopus_payment_amount) AS value_sum FROM apptopus_payment WHERE apptopus_payment_id= '$var' &&   apptopus_payment_status='cleared'");
           $stmt->execute();
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $output= '<span>₱</span> '.$row['value_sum'];
           $ret = array();
           $ret['html'] = $output;
           header('Content-type: application/json');
           die(json_encode($ret));                   
   }
   
   //MONEY OUT QUERY TOTAL AMOUNT
   if($val == 'totalamount')
   {
   
     $stmt = $conn->prepare("SELECT SUM(apptopus_amount_vouchers) AS value_sum FROM app_vouchers");
           $stmt->execute();
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
           $output= '<span>₱</span> '.$row['value_sum'];
           $ret = array();
           $ret['html'] = $output;
           header('Content-type: application/json');
           die(json_encode($ret));                   
   }
   
   if($val == 'totalvariance')
   {
   
     $stmt = $conn->prepare("SELECT (apptopus_amount_vouchers)-(apptopus_budget_vouchers ) AS value_sum FROM app_vouchers; INSERT INTO app_vouchers (apptopus_varamount_vouchers)VALUES (value_sum)");
           $stmt->execute();            
   }

    if($val=='get_date'){
    $start_date= $_POST['startDate'];
    $end_date= $_POST['endDate'];
    $query = $conn->prepare("SELECT * FROM app_vouchers WHERE apptopus_date_vouchers BETWEEN '$start_date' AND '$end_date'");
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    ob_start();
    while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
    <tr>
       <td><?php echo $data['apptopus_date_vouchers']; ?></td>
       <td><?php echo $data['apptopus_particular_vouchers']; ?></td>
       <td><?php echo $data['apptopus_amount_vouchers']; ?></td>
       <td><?php echo $data['apptopus_chargeto_vouchers']; ?></td>
       <?php }
       $output=ob_get_contents();
       ob_end_clean();
       $ret = array();
       $ret['html'] = $output;
       header('Content-type: application/json');
       die(json_encode($ret));
       }

     if($val == 'monthly_expenses')
     {
     
       $stmt = $conn->prepare("SELECT SUM(  apptopus_amount_vouchers) AS value_sum FROM app_vouchers");
             $stmt->execute();
             $row = $stmt->fetch(PDO::FETCH_ASSOC);
             $output= '<span>₱</span> '.$row['value_sum'];
             $ret = array();
             $ret['html'] = $output;
             header('Content-type: application/json');
             die(json_encode($ret));                   
     }
       

      if($val=='get_date_budget'){
      $start_date= $_POST['startDate'];
      $end_date= $_POST['endDate'];
      $query = $conn->prepare("SELECT * FROM apptopus_account WHERE apptopus_account_date BETWEEN '$start_date' AND '$end_date'");
      $query->execute();
      $query->setFetchMode(PDO::FETCH_ASSOC);
      ob_start();
      while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
      <tr>
        <td><?php echo $data['apptopus_account_id']; ?></td>
        <td><?php echo $data['apptopus_account_name']; ?></td>
        <td><?php echo $data['apptopus_account_budget']; ?></td>
         <?php }
         $output=ob_get_contents();
         ob_end_clean();
         $ret = array();
         $ret['html'] = $output;
         header('Content-type: application/json');
         die(json_encode($ret));
         }

         if($val == 'monthly_budget')
     {
     
       $stmt = $conn->prepare("SELECT SUM(apptopus_account_budget) AS value_sum FROM apptopus_account");
             $stmt->execute();
             $row = $stmt->fetch(PDO::FETCH_ASSOC);
             $output= '<span>₱</span> '.$row['value_sum'];
             $ret = array();
             $ret['html'] = $output;
             header('Content-type: application/json');
             die(json_encode($ret));                   
     }

   die();
   } ?>