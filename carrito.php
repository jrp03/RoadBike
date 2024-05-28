<?php
    $page_section = "carrito.php";
    include_once "php/db.php";
    include_once  "php/class.php";
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

    <div class="main_card_pay"  id="main_card_pay">
            
            <div class="card-form">
                <div class="form-card">
                    <button type="text" class="btn-close" id="btn-close">
                        <img src="recursos-img/img/eliminar.png" alt="">
                    </button>
                    <!-- <div class="form-left">
                        <div class="card-title">
                            <h1>Articulos (1)</h1>
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
                                    </div>
                                    <div class="box-product-price">
                                        $1,250
                                    </div>
                                </div>
                        
                        </div>

                        <div class="form-banner-total">
                            <table>
                                <tr>
                                    <td>Envio:</td>
                                    <td class="Total">gratis</td>
                                </tr>
                                <tr >
                                    <td>Total:</td>
                                    <td style="color: green;">$1,250</td>
                                </tr>
                            </table>
                        </div>

                    </div> -->
                    <div class="form-rigth">
                        
                        <div class="form-content">
                            
                            <div class="card-title">
                                <h1>Confirmar Compra</h1>
                            </div>

                            <form action="" method="post">
                                <div class="form-contact">
                                    <div class="bx-1">
                                        <div class="bx-1">
                                            <h3>Total a pagar: $<span id="total2"></span></h3>
                                        </div>
                                        <h3>Datos de contactos</h3>
                                        <div class="bx-1">
                                            <!-- <p>Nombre</p> -->
                                            <input type="text" placeholder="Nombre de quien Recibe" required>
                                        </div>
                                        <div class="bx-1">
                                            <!-- <p>Apellido</p> -->
                                            <input type="text" placeholder="Apellido" required>
                                        </div>
                                        <div class="bx-1">
                                            <!-- <p>Apellido</p> -->
                                            <input type="number" placeholder="Numero de celular" max="10" required>
                                        </div>
                                    </div>
                                    <div class="bx-1">
                                        <h3>Lugar de entrega</h3>
                                        <div class="bx-2">
                                            <input type="number" name="" id="" placeholder="codigo postal" required>
                                            <input type="text" name="" id="" placeholder="Estado" required>
                                        </div>
                                        <div class="bx-2">
                                            <input type="text" name="" id="" placeholder="Ciudad" required>
                                        </div>
                                        <div class="bx-2">
                                            <textarea name="" id="" required placeholder="Calle, numero de casa, color de casa, calle, colonia, referencias"></textarea>
                                        </div>
                                    </div>
                                    <div class="bx-1">
                                        <h3>Datos de la tarjeta</h3>
                                        <div class="bx-1">
                                            <!-- <p>Número de tarjeta</p> -->
                                            <input type="number" name="" id="" maxlength="16" minlength="16" placeholder="Número de tarjeta">
                                        </div>
                                        <div class="bx-2">
                                            <input type="date" name="" id="">
                                            <input type="number" name="" id="" placeholder="CVV">
                                        </div>
                                    </div>
                                </div>
                                <!-- <p>Al concluir con la compra se te enviara un codigo de rastreo. <br> un codigo qr con el que pasaras a la sucursal para recojer</p> -->
                                <div class="form-banner-total">
                                    <input type="submit" value="Comprar">
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        
        </div>
    
    <div class="main">
        <div class="main-content">
            
            <div class="card-form">
                <div class="form-card">
                    <div class="form-left">
                        <div class="card-title">
                            <h1>Tús Articulos (1)</h1>
                        </div>
                        
                        <div class="productos">
                            <?php 
                                for($i = 0; $i < 3; $i++){ ?>

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
                                            <input type="number" name="" value="1<?php echo $i; ?>" id="price" class="price" hidden="true">
                                            <input type="number" name="" value="2<?php echo $i; ?>" id="envio" class="envio"  hidden="true">
                                            <input type="checkbox" name="" id="check" class="check">
                                        </div>
                                    </div>
                                    <div class="box-product-price">
                                        <div>Envio: $1<?php echo $i; ?></div>
                                        <div>Precio: $2<?php echo $i; ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <input type="number" value="0" id="iprecio_envio" hidden="true">
                        <input type="number" value="0" id="articulo_input" hidden="true">
                        <input type="number" value="0" id="original" hidden="true">
                        <div class="form-banner-total">
                            <table>
                                <tr>
                                    <td>Envio:</td>
                                    <td class="Total" style="text-align:end;" >$<span id="senvio">0</span></td>
                                </tr>
                                <tr>
                                    <td>Articulos:</td>
                                    <td class="Total" style="text-align:end;">$<span  id="precio_articulos">0</span></td>
                                </tr>
                                <tr >
                                    <td>Total:</td>
                                    <td style="color: green; text-align:end;" >$<span id="total">0</span></td>
                                    
                                </tr>
                                <tr >
                                    <td></td>
                                    <td  style="text-align:end; display:flex;"> 
                                        <!-- <a class="btn-pagar" href="compra.php">Ir a Pagar</a> -->
                                        <button class="btn-pagar" id="btn_pagar">Pagar</button>
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
       <script type="text/javascript">
            window.onload = function () {

                var btn_close = document.getElementById("btn-close");
                var btn_pagar = document.getElementById("btn_pagar");

                
                var check = document.getElementsByClassName("check");
                var price = document.getElementsByClassName("price");
                var envio = document.getElementsByClassName("envio");
                var total = document.getElementById("total");
                var total2 = document.getElementById("total2");
                var original = document.getElementById("original");
                var precio_articulos = document.getElementById("precio_articulos");
                var articulo_input = document.getElementById("articulo_input");
                var iprecio_envio = document.getElementById("iprecio_envio");
                var senvio = document.getElementById("senvio");
                
                
                class clases {
                    agregar(){

                    }
                    elimiar(){

                    }
                    CalcularPrecio(){

                    }
                    restar(precio, envio, originals, articulos_original){
                        var price = parseInt(precio);
                        var send = parseInt(envio);
                        var orig = parseInt(originals);
                        var articulos_original = parseInt(articulos_original);
                        var remove = send + price;
                        original.value = orig-remove;
                        total.innerHTML = orig-remove;
                        total2.innerHTML = orig-remove;
                        // console.log(remove, "remove")


                        // restar el precio de los articulos
                        var remove_articulos = articulos_original - price;
                        articulo_input.value = remove_articulos;
                        precio_articulos.innerHTML = remove_articulos;


                        // restar el precio envio
                        var remove_envio = articulos_original - price;
                        iprecio_envio.value = remove_envio;
                        senvio.innerHTML = remove_envio;
                    }
                    sumar(precio, envio, originals){
                        var price = parseInt(precio);
                        var send = parseInt(envio);
                        var origs = parseInt(originals);
                        var totalA = price + send;
                        
                        total.innerHTML = totalA + origs;
                        total2.innerHTML = totalA + origs;
                        original.value = totalA + origs;
                        // console.log(price, send, "agregar")
                    }
                    articulos(precio, envio, originals){
                        var price1 = parseInt(precio);
                        var send1 = parseInt(envio);
                        var price_orig1 = parseInt(originals);
                        var totalArticulos = price1 + price_orig1;
                        articulo_input.value = totalArticulos;
                        precio_articulos.innerHTML = totalArticulos;
                    }
                    envio(envio, originals){
                        var  envio_envio = parseInt(envio);
                        var  original_envio = parseInt(originals);
                        var total_envio = envio_envio + original_envio;

                        iprecio_envio.value = total_envio;
                        senvio.innerHTML = total_envio;
                    }
                }

                var funciones = new clases();

                for(let i = 0; i < check.length; i++){
                    check[i].addEventListener('click', function() {
                        // console.log(check[i], price[i].value, envio[i].value);
                        if(check[i].checked){
                            funciones.sumar(price[i].value, envio[i].value, original.value);
                            funciones.articulos(price[i].value, envio[i].value, articulo_input.value);
                            funciones.envio(envio[i].value, iprecio_envio.value);
                        }else{
                            funciones.restar(price[i].value, envio[i].value, original.value,articulo_input.value);
                        }
                    });
                }


                btn_close.addEventListener("click", ()=>{
                    var btn_closeE = document.getElementById("main_card_pay");
                    btn_closeE.style.display = "none";
                });
                btn_pagar.addEventListener("click", ()=>{
                    var btn_pagar_valor = parseInt(original.value)
                    if(btn_pagar_valor >= 1){
                        var btn_pagarE = document.getElementById("main_card_pay");
                        btn_pagarE.style.display = "flex";
                    }
                });

            }
       </script>
</body>
</html>