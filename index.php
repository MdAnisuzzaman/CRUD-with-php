<?php 

$conn = mysqli_connect('localhost','root','','udema');
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);

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
                <a class="btn btn-info" href=" insert.php">New Student</a>
            </div>
            <div class="col-md-9 py-5">
                <h2>Student List</h2>
           
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th class="scope">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['password'] ?></td>
      <td>
        <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" >View</a>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div> 
</div>

<script rel="javascript" href="assets/js/bootstrap.min.js" > </script>
</body>
</html>
