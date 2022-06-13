<?php  

$host = 'localhost';  

$user = 'root';  

$pass = '';  

$dbname = 'furnac';  

$conn = mysqli_connect($host, $user, $pass,$dbname);  

if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  

echo 'Connected successfully<br/>'; 

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

$sql = "INSERT INTO stock2 VALUES ('$date' , '$shift' , '$BF' , '$ExectiveName' , '$AppServer1' ,'$AppServer2' , '$DBServer1' , '$DBServer2' , '$DCServer1' , '$DCServer2' , '$DAEPC' , '$LABPC', '$AppStorage' , '$DCStorage' , '$FireWall' , '$NWSwitch' , '$L2HMIPC' , '$BHSIPC' , '$CRL2PC' , '$REMOTEPC' , '$XML' , '$MIMIC' , '$L2HMI' , '$L1OPCLink' , '$L2Service' ,'$L3ERPLink', '$BF1Portal' , $Degrees , '$ACStatus' , '$UPSPOWERSUPPLYSTATUS' , '$BACKUPTAKEN' , '$SystemShutdown' , $Systemdowntime , '$Remarks')" ;

if(mysqli_query($conn, $sql)){  

 echo "Record inserted successfully";  

}else{  

echo "Could not insert record: ". mysqli_error($conn);  

}  

mysqli_close($conn);  

?>  