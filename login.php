<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "happychild";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
    die("No hay conexión: ".mysqli_connect_error());
}
$nombre = $_POST["username"];
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE user = '".$nombre."' and pass = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    header("Location:postlogin.html");

}
else if ($nr == 0) 
{
    //header("Location: login.html");
    //echo "No ingreso"; 
    echo "<script> alert('Error');window.location= 'login.html' </script>";
}

?>