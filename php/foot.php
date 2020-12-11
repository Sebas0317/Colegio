<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escribenos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$correo=$_POST['correo1'];
$mensaje=$_POST['mensaje1'];
$sql = "INSERT INTO invitados (correo, mensaje) VALUES ('$correo', '$mensaje')";


if (mysqli_query($conn, $sql)) {
    printf("<script type='text/javascript'>alert('Lo estamos redireccionando'); </script>");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




