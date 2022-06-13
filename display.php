<?php
$conn = mysqli_connect("localhost" , "root" , "" , "furnac") ;
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql ="SELECT * FROM stock" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" .$row["date"] ."</td><td>" .$row["shift"] ."</td><td>" . $row["BF"] ."</td><td>" .$row["ExectiveName"] ."</td><td>" .$row["AppServer1"] ."</td><td>"
        .$row["AppServer2"] ."</td><td>" .$row["DBServer1"] ."</td><td>" .$row["DBServer2"] ."</td><td>" .$row["DCServer1"] ."</td><td>" .$row["DCServer2"] ."</td><td>" 
        .$row["DAEPC"] ."</td><td>" .$row["LABPC"] ."</td><td>" .$row["AppStorage"] ."</td><td>" .$row["DCStorage"] ."</td><td>" .$row["FireWall"] ."</td><td>" .$row["NWSwitch"] ."</td><td>"
        .$row["L2HMIPC"] ."</td><td>" .$row["BHSIPC"] ."</td><td>" .$row["CRL2PC"] ."</td><td>" .$row["REMOTEPC"] ."</td><td>" .$row["XML"] ."</td><td>" .$row["MIMIC"] ."</td><td>"
        .$row["L2HMI"] ."</td><td>" .$row["L1OPCLink"] ."</td><td>" .$row["L2Service"] ."</td><td>" .$row["L3ERPLink"] ."</td><td>" .$row["BF1Portal"] ."</td><td>" .$row["Degrees"] 
        ."</td><td>" .$row["ACStatus"] ."</td><td>" .$row["UPSPOWERSUPPLYSTATUS"] ."</td><td>" .$row["BACKUPTAKEN"] ."</td><td>" .$row["SystemShutdown"] ."</td><td>" 
        .$row["Systemdowntime"] ."</td><td>" .$row["Remarks"] ."</td><td>" ;





}

}
else{
    echo "0 results"; 
}
$conn->close();

?>	