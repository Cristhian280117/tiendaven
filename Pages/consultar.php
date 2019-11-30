 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybd";
$id = $_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, NombreProducto, MarcaProducto,PrecioCompra,CantidadComprada FROM MyGuests WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - NombreProducto: " . $row["NombreProducto"]. " - MarcaProducto : " . $row["MarcaProducto"]. " - PrecioCompra : " . $row["PrecioCompra"].             "  CantidadComprada : ". $row["CantidadComprada"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>