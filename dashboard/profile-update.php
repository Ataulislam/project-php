<?php
 require_once('session.php');
 require_once('../db.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id= $_SESSION['id'];

   $image_name = ($_FILES['profile_image']['name']);
   $explode = explode('.', $image_name);
   $ext= end($explode);

   $allow_format =['jpg', 'png', 'JPEG'];


   if (in_array($ext, $allow_format)) {
    //  echo 'allow image';
    if ($_FILES['profile_image']['size'] < 500000) {
      // echo rand(1, 3000).$id. '.'.$ext;
      $new_ext = $id. '.'.$ext;

      $img_cheak= "SELECT * FROM users WHERE id= '$id'";
      $img_query= mysqli_query($db, $img_cheak);
      $img_assoc = mysqli_fetch_assoc($img_query);
      $old_img_location = 'upload/'. $img_assoc['profile_image'];
      if (file_exists($old_img_location) != 'defalut.png') {
        unlink($old_img_location);
      }

      $new_location = 'upload/'. $new_ext;
      move_uploaded_file($_FILES['profile_image']['tmp_name'],$new_location);
        
      $update="UPDATE users SET name='$name', email='$email', profile_image= '$new_ext' WHERE id =$id";
      $q= mysqli_query($db, $update);
      if ($q) {
        $_SESSION['name']= $assoc['name'];
        header('location:edit-profile.php');
      }
    }
    else {
      echo 'no';
    }
   }
   else {
     echo 'not allow';
   }


   //  $update="UPDATE users SET name='$name', email='$email' WHERE id =$id";
   //  $q= mysqli_query($db, $update);
   //  if ($q) {
   //     $_SESSION['name']= $assoc['name'];
   //     header('location:edit-profile.php');
   //  }
    
 }

?>