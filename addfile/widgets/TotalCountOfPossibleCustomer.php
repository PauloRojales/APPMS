<?php
include '../config.php';
$possible = $conn->prepare("SELECT COUNT(app_possible_customer_id) FROM apptopus_possiblecustomers");
$possible->execute();
$data = $possible->fetch(PDO::FETCH_NUM);
echo $data[0];
?>
