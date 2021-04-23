<?php
  require_once '../db.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sub_tittle = $db->real_escape_string($_POST['sub_tittle']);
    $tittle = $db->real_escape_string($_POST['tittle']);
    $paragraph = $db->real_escape_string($_POST['paragraph']);
    // $id= $_SESSION['id'];



    $insert ="INSERT INTO banner_part (sub_tittle, tittle, paragraph) VALUES('$sub_tittle', '$tittle' ,'$paragraph')";
    $q= mysqli_query($db, $insert);
    $last_insert_id = mysqli_insert_id($db);

      if ($q) {
        header('location:banner.php');
      }

             
     $image_name = ($_FILES['banner_img']['name']);
     $explode = explode('.', $image_name);
     $ext= end($explode);
     $allow_format =['jpg', 'png', 'JPEG'];

      if (in_array($ext, $allow_format)) {
          if ($_FILES['banner_img']['size'] < 50000000) {
            $banner_img = $last_insert_id. '.'.$ext;

            $new_location = 'upload/banner_image/'. $banner_img;
            move_uploaded_file($_FILES['banner_img']['tmp_name'],$new_location); 
            
            $Banner_img_update ="UPDATE banner_part SET banner_img = '$banner_img' WHERE id = $last_insert_id ";
            mysqli_query($db, $Banner_img_update);
          } 
            else {
              echo 'no';
            }
      }

  }

?>