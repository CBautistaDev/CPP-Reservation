<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Make booking</title>
</head>

<body>

<?php


		require 'config.php';

		include 'Mail.php';



				$start_day = htmlspecialchars($_POST['start_day']);
				$start_time = htmlspecialchars($_POST["start_hour"]);
				$name = htmlspecialchars($_POST["name"]);
				$bID = htmlspecialchars($_POST["bID"]);
				$time = strtotime ($_POST["start_hour"]);
				$endtime = date ("g:i A",strtotime('+15 minutes',$time));
				$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);



				if (preg_match('|^[A-Z0-9._%+-]+@cpp\.edu$|i', $email)) {

					$sql = 'INSERT INTO students(name, email,bID,start_day,start_time,end_time) VALUES(:name, :email ,:bID,:start_day,:start_hour,:end_time)';
					$statement = $connection->prepare($sql);
					if ($statement->execute([':name' => $name, ':email' => $email, ':bID'=> $bID,':start_day' => $start_day, ':start_hour' => $start_time , ':end_time' => $endtime])) {

						$formated_date =date('m-d-Y', strtotime($start_day));

					//	Mail::sendMail($name , $email, $start_time,$endtime ,$formated_date);

							return $msg = "<h3>You have succefully scheduled an appointment </br> Email will be sent shortly</h3>";
							}





	 else {

			echo "Error: " . $sql . "<br>" . pdo_error($connection);
		}


} else {
	return $msg = " </br><font color=\"red\">  Invalid email only CPP email allowed </font>";
}


?>

<a href="index.php"><p>Back to Cal Poly Pomona Home Page</p></a>

</body>

</html>
