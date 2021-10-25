<html>
<head>
<title> Segunda parte del ejercicio</title>
</head>
<body>
<form action="N3P101EstructuresibuclesExercicis3.php" method="post">
    <p>Nombre: <input type="text" name="name"></p>
    <p>Apellido: <input type="text" name="surname"></p>
    <p>Segundo apellido: <input type="text" name="surname2"></p>
    <p>edad: <input type="number" name="age"></p>
    <input type="color" name="color">
    <input type="range" min="0" max="100" name="range">
    <select name="font-size">
            <option>Verdana</option>
            <option>Arial</option>
            <option>Colibri</option>
            <option>Comic Sans</option>
    <input type="submit" value="Enviar">
    <input type="checkbox" id="cbox1" value="first_checkbox"> <label for="cbox1">Desea guardar la informacion?</label>
</form>
</body>
</html>