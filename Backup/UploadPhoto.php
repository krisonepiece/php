<?php   
 $dbhost = 'localhost';   	//IP
 $dbuser = 'root';   		//DB User
 $dbpass = 'kris1994';   	//DB Password
 $dbname = 'photocollage';	//DB name

 //recieve POST data
 $Pid = $_POST['Pid'];
 $Pname = $_POST['Pname'];
 $TakeDate = $_POST['TakeDate'];
 $UploadDate = $_POST['UploadDate'];
 $Ppath = $_POST['Ppath'];
 $RecPath = $_POST['RecPath'];
 $AlbumID = $_POST['AlbumID'];
 //Connected to DB
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  //set UTF-8
  mysql_query("SET NAMES 'utf8'");
  //Select DB name
  mysql_select_db($dbname);   
  //run SQL commend
  $sql = "INSERT INTO `photocollage`.`photo` (`Pid`, `Pname`, `TakeDate`, `UploadDate`, `Ppath`, `RecPath`, `AlbumID`) VALUES (NULL, '".$Pname."', '".$TakeDate."', '".$UploadDate."', '".$Ppath."', '".$RecPath."', '".$AlbumID."');";
  //catch return data
  $result = mysql_query($sql) or die('MySQL query error');
  //return data
  echo $result;

?>