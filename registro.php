<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Registrarse</title>
    <!-- <link rel="stylesheet" href="css/register.css"> -->
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="fondo-img">
        <img src="recursos-img/bici-footer3.jpg" alt="">
    </div>
    <div class="fondo"></div>
    <div class="log">
        <div class="log-in">
            <h1>Registrarse</h1>
            <input type="text" placeholder="Nombres" required>
            <input type="text" placeholder="Apellidos" required>
        </div>
        <div class="log-as">
            <input type="email" placeholder="Correo Electronico" required>
            <input type="password" placeholder="password" required>
    
        </div>
        <div class="log-año">
            <label class="date">
                <input type="date"><p>fecha de nacimiento</p>
            </label>
    
    
        </div>
        <div class="sexo">
        <label for="Hombre">
            <input id="Hombre" type="checkbox"> Hombre
        </label>
        <label for="Mujer">
            <input id="Mujer" type="checkbox"> Mujer
        </label>
        </div>
        <div class="log-bt">
            <button type="submit" class="bt"> registrarme</button>
            <a class="secion-btn" href="">Iniciar Cecion</a>
        </div>
        <div class="texto">
            
            <p> Es posible que personas que personas que usan nuestro servicio hayan subido tu informacion, al dar click en "registrarme" aceptas nuestras politicas. </p>
        </div>
        </div>
    </div>
    
    <script type="text/javascript">
        var Hombre = document.getElementById("Hombre");
        var Mujer = document.getElementById("Mujer");

        Hombre.addEventListener("click", ()=>{
            if(Mujer.checked == true){
                // alert("error");
                Mujer.checked = false;
                Hombre.checked = true;
            }else{

            }
        });
        Mujer.addEventListener("click", ()=>{
            if(Hombre.checked == true){
                // alert("error");
                Hombre.checked = false;
                Mujer.checked = true;
            }
        });
    </script>   
</body>
</html>