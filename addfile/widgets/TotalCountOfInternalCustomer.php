<?php
include '../config.php';
$employee = $conn->prepare("SELECT COUNT(apptopus_internal_id) FROM apptopus_internalcustomers");
$employee->execute();
$data = $employee->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>

