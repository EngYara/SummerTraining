<?php
$Right = filter_input(INPUT_POST, 'Right');
$Forwards = filter_input(INPUT_POST, 'Forwards');
$Left = filter_input(INPUT_POST, 'Left');
$Backwards = filter_input(INPUT_POST, 'Backwards');

// Create connection
$conn = new mysqli ($localhost, $Yara, $test1234, $robot_control);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO robot (Right, Forwards, Left, Backwards)
values ('$Right','$Forwards', '$Left', '$Backwards')";

if ($conn->query($sql)){
echo "SUCSESS";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

?>
