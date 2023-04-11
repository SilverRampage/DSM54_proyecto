

<?php

$temperatura = $_GET['temp'];
$humedad = $_GET['hum'];

echo "La temperatura es: ".$temperatura." <br>La humedad es: ".$humedad;

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "dsm54_entrega";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido seleccionar la base de datos" );

$fecha = time();
$consulta = "INSERT INTO dht11 (fecha, temperatura, humedad) VALUES (".$fecha.", ".$temperatura.", ".$humedad.")";

$resultado = mysqli_query( $conexion, $consulta );

?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>