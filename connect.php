<?php
$host='localhost';
$user='root';
$pass='';
$database='dbstbi';

$conn=($GLOBALS["___mysqli_ston"] = mysqli_connect ($host, $user, $pass));
mysqli_select_db($GLOBALS["___mysqli_ston"],$database);

?>