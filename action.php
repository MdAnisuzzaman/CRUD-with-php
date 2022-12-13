<?php
$conn = mysqli_connect('localhost','root','','udema');
if ($conn) {
    // $sql = "INSERT INTO practice ( name, email, password) VALUES ( 'to', 'to@gmail.com', 'to')";
    $sqi = "SELECT * FROM practice ";
    // $squ = "UPDATE practice SET name='badhon', email = 'badhon7898@gmail.com', password = '0152' WHERE id=7 ";
    $sqd = "DELETE FROM practice WHERE id = 10 ";

    mysqli_query($conn,$sqd);
    // mysqli_query($conn,$sql);
    // mysqli_query($conn,$squ);
    $result = mysqli_query($conn,$sqi);


    while ($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br/>";

    }

}