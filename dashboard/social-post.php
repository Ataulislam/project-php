<?php
require_once '../db.php';
session_start();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $icon = $_POST['icon'];
   $link = $_POST['link'];
   define('insert',"INSERT INTO socials(name, icon , link) VALUES('$name','$icon', '$link')");
   if ( mysqli_query($db, insert)) {
    echo 'success';
   }
   else {
    echo 'vhul ase';
   }


   // $insert = "INSERT INTO socials(name, icon , link) VALUES('$name','$icon', '$link')";
   // $qu= mysqli_query($db, $insert);
   // if ($qu) {
   //  echo 'success';
   // }
   // else {
   //  echo 'vhul ase';
   // }


 }


 ?>