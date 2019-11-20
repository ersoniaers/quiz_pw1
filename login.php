<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_pw";

$conn = mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
    die ("connection gagal:".mysqli_connect_error());
}
$sql = 'SELECT * from mahasiswa where username = $_POST[text username] AND password =$_POST[text password]';

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows ($result) > 0) {
    while($rows= mysqli_fetch_assoc ($result)){
    header ('location : home.php');
}
else {
    echo "long error"
}
mysqli_close($conn);

?>

