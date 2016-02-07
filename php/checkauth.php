<?php
//START SESSION ON PAGE LOAD
	// IT CREATES A SESSION ID ON THE SERVER AND SEND IT TO BEROWSER IN COOKIES
	 
	 session_start();
	
	//IF USER SESSION EXITS SEND TO WELCOME PAGE
		 if(isset($_SESSION['userid']))
		   {
			   header('Location:../dashboard.php');
			   }
?>			   