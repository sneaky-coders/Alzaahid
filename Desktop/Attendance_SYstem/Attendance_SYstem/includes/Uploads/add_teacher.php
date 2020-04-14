
<?php

include '../connection.php';

$name=$_POST['name'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];



$sql = "INSERT INTO Teacher (T_name,Contact,DOB)VALUES('$name','$contact','$dob')";

if ($con->query($sql) === TRUE) {
    echo '<script>alert(Data Entered Successfully")</script>';
    echo "<script type='text/javascript'>window.location.href = '../Views/add_teacher.php';</script>";
} 
else {
    echo '<script>alert("Error 404!")</script>' . $sql . "<br>" . $con->error;
}

$con->close();

?>