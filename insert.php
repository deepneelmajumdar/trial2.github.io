<?php

$conn = mysqli_connect("localhost","root","","demodb");

// check connection

if($conn === false)
{
  die("ERROR: Could not connect." . mysqli_connect_error());
}

// Escape user inputs for security

$first_name = mysqli_real_escape_string($conn,$_REQUEST['first_name']);

$last_name = mysqli_real_escape_string($conn,$_REQUEST['last_name']);

$email = mysqli_real_escape_string($conn,$_REQUEST['email']);

// Attempt to insert query execution

$sql = "INSERT INTO players (firstname,lastname,email) VALUES ('$first_name','$last_name','$email')";

if(mysqli_query($conn,$sql))
{
  echo "Records added successfully.";
}

else{
      echo "ERROR: Could not execute $sql " . mysqli_error($conn);
}

?>