<?php
date_default_timezone_set("ASIA/kolkata");
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','project');
$con= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno())
{
    echo "Failed to connect server";
    
}
?>