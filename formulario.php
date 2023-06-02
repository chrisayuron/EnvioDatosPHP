<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio Datos por get y post</title>
</head>
<body>
    <h1>Formulario metodo GET</h1>
    <form name="envia-get" action="envia_datos.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"/>
        <br/>
        <label for="password">password</label>
        <input type="password" name="password" id="password" />
        <br />
        <input type="submit" name="enviar-get" value="ENVIAR">

    </form>

    <h1>Formulario metodo POST</h1>
    <form name="envia-post" action="envia_datos.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"/>
        <br/>
        <label for="password">password</label>
        <input type="password" name="password" id="password" />
        <br />
        <input type="submit" name="enviar-post" value="ENVIAR">

    </form>
</body>
</html>
<form>