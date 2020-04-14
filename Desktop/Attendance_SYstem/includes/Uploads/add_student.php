
<?php

include '../connection.php';

$name=$_POST['name'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];
$roll=$_POST['roll'];
$alternate=$_POST['alternate'];
$semester=$_POST['semester'];
$address= $_POST['address'];
$class= $_POST['C_name'];


$sql = "INSERT INTO Student (S_Name,Roll_number,Contact,Alternate,S_Address,Class,Semester,DOB)VALUES('$name','$roll','$contact','$alternate','$address','$class','$semester','$dob')";

if ($con->query($sql) === TRUE) {
    echo '<script>alert(Data Entered Successfully")</script>';
    echo "<script type='text/javascript'>window.location.href = '../Views/add_student.php';</script>";
} 
else {
    echo '<script>alert("Error 404!")</script>' . $sql . "<br>" . $con->error;
}

$con->close();

?>