<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM students WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['email']) && isset($_POST['bID']) && isset($_POST['start_time']) && isset($_POST['start_time']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $bID = $_POST['bID'];
  $start_time = $_POST['start_time'];
  $start_day = $_POST['start_day'];

  $sql = 'UPDATE students SET name=:name, email=:email , bID=:bID , start_time=:start_time , start_day=:start_day WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email, ':bID' => $bID, 'start_time' => $start_time , 'start_day' => $start_day ,':id' => $id])) {
    header("Location: index.php");
  }



}


 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <title>Welcome</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://www.cpp.edu/common/resources/css/css-2016.css?v=1493476946063" rel="stylesheet" />

     <link rel ="stylesheet" href="css/style.css">

   </head>
   <body class="bg-info">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="index.php">Student Success Center</a>
   <ul class="navbar-nav mr-auto">
     <li class="nav-item ">
       <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="create.php">Create a Reservation</a>
     </li>


   </ul>



 </nav><div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="bID">Bronco ID</label>
          <input value="<?= $person->bID; ?>" name="bID" id="bID" class="form-control">
        </div>
        <div class="form-group">
          <label for="start_time">Start Time</label>
          <input  value="<?= $person->start_time; ?>" name="start_time" id="start_time" class="form-control">
        </div>
        <div class="form-group">
          <label for="start_day">Start Day</label>
          <input  value="<?= $person->start_day; ?>" name="start_day" id="start_day" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Reservation</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
