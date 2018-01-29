<?php

include 'config.php';

$eks = $_GET['eks'];

/*if ($eks=="insertcheck"){

  $SchoolName=$_POST['SchoolName'];
  $SchoolAddress=$_POST['SchoolAddress'];
  $PaymentMonth=$_POST['PaymentMonth'];
  $PaymentCheckNo=$_POST['PaymentCheckNo'];
  $PaymentBank=$_POST['PaymentBank'];
  $PaymentAmount=$_POST['PaymentAmount'];
  $PaymentStatus=$_POST['PaymentStatus'];
  $PaymentDate=$_POST['PaymentDate'];



$sql = "INSERT INTO apptopus_payment (apptopus_payment_id,apptopus_payment_month,apptopus_payment_date,apptopus_payment_checkno,apptopus_payment_bank,apptopus_payment_amount,apptopus_payment_status)VALUES (:SchoolName,:SchoolAddress,:PaymentMonth,:PaymentCheckNo,:PaymentBank,:PaymentAmount,:PaymentStatus,:PaymentDate)";

  $insertEmployee = $conn->prepare($sql);
  $insertEmployee->bindParam(':SchoolName',$SchoolName);
  $insertEmployee->bindParam(':SchoolAddress',$SchoolAddress);
  $insertEmployee->bindParam(':PaymentMonth',$PaymentMonth);
  $insertEmployee->bindParam(':PaymentCheckNo',$PaymentCheckNo);
  $insertEmployee->bindParam(':PaymentBank',$PaymentBank);
  $insertEmployee->bindParam(':PaymentAmount',$PaymentAmount);
  $insertEmployee->bindParam(':PaymentStatus',$PaymentStatus);
  $insertEmployee->bindParam(':PaymentDate',$PaymentDate);
  $insertEmployee->execute();
}*/

if ($eks=="deletecheck") {
  $nis = $_POST['nis'];
  $delete = $conn->prepare("DELETE FROM apptopus_payment WHERE apptopus_payment_id=:nis");
  $delete->bindParam(':nis',$nis);
  $delete->execute();
}


elseif ($eks=="detailcheck") {
     $nis = $_POST['nis'];
     $details =$conn->prepare("SELECT * FROM apptopus_payment JOIN apptopus_externalcustomers WHERE apptopus_payment.apptopus_payment_id=apptopus_externalcustomers.app_school_id && apptopus_payment_id=:nis");
     $details->bindParam(':nis',$nis);
     $details->execute();
     $data = $details->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($eks=="insertcheck") {
  $nis = $_POST['nis'];
  $SchoolName=$_POST['SchoolName'];
  $SchoolAddress=$_POST['SchoolAddress'];
  $PaymentMonth=$_POST['PaymentMonth'];
  $PaymentCheckNo=$_POST['PaymentCheckNo'];
  $PaymentBank=$_POST['PaymentBank'];
  $PaymentAmount=$_POST['PaymentAmount'];
  $PaymentStatus=$_POST['PaymentStatus'];
  $PaymentDate=$_POST['PaymentDate'];

  $sql = "UPDATE apptopus_payment SET apptopus_employee_fname=:Fname,apptopus_employee_mname=:Mname,apptopus_employee_lname=:Lname WHERE apptopus_internal_id=:nis";

  $update = $conn->prepare($sql);
  $update->bindParam(':nis',$nis);
  $update->bindParam(':Fname',$Fname);
  $update->bindParam(':Mname',$Mname);
  $update->bindParam(':Lname',$Lname);
  $update->execute();
}

?>
