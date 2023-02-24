<?php
session_start();
header('localhost:login.php');
$conn = mysqli_connect('localhost','root');
if($conn){
    echo"connection successful";
}
else {
    echo"no connection";
}


mysqli_select_db($conn,'project');

$username = $_POST['username'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$username' && password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);
if ($num == 1) {
    echo"Dublicate data...!";
}
else {
    $qy = "insert into signin(name , password) values ('$username' , '$pass')";
    mysqli_query($conn, $qy);
}

?>