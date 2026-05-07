<!-- index.php -->
<?php
 include("conexion.php");
 
 $sql = "SELECT * FROM articulos";
 $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Artículos</title>

    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            padding:20px;
        }

        .container{
            width:800px;
            margin:auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            padding:10px 20px;
            background:blue;
            color:white;
            border:none;
            margin-top:10px;
            cursor:pointer;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            color:red;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Registro de Artículos</h2>

    <form action="guardar.php" method="POST">

        <input type="text" name="nombre" placeholder="Nombre del artículo" required>

        <input type="text" name="marca" placeholder="Marca" required>

        <input type="number" name="cantidad" placeholder="Cantidad" required>

        <input type="text" name="bodega" placeholder="Bodega" required>

        <button type="submit">Guardar</button>

    </form>

    <h2>Lista de Artículos</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Bodega</th>
            <th>Acciones</th>
        </tr>

        <?php
        $sql = "SELECT * FROM articulos";
        $resultado = $conn->query($sql);

        while($fila = $resultado->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['marca']; ?></td>
            <td><?php echo $fila['cantidad']; ?></td>
            <td><?php echo $fila['bodega']; ?></td>

            <td>
                <a href="eliminar.php?id=<?php echo $fila['id']; ?>">
                    Eliminar
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>