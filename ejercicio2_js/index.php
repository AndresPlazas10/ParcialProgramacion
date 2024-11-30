<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<form method="post" >
        <?php
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $unidades = $_POST['unidades'];
        $data['registro'];


        foreach ($data['registros'] as $dato) {
            echo '<tr>';
            echo '<td>' . $dato['nombreProducto'] . '</td>';
            echo '<td>' . $dato['categoriaProducto'] . '</td>';
            echo '<td>' . $dato['precioProducto'] . '</td>';
            echo '<td>' . $dato['unidadesProducto'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>