<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "member" ;

$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
    die();
}

print_r( $conn);
    
   // if(!empty($_POST['username']) && !empty($_POST['Department']) && !empty($_POST['EmployeeNumber']) && !empty($_POST['email']) && !empty($_POST['password'])){
         
        $username = $_POST['username'] ;
        $DEPARTMENT = $_POST['DEPARTMENT'] ;
        $EmployeeNumber =$_POST['EmployeeNumber'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;

        $query = "insert into new(username,DEPARTMENT,EmployeeNumber,email,password) values('$username' , '$DEPARTMENT' , $EmployeeNumber , '$email' , $password)" ;
        echo $query;
        $run = mysqli_query($conn,$query) ;//or die(mysqli_error());

        if($run)
        {
            echo "Form submitted sucessfully" ;
        }
        else
        {
            echo "Form not submitted" ;
        }

?>