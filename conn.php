<?php

$serverName = '192.168.0.226';
$dbName = 'emember';
$userName = 'sa';
$userPassword = 'Sukishi20272027';

$conn = new PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);


?>