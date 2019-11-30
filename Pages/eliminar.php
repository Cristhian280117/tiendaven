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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Registro eliminado";
} else {
    echo "Error eliminando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 