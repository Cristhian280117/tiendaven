 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(30) PRIMARY KEY,
NombreProducto VARCHAR(30) NOT NULL,
MarcaProducto VARCHAR(30) NOT NULL,
PrecioCompra INT (30) NOT NULL,
CantidadComprada INT(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla invitados creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 