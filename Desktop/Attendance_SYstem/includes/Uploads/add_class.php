
<?php

include '../connection.php';

$name=$_POST['class_name'];
$batch=$_POST['batch'];
$semester=$_POST['semester'];




$sql = "INSERT INTO Class (C_name,Batch,Semester)VALUES('$name','$batch','$semester')";

if ($con->query($sql) === TRUE) {
    echo '<script>alert(Data Entered Successfully")</script>';
    echo "<script type='text/javascript'>window.location.href = '../Views/add_class.php';</script>";
} 
else {
    echo '<script>alert("Error 404!")</script>' . $sql . "<br>" . $con->error;
}

$con->close();

?>