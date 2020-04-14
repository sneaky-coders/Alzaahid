<script src="../../css/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='../../css/sweetalert2.min.css'>
<?php
$host="localhost";
$user="root";
$pass="";
$db="Attendance";
$con = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo '<script>swal("Error 404!", "Database Connection Error", "error")</script>' . mysqli_connect_error();

  }


?> 