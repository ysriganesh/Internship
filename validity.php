<?php 

$host="localhost";
$username="root";
$password="";
$dbname="member";

mysql_connect($host,$username,$password);
mysql_select_db($dbname);

if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from new where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>