<?php 
$id = $_GET ['id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];

$conn = mysqli_connect('localhost','root','','udema');
$sqi = "UPDATE students SET name='$name', email= '$email',password= '$password' WHERE id = $id ";
 if(mysqli_query($conn,$sqi)){
    header('location: editinfo.php?id=' .$id);
 }else{
    echo "not insert";
 }

?>