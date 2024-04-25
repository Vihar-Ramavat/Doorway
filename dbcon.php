<?php

try {
    // Establishing database connection
    $con = new PDO("mysql:host=localhost;dbname=doorway_db", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(array('status' => 'error', 'message' => 'Connection failed: ' . $e->getMessage()));
    exit();
}
?>