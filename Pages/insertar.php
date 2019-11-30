<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybd";

$p = $_POST['id'];
$i = $_POST['NombreProducto'];
$n = $_POST['MarcaProducto'];
$a = $_POST['PrecioCompra'];
$e = $_POST['CantidadComprada'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (id, NombreProducto, MarcaProducto, PrecioCompra,CantidadComprada)
VALUES ('$p','$i', '$n', '$a', '$e')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>