 <?php
 //Database Coonectivity
include("connect_database.php");
  if(isset($_POST['submit']))
  {
	  $receipt_no=$_POST['receipt_no'];
	  $team_name=$_POST['team_name'];
	  $eroll = $_POST['eroll'];
	  $full_name=$_POST['full_name'];
	  $email_id=$_POST['email_id'];
	  $mobile_no=$_POST['mobile_no'];
	  $college=$_POST['college'];
	  $sem=$_POST['sem'];
	  $codechef_username=$_POST['codechef_username'];
	  
	   $i="insert into registration(unique_id,team_name,Enrollment_no,Name,email_id,mobile,course,sem,codechef_username) values('$receipt_no','$team_name','$eroll','$full_name','$email_id','$mobile_no','$college','$sem','$codechef_username')";
	  $a=mysql_query($i);
	     if($a)
		   {
			   echo 'done';
			   header("location:../registration_page.php");
			   }
			   else
			   {
				   echo mysql_error();
				   }      
           }  
  ?>