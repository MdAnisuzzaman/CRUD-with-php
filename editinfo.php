<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','udema');
$sql = "SELECT * FROM students WHERE id= $id";
$result = mysqli_query($conn,$sql);

$std = mysqli_fetch_assoc($result);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row py-4">
        <div class="col-md-3" >
            <a class="btn btn-info" href="insert.php"> Students </a>
        </div>
        <div class="col-md-9 py-5">
            <h2> Update Student Information Successfully</h2>

            <table class="table">
                <thead>
                <tr>
                    <td >Name </td>
                    <td ><?php echo $std['name'] ?></td>
                </tr>
                <tr>
                    <td >Email </td>
                    <td ><?php echo $std['email'] ?></td>
                </tr>
                <tr>
                    <td >Password </td>
                    <td ><?php echo $std['password'] ?></td>
                </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>

<script rel="javascript" href="assets/js/bootstrap.min.js" > </script>
</body>
</html>

