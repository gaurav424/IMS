<?php
    class db_connect
	{
		function _construct()
		{
			$this->connect();
			}
		function _destruct()
		{
			$this->close();
			}
		function connect()
		{
			include_once("db_config.php");
			$a = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die(mysql_error());
			$b = mysql_select_db(DB_DATABASE) or die(mysql_error());
			return $a;
			}
		 function close()
		 {
			 mysql_close();
			 }		
		}
  ?>