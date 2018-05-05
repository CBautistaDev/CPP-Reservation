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
<?php require 'header.php'; ?>
<div class="container">
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
<?php require 'footer.php'; ?>
