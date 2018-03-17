<?php 
function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "ananna_trade_erp";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
	?>