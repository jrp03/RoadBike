<?php
    $page_section = "carrito.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.ico" type="image/x-icon">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/articulo.css">
</head>
<body>
        
    <?php require_once "php/header.php"; ?>

    

        <div class="fondo-img">
            <img src="recursos-img/bici-footer3.jpg" alt="">
        </div>


        <main class="main">
            <div class="main-content">
               
                <div>

                    <div  class="panel-articulo">
                        <div class="header-articulo">
                            <img src="recursos-img/bici-footer2.jpg" alt="">
                        </div>
                        <div class="panel-articulo-title">
                            <h2>Bicicleta para Montaña</h2>
                        </div>
                        <div class="panel-articulo-content">
                            <h2>Bicicleta para montaña</h2>

                            <p>Descripcion</p>

                            <h4>Caracteristicas</h4>
                            <table>
                                <tr>
                                    <td>Articulo: </td>
                                    <td>Articulo: </td>
                                </tr>
                                <tr>
                                    <td>Articulo: </td>
                                    <td>Articulo: </td>
                                </tr>
                                <tr>
                                    <td>Articulo: </td>
                                    <td>Articulo: </td>
                                </tr>
                                <tr>
                                    <td>Articulo: </td>
                                    <td>Articulo: </td>
                                </tr>

                            </table>
                        </div>
                        <div class="panel-articulo-footer">
                            <a href="pedido.html" class="btn-comprar">Comprar</a>
                            <img src="recursos-img/pagos.jpg" alt="" width="100px">
                        </div>
                    </div>

                </div>
                <div class="panel-right">

                    <div  class="panel-contenido-rigth">
                         <div class="panel-contenido-header">

                        </div>
                        <div class="panel-contenido-content">

                        </div>
                    </div>

                </div>

            </div>
        </main>


       <?php require_once "php/footer.php"; ?>
   

        
        
       <script src="js/jquery.js"></script>
       <script src="js/script.js"></script>
</body>
</html>