<?php
require('C:\xampp\htdocs\teslaelectronics\fpdf/fpdf.php');


$host = "localhost";
$user = "root";
$cont = "";
$db = "mybd";

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('C:\xampp\htdocs\teslaelectronics\imagenes/computador1.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Productos',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}


$conec = mysqli_connect($host,$user,$cont,$db);
// Check connection
if (!$conec) {
    die("Connection failed: " . mysqli_connect_error());
}







$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(15,20,'ID');
$pdf->Cell(30,20,'Nombre');
$pdf->Cell(30,20,'Marca');
$pdf->Cell(30,20,'Precio');
$pdf->Cell(60,20,'CantidadComprada');
$pdf->Cell(-165,20,'FECHA',0,1,);




$query_select = 'SELECT * FROM myguests';
$result = mysqli_query($conec,$query_select );

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($reg = mysqli_fetch_assoc($result)) {
    	

$pdf->Cell(15,20, $reg['id'],1,0,'C', 0);
$pdf->Cell(30,20, $reg['NombreProducto'],1,0,'C', 0);
$pdf->Cell(30,20, $reg['MarcaProducto'],1,0,'C', 0);
$pdf->Cell(30,20, $reg['PrecioCompra'],1,0,'C', 0);
$pdf->Cell(30,20, $reg['CantidadComprada'],1,0,'C', 0);
$pdf->Cell(60,20, $reg['reg_date'],1,1,'C', 0);

    }
}



$pdf->Output();
?>
