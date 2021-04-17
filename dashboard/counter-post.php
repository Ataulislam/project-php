<?php
 require_once '../db.php';
 session_start();

   if ($_SERVER['REQUEST_METHOD'] == POST) {
    
     $name = $_POST['name'];
     $icon = $_POST['icon'];
     $number = $_POST['number'];

     $counter_insert = " INSERT INTO counters(name,icon,number) VALUES('$name','$icon','$number')";
     $counter_q = mysqli_query($db, $counter_insert);

      if ($counter_q) {
          header('location:counters.php');
      }
        
    









   }




?>