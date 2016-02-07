<?php
include('connect_database.php');
session_start();
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from registration where unique_id like '$q%' LIMIT 2 ");
 $acs = mysql_num_rows($sql_res);
 if($acs>=1)
 {
	 ?>
      <style>
	  	table
		{
			width:800px;
			margin-top:10px;
			}
		th
		{
			border-bottom:solid 2px #DC171A;
			font-size:16px;
			height:35px;
			}	
		td
		{
			border-right: solid 1px #3CCEDB;
			width: 200px;
			padding-left:15px;
			}	
	  </style>
		<table> 
		   <th >TEAM NAME</th>
		   <th>ENROLLMENT NO</th>
		   <th>NAME</th>
		   <th>EMAIL ID</th>
		  <?php
while($row=mysql_fetch_array($sql_res))
{
$team_name=$row['team_name'];
$Enrollment_no=$row['Enrollment_no'];
$name=$row['Name'];
$email_id=$row['email_id'];
				
				echo "<tr>";
		// Crrated 
				echo "<td>";
				echo $team_name;
				echo "</td>";
				
				echo "<td>";
				echo $Enrollment_no;
				echo "</td>";
				
				echo "<td>";
				echo $name;
				echo "</td>";
				
				echo "<td>";
				echo $email_id;
				echo "</td>";
				
				  echo"</tr>"; 


			}
			echo "</table>";
 	}
	else
	{
		echo 'No result found!';
		}
	}
		else
		{
			}


?>
