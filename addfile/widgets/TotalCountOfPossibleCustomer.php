<?php
include '../config.php';
$possible = $conn->prepare("SELECT COUNT(app_possiblecustomers_id) FROM apptopus_possiblecustomers");
$possible->execute();
$data = $possible->fetch(PDO::FETCH_NUM);
echo $data[0];
?>
