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
    <h2> BF-1 LOGIN SHEET </h2></CENTER>
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
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "furnac");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM stock";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" .$row["date"] ."</td><td>" .$row["shift"] ."</td><td>" . $row["BF"] ."</td><td>" .$row["ExectiveName"] ."</td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<br><br>
<center><h2> BF-2 LOGIN SHEET </h2></CENTER>
    <center><marquee width="1000" scrollamount="10" scrollhiding="100" loop = "500">
        <h3>!!!! FIND THE LAST ROW AS THE NEWLY UPDATED ONE !!!</h3>
        </marquee>
        </center>
    </center>
</table>
<table border="1">
<tr>  
                <th>Date</th>  
                <th>Shift</th>  
                <th>BF</th>  
                <th>ExectiveName</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "furnac");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM stock2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" .$row["date"] ."</td><td>" .$row["shift"] ."</td><td>" . $row["BF"] ."</td><td>" .$row["ExectiveName"] ."</td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<br><br>
</table>
<center><h2> BF-3 LOGIN SHEET </h2></CENTER>
    <center><marquee width="1000" scrollamount="10" scrollhiding="100" loop = "500">
        <h3>!!!! FIND THE LAST ROW AS THE NEWLY UPDATED ONE !!!</h3>
        </marquee>
        </center>
    </center>
</table>
<table border="1">
<tr>  
                <th>Date</th>  
                <th>Shift</th>  
                <th>BF</th>  
                <th>ExectiveName</th>
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
    echo "<tr><td>" .$row["date"] ."</td><td>" .$row["shift"] ."</td><td>" . $row["BF"] ."</td><td>" .$row["ExectiveName"] ."</td>" ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>