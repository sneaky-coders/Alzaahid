
<?php

include '../connection.php';

$name=$_POST['subject'];
$class=$_POST['C_Name'];
$teacher=$_POST['teacher_name'];



$sql = "INSERT INTO Subject (S_Name,C_Name,T_Name)VALUES('$name','$class','$teacher')";

if ($con->query($sql) === TRUE) {
    echo '<script>alert(Data Entered Successfully")</script>';
    echo "<script type='text/javascript'>window.location.href = '../Views/add_subject.php';</script>";
} 
else {
    echo '<script>alert("Error 404!")</script>' . $sql . "<br>" . $con->error;
}

$con->close();

?>