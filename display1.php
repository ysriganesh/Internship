<?php

$query = "select * from materials";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo $total;

?>