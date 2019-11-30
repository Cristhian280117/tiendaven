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

$sql = "UPDATE MyGuests SET NombreProducto='$i', MarcaProducto='$n', PrecioCompra='$a',CantidadComprada= '$e'  WHERE id='$p'";

if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 