<?php


 $file_name = explode('.', $_FILES['image']['name']);
  $file_ext = end($file_name);
  $fname = 'profile'.date('Y-m-d-h-i-s').'-'.rand(1000, 999900).'.'.$file_ext;

 $path = 'assets/img/uploads/'. $fname;
   $files = $_FILES['image']['tmp_name'];
 $uploads = move_uploaded_file($files, $path);
  if($uploads == true){
    echo "File Uploaded";
  }
  else{
    echo "File Not Uploaded";
  }



?>