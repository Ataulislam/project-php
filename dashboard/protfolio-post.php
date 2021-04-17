<?php
 require_once('session.php');
 require_once('../db.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tittle = $_POST['tittle'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];

     $insert="INSERT INTO portfolios (tittle, category,summary) VALUES('$tittle','$category','$summary')";
          $q= mysqli_query($db, $insert);
          $last_insert_id =mysqli_insert_id($db);

          if ($q) {
            header('location:protfolios.php');
          }
        
   $image_name = ($_FILES['thumbnail']['name']);
   $explode = explode('.', $image_name);
   $ext= end($explode);
   $allow_format =['jpg', 'png', 'JPEG'];


    if (in_array($ext, $allow_format)) {
      //  echo 'allow image';
        if ($_FILES['thumbnail']['size'] < 50000000) {
          // echo rand(1, 3000).$id. '.'.$ext;
          $thumbnail = $last_insert_id. '.'.$ext;

          $new_location = 'upload/thumbnail/'. $thumbnail;
          move_uploaded_file($_FILES['thumbnail']['tmp_name'],$new_location); 
          
          $thumbnail_update ="UPDATE portfolios SET thumbnail = '$thumbnail' WHERE id = $last_insert_id ";
          mysqli_query($db, $thumbnail_update);
        } 
          else {
            echo 'no';
          }
    }


   $featured_image = ($_FILES['featured_image']['name']);
   $featured_explode = explode('.', $featured_image);
   $featured_ext= end($featured_explode);
   $featured_allow_format =['jpg', 'png', 'JPEG'];

    
    if (in_array($featured_ext, $featured_allow_format)) {
      //  echo 'allow image';
        if ($_FILES['featured_image']['size'] < 50000000) {
          
          $featured_image_ext = $last_insert_id. '.'.$featured_ext;

          $featured_new_location = 'upload/featured_image/'. $featured_image_ext;
          move_uploaded_file($_FILES['featured_image']['tmp_name'], $featured_new_location);    

           $featured_update =" UPDATE portfolios SET featured_image = '$featured_image_ext' WHERE id = $last_insert_id ";
          mysqli_query($db, $featured_update);

        } 
          else {
            echo 'no';
          }
    }


        else {
          echo 'not allow';
        }


  
  }

?>