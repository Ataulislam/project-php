<?php
require_once '../db.php';
session_start();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $tittle = $_POST['tittle'];
   $year = $_POST['year'];
   $progress = $_POST['progress'];

   $insert="INSERT INTO educations(tittle, year , progress) VALUES('$tittle','$year', '$progress')";
   
   if (mysqli_query($db, $insert)) {
    // echo 'success';
    header('location:educations.php');
   }
   
   else {
    echo 'vhul ase';
   }
  }
?>