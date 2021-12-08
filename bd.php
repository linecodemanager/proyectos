<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sena_edu'
)
or die(mysqli_error($mysqli));

?>