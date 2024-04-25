<?php
 require 'dbcon.php';
 if (isset($_POST['job_title'], $_POST['colorPicker'], $_POST['fileInput'], $_POST['fileInput2'], $_POST['device_type_input'], $_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['reference'])) {
     $data = [
         'job_title' => $_POST['job_title'],
         'f_name' => $_POST['f_name'],
         'last_name' => $_POST['l_name'],
         'email' => $_POST['email'],
         'reference' => $_POST['reference'],
         'bg_color' => $_POST['colorPicker'],
         'device_type' => $_POST['device_type_input'],
         'strip_img' => $_POST['fileInput'],
         'top_icon' => $_POST['fileInput2']
     ];
     echo json_encode($data);
 } else {
     echo "Some fields are missing.";
 }

?>