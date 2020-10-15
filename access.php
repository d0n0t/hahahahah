<?php
session_start();
$token = openssl_decrypt($_GET['vid'], "aes128", $_GET['id'].session_id());
if(file_exists($token))
{
session_regenerate_id(true); 
$file = $token;
  $file_size = filesize($file);
  $file_pointer = fopen($file, "rb");
  $data = fread($file_pointer, $file_size);
  header("Content-type: application/x-mpegURL");

  echo $data;
}
else {
  echo "Error: File Does not exists";
}
?>
