<!-- guardar.php -->
<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$bodega = $_POST['bodega'];

$sql = "INSERT INTO articulos(nombre, marca, cantidad, bodega)
VALUES('$nombre','$marca','$cantidad','$bodega')";

if($conn->query($sql) === TRUE){
    header("Location: index.php");
}else{
    echo "Error: " . $conn->error;
}
?>