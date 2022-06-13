<?php
    /*$url='localhost';
    $username='root';
    $password='';*/
    $conn=mysqli_connect("localhost","root","","member");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>