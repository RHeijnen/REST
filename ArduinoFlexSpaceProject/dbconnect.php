<?php
// http://www.tweaking4all.com/hardware/arduino/arduino-ethernet-data-push/
// localhost/add_data.php?uid=**idnumber**&busy=1  1 or 0
$MyUsername = "root";  // enter your username for mysql
$MyPassword = "";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("rfid",$dbh);
?>
