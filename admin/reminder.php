<?php








include 'db.php';
include 'emailreminder.php';

$id = $_GET['id'];


$sql = 'SELECT name,email,bID,start_day, start_time,end_time  FROM students WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id]))
$student = $statement->fetch(PDO::FETCH_ASSOC);



     {

			 $name = $student['name'];
			 $email = $student['email'];
			 $start_time = $student['start_time'];
       $formated_start_time = date("g:i a",strtotime($start_time));
			 $end_time = $student['end_time'];
       $formated_end_time = date("g:i a",strtotime($end_time));
       $start_day = $student['start_day'];
       $formated_date =date('m-d-Y', strtotime($start_day));

     	MailReminder::sendMail($name , $email, $formated_start_time,$formated_end_time ,$formated_date);
		 	header("Location: index.php");


	}

?>
