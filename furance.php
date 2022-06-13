<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "furnac" ;

$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
    die();
}

print_r( $conn);
    
   // if(!empty($_POST['username']) && !empty($_POST['Department']) && !empty($_POST['EmployeeNumber']) && !empty($_POST['email']) && !empty($_POST['password'])){
         
    $date = $_POST['date'] ;
    $shift = $_POST['shift'] ;
    $BF = $_POST['BF'] ;
    $ExectiveName = $_POST['ExectiveName'] ;
    $AppServer1 = $_POST['AppServer1'] ;
    $AppServer2 = $_POST['AppServer2'] ;
    $DBServer1 = $_POST['DBServer1'] ;
    $DBServer2 = $_POST['DBServer2'] ;
    $DCServer1 = $_POST['DCServer1'] ;
    $DCServer2 = $_POST['DCServer2'] ;
    $DAEPC = $_POST['DAEPC'] ;
    $LABPC = $_POST['LABPC'] ;
    $AppStorage = $_POST['AppStorage'] ;
    $DCStorage = $_POST['DCStorage'] ;
    $FireWall = $_POST['FireWall'] ;
    $NWSwitch = $_POST['NWSwitch'] ;
    $L2HMIPC = $_POST['L2HMIPC'] ;
    $BHSIPC = $_POST['BHSIPC'] ;
    $CRL2PC = $_POST['CRL2PC'] ;
    $REMOTEPC = $_POST['REMOTEPC'] ;
    $XML = $_POST['XML'] ;
    $MIMIC = $_POST['MIMIC'] ;
    $L2HMI = $_POST['L2HMI'] ;
    $L1OPCLink = $_POST['L1OPCLink'] ;
    $L2Service = $_POST['L2Service'] ;
    $L3ERPLink = $_POST['L3ERPLink'] ;
    $BF1Portal = $_POST['BF1Portal'] ;
    $Degrees= $_POST['Degrees'] ;
    $ACStatus = $_POST['ACStatus'] ;
    $UPSPOWERSUPPLYSTATUS = $_POST['UPSPOWERSUPPLYSTATUS'] ;
    $BACKUPTAKEN = $_POST['BACKUPTAKEN'] ;
    $SystemShutdown = $_POST['SystemShutdown'] ;
    $Systemdowntime = $_POST['Systemdowntime'] ;
    $Remarks = $_POST['Remarks'] ;

        $query = "INSERT INTO stock VALUES ('$date' , '$shift' , '$BF' , '$ExectiveName' , '$AppServer1' ,'$AppServer2' , '$DBServer1' , '$DBServer2' , '$DCServer1' , '$DCServer2' , '$DAEPC' , '$LABPC', '$AppStorage' , '$DCStorage' , '$FireWall' , '$NWSwitch' , '$L2HMIPC' , '$BHSIPC' , '$CRL2PC' , '$REMOTEPC' , '$XML' , '$MIMIC' , '$L2HMI' , '$L1OPCLink' , '$L2Service' ,'$L3ERPLink', '$BF1Portal' , $Degrees , '$ACStatus' , '$UPSPOWERSUPPLYSTATUS' , '$BACKUPTAKEN' , '$SystemShutdown' , $Systemdowntime , '$Remarks')" ;
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