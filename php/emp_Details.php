<?php
	include("connect_database.php");
	session_start();
	//$data_to = $_POST["Tag_Num"];
	//echo $data_to;
		if($_GET['emp_Id'])
		{
			$data_to = $_GET["emp_Id"];
			$a = "SELECT * from employee_details WHERE Emplyee_id = '$data_to'";
			$b= mysql_query($a);
			//$c = mysql_fetch_array($b);
            if($q=mysql_fetch_array($b)){ ?>
			<input type = "text" name = "Empl_Name" id="Empl_Name" placeholder ="<?php echo $q['Empl_Name']?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<input type = "text" name = "Designation" placeholder ="<?php echo $q['Designation'] ?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<input type ="text" name = "Department" placeholder="<?php echo $q['Department'] ?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<?php }
			else
			{ ?>
					<input type = "text" name = "Empl_Name" placeholder ="Employee Name"></br><br>
					<input type = "text" name = "Designation" placeholder ="Designation"><br><br>
					<input type ="text" name = "Department" placeholder="Department"><br><br>
			<?php 
		}
	}
 ?>