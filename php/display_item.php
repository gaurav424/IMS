<?php
	include("connect_database.php");
	session_start();
	//$data_to = $_POST["type_of"];
	//echo $data_to;
		if($_GET['type_of'])
		{
			$data_to = $_GET["type_of"];
			$a = "SELECT * from item_details WHERE type_of = '$data_to' && issued =0";
			$b= mysql_query($a);
			//$c = mysql_fetch_array($b);
			echo '<select id="testing" name="Tag_Num" class="form-control" id="p_locat">';
			echo '<option value="0">Available Tag_Num</option>';
            while($q=mysql_fetch_array($b)) {
                echo "<option value=" .$q['Tag_Num']. ">" . $q['Tag_Num'] . "</option>";
            }
           echo '</select>';
	}
?>