<?php  
$database = "posdb";
$ipserver = "192.168.0.226";
$user = "sa";
$pass = "Sukishi20272027";
$conn = new PDO( "sqlsrv:server=$ipserver ; Database = $database", $user, $pass);  
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  //set return when fail PDO::ERRMODE_EXCEPTION or false


?>