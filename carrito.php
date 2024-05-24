<?php
    $page_section = "carrito.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.ico" type="image/x-icon">
    <title>Confirmar Compra</title>
    <!-- css -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/pedido.css">
</head>
<body>
        
    <?php require_once "php/header.php"; ?>
    
    <div class="main">
        <div class="main-content">
            
            <div class="card-form">
                <div class="form-card">
                    <div class="form-left">
                        <div class="card-title">
                            <h1>Tús Articulos (1)</h1>
                        </div>
                        
                        <div class="productos">
                        
                                <div class="box-product">
                                    <div class="box-prodcut-content">
                                        <div class="img">
                                            <img src="recursos-img/bici-electrica.jpg" alt="">
                                        </div>
                                        <div class="box-product-info">
                                            <div class="box-product-title">
                                                Bisicleta
                                            </div>
                                            <div class="box-product-title">
                                                Marca mercurio
                                            </div>
                                            <div class="box-product-descr">
                                                color: blanco, tamaño 120cm x 50cm
                                            </div>
                                        </div>
                                        <div class="box-product-confirm">
                                            <button><img src="recursos-img/img/eliminar.png" alt=""></button>
                                            <input type="checkbox" name="" id="">
                                        </div>
                                    </div>
                                    <div class="box-product-price">
                                        <div>Envio: $120</div>
                                        $1200
                                    </div>
                                </div>
                        
                        </div>

                        <div class="form-banner-total">
                            <table>
                                <tr>
                                    <td>Envio:</td>
                                    <td class="Total" style="text-align:end;">...</td>
                                </tr>
                                <tr>
                                    <td>Articulos:</td>
                                    <td class="Total" style="text-align:end;">...</td>
                                </tr>
                                <tr >
                                    <td>Total:</td>
                                    <td style="color: green; text-align:end;" >$0</td>
                                    
                                </tr>
                                <tr >
                                    <td></td>
                                    <td  style="text-align:end; display:flex;"> 
                                        <a class="btn-pagar" href="compra.php">Ir a Pagar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <!-- <div class="fondo-img">
        <img src="recursos-img/bici-footer3.jpg" alt="">
    </div>
         -->
       <script src="js/jquery.js"></script>
       <script src="js/script.js"></script>
</body>
</html>