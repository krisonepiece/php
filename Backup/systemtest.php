<?php   
 $dbhost = '127.0.0.1';   
 $dbuser = 'root';   
 $dbpass = 'kris1994';   
 $dbname = 'photocollage';   

 $AlbumID = '5'; //android將會傳值到number

 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  $sql = "select * from photo where AlbumID = 5";
  $result = mysql_query($sql) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo $row['Pname']." ";
   echo $row['Pid']."<br>";   
  }
?>