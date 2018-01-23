<?php
include '../config.php';
$client = $conn->prepare("SELECT COUNT(app_school_id) FROM apptopus_externalcustomers");
$client->execute();
$data = $client->fetch(PDO::FETCH_NUM);
echo $data[0];
?>
