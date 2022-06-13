<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }
          
           
          
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }
            
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  

</head>
<body>
    <meta charset="UTF-8">
    
<CENTER><h1>Rashtriya Ispat Nigam Limited</h1><BR></BR>
        <h1>Vizag Steel Plant</h1><BR></BR>
    <h2> BF-3 STATUS SHEET </h2></CENTER>
    <center><marquee width="1000" scrollamount="10" scrollhiding="100" loop = "500">
        <h3>!!!! FIND THE LAST ROW AS THE NEWLY UPDATED ONE !!!</h3>
        </marquee>
        </center>
    </center>

<table border="1">
<tr>  
                <th>Date</th>  
                <th>Shift</th>  
                <th>BF</th>  
                <th>ExectiveName</th>
                <th>AppServer1</th>  
                <th>AppServer2</th>  
                <th>DBServer1</th>  
                <th>DBServer2</th>
                <th>DCServer1</th>  
                <th>DCServer2</th>  
                <th>DAEPC</th>  
                <th>LABPC</th>
                <th>AppStorage</th>  
                <th>DCStorage</th>  
                <th>FireWall</th>  
                <th>NWSwitch</th>
                <th>L2HMIPC</th>  
                <th>BHSIPC</th>  
                <th>CRL2PC</th>  
                <th>REMOTEPC</th>
                <th>XML</th>  
                <th>MIMIC</th>  
                <th>L2 HMI</th>  
                <th>L1OPCLink</th>
                <th>L2Service</th>  
                <th>L3ERPLink</th>  
                <th>BF1Portal</th>  
                <th>Degrees</th>
                <th>ACStatus</th>  
                <th>UPSPOWERSUPPLYSTATUS</th>  
                <th>BACKUPTAKEN</th>  
                <th>SystemShutdown</th>
                <th>Systemdowntime</th>  
                <th>Remarks</th>  
                
           </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "furnac");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM stock3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" .$row["date"] ."</td><td>" .$row["shift"] ."</td><td>" . $row["BF"] ."</td><td>" .$row["ExectiveName"] ."</td><td>" .$row["AppServer1"] ."</td><td>"
.$row["AppServer2"] ."</td><td>" .$row["DBServer1"] ."</td><td>" .$row["DBServer2"] ."</td><td>" .$row["DCServer1"] ."</td><td>" .$row["DCServer2"] ."</td><td>" 
.$row["DAEPC"] ."</td><td>" .$row["LABPC"] ."</td><td>" .$row["AppStorage"] ."</td><td>" .$row["DCStorage"] ."</td><td>" .$row["FireWall"] ."</td><td>" .$row["NWSwitch"] ."</td><td>"
.$row["L2HMIPC"] ."</td><td>" .$row["BHSIPC"] ."</td><td>" .$row["CRL2PC"] ."</td><td>" .$row["REMOTEPC"] ."</td><td>" .$row["XML"] ."</td><td>" .$row["MIMIC"] ."</td><td>"
.$row["L2HMI"] ."</td><td>" .$row["L1OPCLink"] ."</td><td>" .$row["L2Service"] ."</td><td>" .$row["L3ERPLink"] ."</td><td>" .$row["BF1Portal"] ."</td><td>" .$row["Degrees"] 
."</td><td>" .$row["ACStatus"] ."</td><td>" .$row["UPSPOWERSUPPLYSTATUS"] ."</td><td>" .$row["BACKUPTAKEN"] ."</td><td>" .$row["SystemShutdown"] ."</td><td>" 
.$row["Systemdowntime"] ."</td><td>" .$row["Remarks"] ."</td><td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>