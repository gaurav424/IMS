<?php
  //require('db_connect.php');
  //$db = new db_connect;
  session_start();
 include('connect_database.php');
 if(isset($_POST['submit']))
	{
	  	$a = $_POST['username'];
	    $b = $_POST['password'];
	    $qry ="SELECT * FROM user_data WHERE emp_id='$a' && password ='$b'";
	    $Q =mysql_query($qry);
		$data =mysql_fetch_array($Q);
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['name']=$data['emp_Name'];
		echo $_SESSION['user_id'];
	if($_SESSION['user_id'])
		{
		   header('Location:../welcome.php?user_id='.$_SESSION['user_id'].'');
		}
	else
	  {
		header('Location:../index.php?try=f');
		}
	}
	?>
