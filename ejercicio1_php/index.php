<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vueltas = intval($_POST['vueltas']);
    $tiempoA = floatval($_POST['tiempoA']);
    $tiempoB = floatval($_POST['tiempoB']);

    if ($tiempoA <= 0 || $tiempoB <= 0 || $tiempoA == $tiempoB) {
        echo "<p>Por favor, ingrese tiempos válidos y diferentes.</p>";
        exit;
    }

    echo "<h1>Resultados de las vueltas</h1>";
    echo "<table>
            <tr>
                <th>Vuelta</th>
                <th>Tiempo acumulado Corredor A (min)</th>
                <th>Tiempo acumulado Corredor B (min)</th>
            </tr>";

    for ($i = 1; $i <= $vueltas; $i++) {
        $tiempoTotalA = $i * $tiempoA;
        $tiempoTotalB = $i * $tiempoB;

        echo "<tr>
                <td>$i</td>
                <td>$tiempoTotalA</td>
                <td>$tiempoTotalB</td>
              </tr>";

        if ($tiempoTotalA == $tiempoTotalB) {
            echo "<tr>
                    <td colspan='3'><strong>¡Coinciden en la vuelta $i!</strong></td>
                  </tr>";
        }
    }

    echo "</table>";
    echo "<a href='index.html'>Volver</a>";
}
?>
