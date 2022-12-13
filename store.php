<?php 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];

$conn = mysqli_connect('localhost','root','','udema');
$sqi = "INSERT INTO students ( name, email, password) VALUES ('$name','$email','$password')";
 if(mysqli_query($conn,$sqi)){
    header('location: index.php');
 }else{
    echo "not insert";
 }

?>