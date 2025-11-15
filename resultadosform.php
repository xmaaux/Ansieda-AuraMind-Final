<?php
if (isset($_POST['proceso']) 
    && !empty($_POST['name']) 
    && !empty($_POST['age']) 
    && !empty($_POST['cor'])
    && !empty($_POST['ans1'])
    && !empty($_POST['ans2'])
    && !empty($_POST['ans3'])
    && !empty($_POST['juego'])
) {

    $nombre  = $_POST['name'];
    $edad    = $_POST['age'];
    $email   = $_POST['cor'];

    $ans1    = $_POST['ans1'];
    $ans2    = $_POST['ans2'];
    $ans3    = $_POST['ans3'];
    $juego   = $_POST['juego'];

    // síntomas (checkbox)
    $sintomas = isset($_POST['sym']) ? implode(", ", $_POST['sym']) : "No seleccionó síntomas";

    echo "<h2>Resultados de tu Encuesta</h2>";

    echo "<b>Nombre:</b> $nombre <br>";
    echo "<b>Edad:</b> $edad años <br>";
    echo "<b>Correo:</b> $email <br><br>";

    echo "<b>¿Sufres ansiedad?:</b> $ans1 <br>";
    echo "<b>Síntomas:</b> $sintomas <br>";
    echo "<b>Situaciones donde sientes ansiedad:</b> $ans2 <br>";
    echo "<b>Cómo la controlas:</b> $ans3 <br><br>";

    echo "<h3>Tu opinión del videojuego:</h3>";
    echo "$juego <br>";

} else {
    echo "Faltan datos por llenar, por favor regresa y completa el formulario.";
}
?>
   