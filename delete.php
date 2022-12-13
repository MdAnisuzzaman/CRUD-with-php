<?php 
$id = $_GET['id'];

$conn = mysqli_connect('localhost','root','','udema');
$sql = "DELETE FROM students WHERE id= $id";
if(mysqli_query($conn,$sql)){
    header('location:index.php');
}else{
    echo "not deleted";
}
    