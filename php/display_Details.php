<?php
	include("connect_database.php");
	session_start();
	//$data_to = $_POST["Tag_Num"];
	//echo $data_to;
		if($_GET['Tag_Num'])
		{
			$data_to = $_GET["Tag_Num"];
			$a = "SELECT * from item_details WHERE Tag_Num = '$data_to'";
			$b= mysql_query($a);
			//$c = mysql_fetch_array($b);
            $q=mysql_fetch_array($b) ?>
			<input type = "text" name = "model_num" id="model_num" placeholder ="<?php echo $q['Model_Num']?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<input type = "text" name = "serial_num" placeholder ="<?php echo $q['Serial_Num'] ?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<input type ="text" name = "maker" placeholder="<?php echo $q['Maker'] ?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white"><br><br>
			<input type="text" name="Rating" placeholder="<?php echo $q['Rating'] ?>" readonly="readonly" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="right" data-popover-text="Value can't be Change." data-popover-background="bg-cyan" data-popover-color="fg-white">
          
<?php	}
?>