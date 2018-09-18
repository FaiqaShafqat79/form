<?php


// Create connection
$conn = mysqli_connect("localhost", "root", "", "student");



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

echo "Name: ".$fname;
echo "\n";
echo $lname;
echo "<br>";
echo  "Email: ".$email;
echo "<br>";
echo  "Password: ".$password;
echo "<br>";
echo  "Gesnder: ".$gender;

$sql = "INSERT INTO student_data(firstname, lastname, email, password, gender)
VALUES ('$fname',' $lname', '$email', '$password','$gender')";
echo $sql;
if(mysqli_query($conn,$sql)){
	echo "record added";
}
else{
	echo "error found" ;
}


?>