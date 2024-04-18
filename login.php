<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/registers.css">
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario</title>
</head>
<body>
    <div class="fondo-img">
        <img src="recursos-img/bici-footer3.jpg" alt="">
    </div>
    <div class="fondo"></div>
    <div class="log">
        <div class="wrapper">
            <form action="" method="POST">
                <h1>Iniciar Sesion</h1>
                <div class="input-box">
                    <input type="email" placeholder="Correo" required>
                    <i class='bx bxs-user' ></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> recordar contraseña</label>
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn"> login</button>
                    <div class="register-link">
                        <p>¿Aun no te has registrado? <a href="registrarse.html">Registrar</a></p>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>