<?php
include_once 'dbh.php';

$Right = $_POST['Right'];
$Forwards= $_POST['Forwards'];
$Left = $_POST['Left'];
$Backwards= $_POST['Backwards'];

$sql= "INSERT INTO robot (Right, Forwards, Left, Backwards) VALUES ('$Right', '$Forwards', '$Left','$Backwards'); ";
 mysqli_query($conn, $sql);
 
