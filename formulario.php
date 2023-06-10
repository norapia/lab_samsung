<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Registro de usuarios</h2>
        <form method="POST" action="registro.php">
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" placeholder="Nombre" required><br><br>
            <label for="apellido1">Apellido1:</label><br>
            <input type="text" name="apellido1" placeholder="Primer apellido" required><br><br>
            <label for="apellido2">Apellido2:</label><br>
            <input type="text" name="apellido2" placeholder="Segundo apellido" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <label for="login">Login:</label><br>
            <input type="text" name="login" placeholder="Login" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Password" pattern=".{4,8}" title="La contraseña debe tener entre 4 y 8 caracteres" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>