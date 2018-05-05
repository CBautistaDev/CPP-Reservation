<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $bID = $_POST['bID'];
  $start_day = $_POST['start_day'];
  $start_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];

  $sql = 'INSERT INTO students(name, email,bID,start_day,start_time,end_time) VALUES(:name, :email,:bID,:start_day,:start_time,:end_time)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email, ':bID'=> $bID,':start_day' => $start_day, ':start_time' => $start_time, ':end_time'=>$end_time])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a Reservation</h2>
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
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="bID">Bronco ID</label>
          <input  name="bID" id="bID" class="form-control">
        </div>
        <div class="form-group">

          <label for="start_time">Start Time</label>
          <input  name="start_time" id="start_time" class="form-control">


        </div>
        <div class="form-group">

          <label for="end_time">End Time</label>
          <input  name="end_time" id="end_time" class="form-control">


        </div>
        <div class="form-group">
          <label for="start_day">Start Day</label>
          <input  type = "date" name="start_day" id="start_day" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create Resrvation</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
