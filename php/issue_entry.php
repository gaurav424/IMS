<?php
  //require('db_connect.php');
  //$db = new db_connect;
  session_start();
 include('connect_database.php');
 if(isset($_POST['submit']))
	{	
		$emp_Id = $_POST['emp_Id'];
	  	$Tag_Num = $_POST['Tag_Num'];
		$date = date("Y-m-d");
	    $qry ="UPDATE item_details SET issued = 1,issue_to ='$emp_Id',issue_date = '$date' WHERE Tag_Num ='$Tag_Num'";
	    $Q =mysql_query($qry);		
	    if($Q)
		{
		   header('Location:../Issue_Inventory.php?status=t');
		}
		else
	  {
		 echo mysql_error();
		//header('Location:../Issue_Inventory.php?status=f');
		}
	
	}
	?>
