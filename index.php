<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_index.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>System Palace</title>
</head>

<body>
    <!-- Esta parte es el Formulario del Login -->
    <div class="container">
        <div class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </div>
        <h1>Login</h1>
        <form method="post" action="controller/login_handler.php">
            <label for="usuario">User</label>
            <div class="user-container">
                <input type="text" id="usuario" name="user" placeholder="Enter your user here" required
                    title="Por favor ingrese su usuario">
                <span class="toggle-user"><i class="fa-solid fa-user"></i></span>
            </div>

            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="pass" placeholder="Enter your password here" required
                    title="Por favor ingrese su contraseña">
                <span class="toggle-password"><i class="fas fa-eye-slash"></i></span>
            </div>

            <input name="btningresar" class="btn" type="submit" value="Sign In">
        </form>
    </div>
    <!-- Aqui termina el formulario del login -->

    <!-- llamamos al script de password.js -->
    <script src="assets/js/password.js"></script>


    <!-- Bloquear inspeccionar de google -->
    </script>
    <script type="text/javascript">
        document.oncontextmenu = function () {
            return false;
        }
    </script>

</body>

</html>