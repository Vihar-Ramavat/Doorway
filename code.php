<?php

require 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST["action"] == "add_data") {
        $bg_color = $_POST['bg_color'];
        $f_name = $_POST['f_name'];
        $device_type = $_POST['device_type'];
        // $strip_img = $_POST['strip_img'];
        // $top_icon = $_POST['top_icon'];
        $job_title = $_POST['job_title'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $reference = $_POST['reference'];

        function uploadFile($file, $uploadDir) {
            $fileName = $uploadDir . basename($file["name"]);
            if (move_uploaded_file($file["tmp_name"], $fileName)) {
                return $fileName;
            }
            return '';
        }
        
        $featuredImagePath = uploadFile($_FILES["strip_img"], 'img/');
        $bannerImagePath = uploadFile($_FILES["top_icon"], 'img/');
        try {
            // Prepare and execute statement
            $insertStmt = $con->prepare("INSERT INTO doorway_tbl (bg_color, f_name, device_type,strip_img,top_icon,job_title,l_name,email,reference) VALUES (:bg_color,:f_name,:device_type,:strip_img,:top_icon,:job_title,:l_name,:email,:reference)");
            $insertStmt->bindParam(':bg_color', $bg_color);
            $insertStmt->bindParam(':f_name', $f_name);
            $insertStmt->bindParam(':device_type', $device_type);
           
            $insertStmt->bindParam(':job_title', $job_title);
            $insertStmt->bindParam(':l_name', $l_name);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':reference', $reference);


            $insertStmt->bindParam(':strip_img', $featuredImagePath);
            $insertStmt->bindParam(':top_icon', $bannerImagePath);
            $insertStmt->execute();

            echo json_encode(array('status' => 'success', 'message' => 'Event stored successfully'));
        } catch (PDOException $e) {
            echo json_encode(array('status' => 'error', 'message' => 'Error storing Event: ' . $e->getMessage()));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
    }
}
?>
