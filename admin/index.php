<?php
require 'db.php';
$sql = 'SELECT * FROM students ORDER BY start_day  ASC';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);



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



 </nav>
<div class="container-fluid">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Student Reservations</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Bronco ID</th>
          <th>Start Day</th>
          <th>Start Time</th>
          <th>End Time</th>



        </tr>
        <?php foreach($people as $person):


          ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->email; ?></td>
            <td><?= $person->bID; ?></td>
            <td><?= $person->start_day; ?></td>
            <td><?= $person->start_time; ?></td>
            <td><?= $person->end_time; ?></td>



            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-primary btn-sm">Edit</a>
              <a onclick="return confirm('Are you sure you want to send reminder?')" href="reminder.php?id=<?= $person->id ?>" class="btn btn-info btn-sm">Reminder</a>

              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger btn-sm'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
