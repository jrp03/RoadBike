<?php
    $page_section = "rastrear.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.ico" type="image/x-icon">
    <title>Document</title>
    <!-- css  -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- css this file -->
    <link rel="stylesheet" href="css/rastrear.css">
</head>
<body>
        
    <?php require_once "php/header.php"; ?>


    
    <main class="main-rastrear-panel">
        <div class="main-rastrear">
            <div class="panel-banner">
                <h1>Rastrear Pedido</h1>
                <form action="">
                    <input type="text" name="" id="" placeholder="Codigo De Rastreo">
                    <input type="submit" value="Buscar">
                </form>
            </div>
            <div class="info-rastrear" id="info-rastrear">
                <div class="info-mapa">
                    <img src="recursos-img/mapa.png" alt="">
                </div>
                <div class="info-boxs">
                    <div class="info-content">
                        <div class="info-list-content">
                            <h1>Informacion de tu pedido</h1>
                            <ul>
                                <li>
                                    <p>Salio de cedis </p>
                                    <ol>
                                        <li>Hora salida: 12:20 pm</li>
                                        <li>Hora de llegada: 16:00 pm</li>
                                    </ol>
                                </li>
                                <li>
                                    <p>Se Recibio tu paquete, y ya puedes recojerlo</p>
                                    <ol>
                                        <li>Hora de llegada: 17:00 pm</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-datos-user">
                        <div class="">
                            datos de quien recibe - datos de quien recibio si no estaba el dueño
                            ubicacion a enviar Pedido
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

        
        
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>