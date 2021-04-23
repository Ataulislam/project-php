<?php
  require_once '../db.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sub_tittle = $db->real_escape_string($_POST['sub_tittle']);
    $tittle = $db->real_escape_string($_POST['tittle']);
    $paragraph = $db->real_escape_string($_POST['paragraph']);
    $id= $_POST['id'];



    $update_b ="UPDATE banner_part SET sub_tittle ='$sub_tittle', tittle= '$tittle', paragraph='$paragraph' where id = $id";
    $q= mysqli_query($db, $update_b);
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
            $banner_img = $id. '.'.$ext;

            $img_cheak= "SELECT * FROM banner_part WHERE id= '$id'";
            $img_query= mysqli_query($db, $img_cheak);
            $img_assoc = mysqli_fetch_assoc($img_query);
            $old_img_location = 'upload/banner_image/'. $img_assoc['banner_img'];
            if (file_exists($old_img_location) != 'defalut.png') {
              unlink($old_img_location);
            }

            $new_location = 'upload/banner_image/'. $banner_img;
            move_uploaded_file($_FILES['banner_img']['tmp_name'],$new_location); 
            
            $Banner_img_update ="UPDATE banner_part SET banner_img = '$banner_img' WHERE id = $id";
            mysqli_query($db, $Banner_img_update);
          } 
            else {
              echo 'no';
            }
      }

  }

?>