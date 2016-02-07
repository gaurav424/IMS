<?php
  //require('db_connect.php');
  //$db = new db_connect;
  session_start();
 include('connect_database.php');
 if(isset($_POST['submit']))
	{	
		$Tag_Num = $_POST['tag_num'];
	  	$type_of = $_POST['type_of'];
	    $model_Num = $_POST['model_num'];
		$serial_Num = $_POST['serial_num'];
		$Maker = $_POST['maker']; 
	    $Rating = $_POST['Rating'];
		$qry ="INSERT INTO item_details(Type_of,Tag_Num,Model_Num,Serial_Num,Maker,Rating) VALUES('$type_of','$Tag_Num','$model_Num','$serial_Num','$Maker','$Rating')";
	    $Q =mysql_query($qry);		
	    if($Q)
		{
		   header('Location:../Stock_Inventory.php?status=t&tag_num='.$Tag_Num.'');
		}
		else
	  {
		 //echo mysql_error();
		header('Location:../Stock_Inventory.php?status=f');
		}
	
	}
	?>
