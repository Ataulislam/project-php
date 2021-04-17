<?php
 require_once '../db.php';
 session_start();

   if ($_SERVER['REQUEST_METHOD'] == POST) {
    
     $company_name = $_POST['company_name'];

     $partner_insert = " INSERT INTO partners(company_name) VALUES('$company_name')";
     $partner_q = mysqli_query($db, $partner_insert);
     $last_insert_id = mysqli_insert_id($db);


         
   $logo_name = ($_FILES['logo']['name']);
   $explode = explode('.', $logo_name);
   $ext= end($explode);
   $allow_format =['jpg', 'png', 'JPEG'];


    if (in_array($ext, $allow_format)) {
        if ($_FILES['logo']['size'] < 50000000) {
          $logo = $last_insert_id. '.'.$ext;

          $new_location = 'upload/partner_logo/'. $logo;
          move_uploaded_file($_FILES['logo']['tmp_name'],$new_location); 
          
          $logo_update ="UPDATE partners SET logo = '$logo' WHERE id = $last_insert_id ";
          mysqli_query($db, $logo_update);
          header('location:partners.php');
        } 
          else {
            echo 'no';
          }
    }









   }




?>