<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ansiedad</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
<article> 
<form action="datos.php" method="post"> 

    <fieldset> 
        <legend>Datos Personales</legend>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required /> 
        <br><br>

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" required />
        <br><br>

        <label for="cor">Correo:</label>
        <input type="email" name="cor" id="cor" placeholder="example@gmail.com" required />
        <br><br>
    </fieldset>

    <br>

    <fieldset>
        <legend>Encuesta sobre la Ansiedad</legend>

        <label>1. ¿Te consideras una persona que sufre ansiedad?</label><br>
        <input type="radio" name="ans1" value="Sí" required> Sí
        <input type="radio" name="ans1" value="A veces"> A veces
        <input type="radio" name="ans1" value="No"> No
        <br><br>

        <label>2. ¿Qué síntomas experimentas?</label><br>
        <input type="checkbox" name="sym[]" value="Nerviosismo"> Nerviosismo<br>
        <input type="checkbox" name="sym[]" value="Dificultad para respirar"> Dificultad para respirar<br>
        <input type="checkbox" name="sym[]" value="Tensión en el cuerpo"> Tensión en el cuerpo<br>
        <input type="checkbox" name="sym[]" value="Pensamientos negativos"> Pensamientos negativos<br>
        <input type="checkbox" name="sym[]" value="Otro"> Otro
        <br><br>

        <label for="ans2">3. ¿En qué situaciones sientes más ansiedad?</label><br>
        <select name="ans2" id="ans2" required>
            <option value="">Selecciona una opción</option>
            <option value="En la escuela">En la escuela</option>
            <option value="En casa">En casa</option>
            <option value="En lugares públicos">En lugares públicos</option>
            <option value="Cuando estoy solo/a">Cuando estoy solo/a</option>
            <option value="En situaciones sociales">En situaciones sociales</option>
        </select>
        <br><br>

        <label for="ans3">4. ¿Qué haces normalmente para calmar tu ansiedad?</label><br>
        <textarea name="ans3" id="ans3" rows="3" required></textarea>
        <br><br>

        <label for="juego">5. ¿Cómo te gustaría que fuera un videojuego sobre la ansiedad?</label><br>
        <textarea name="juego" id="juego" rows="4" placeholder="Describe cómo te gustaría el juego..." required></textarea>
        <br><br>

    </fieldset>

    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" name="proceso" />

</form>
</article>
</body>
</html>
 