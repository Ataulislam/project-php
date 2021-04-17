<?php
 require_once '../db.php';
 session_start();

   if ($_SERVER['REQUEST_METHOD'] == POST) {
    
     $tittle = $_POST['tittle'];
     $paragraph = $_POST['paragraph'];
     $name = $_POST['name'];
     $position = $_POST['position'];

     $testimonial_insert = " INSERT INTO testimonials(tittle, paragraph, name,position) VALUES('$tittle','$paragraph','$name', '$position')";
     $testimonial_q = mysqli_query($db, $testimonial_insert);
     $last_insert_id = mysqli_insert_id($db);

      // if ($testimonial_q) {
      //     header('location:testimonials.php');
      // }
         
       $test_img_name = ($_FILES['test_img']['name']);
       $explode = explode('.', $test_img_name);
       $ext= end($explode);
       $allow_format =['jpg', 'png', 'JPEG'];


    if (in_array($ext, $allow_format)) {
        if ($_FILES['test_img']['size'] < 50000000) {
          $test_img = $last_insert_id. '.'.$ext;

          $new_location = 'upload/testimonial_image/'. $test_img;
          move_uploaded_file($_FILES['test_img']['tmp_name'],$new_location); 
          
          $test_img_update ="UPDATE testimonials SET test_img = '$test_img' WHERE id = $last_insert_id ";
          mysqli_query($db, $test_img_update);
          header('location:testimonials.php');
        } 
          else {
            echo 'no';
          }
    }


   }




?>