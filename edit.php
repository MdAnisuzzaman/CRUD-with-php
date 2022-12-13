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
        <div class="row">
            <div class="col-md-3 py-5">
                <a class="btn btn-info" href="index.php">Student list </a>
            </div>
            <div class="col-md-9 ">
                <h2 class="py-5">Edit Student</h2>

                <form action="update.php?id=<?php echo $id ; ?>"  method="POST">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input required  type="text" class="form-control" name="name" placeholder="Name" >
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
        </div>
    </div>
    

<script rel="javascript" href="assets/js/bootstrap.min.js" > </script>
</body>
</html>