<?php
try {
    $conn = New PDO ("mysql:host=localhost;dbname=app_db","root","");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
