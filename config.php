<?php
    
$server= "remotemysql.com";
$username="9rUhwdd4fH";
$password="hRxZhxvv2G";
$con= mysqli_connect($server,$username,$password,'9rUhwdd4fH');
if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}

?>
