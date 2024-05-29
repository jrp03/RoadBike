<?php
    $page_section = "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.ico" type="image/x-icon">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="css/def.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">


    <!-- jquery  -->
    <script src="js/jquery.js"></script>
</head>
<body>
        
    <?php require_once "php/header.php"; ?>

    

        <div class="fondo-img">
                <img src="recursos-img/bici-footer3.jpg" alt="">
            </div>

        <div class="banner">
            <div class="title">
                <h1>RoadBike, Tienda De Bicicletas</h1>
            </div>
            <div class="r-c-banner">
                <a href="#nuevo">¡Lo Más Nuevo!</a>
            </div>
            <div class="banner-footer">
                <!-- <a href="">Sobre El sitio</a> -->
                <div class="cards-banner">
                    <a href="#taller">
                        <img src="recursos-img/img/llave-inglesa.png" alt="">
                        <p>Taller De Bicis</p>
                    </a>
                    <a href="#componentes">
                        <img src="recursos-img/img/carril-bici.png" alt="">
                        <p>Componentes</p>
                    </a>
                    <a href="sobre-nosotros.php">
                        <img src="recursos-img/img/informacion.png" alt="">
                        <p>Sobre El Sitio</p>
                    </a>
                </div>
            </div>
        </div>

        <main class="main">
            <div class="main-content">
                <div class="main-principal">
                    <div>
                        <div class="box-title">
                            <h1>¡Bienvenidos!</h1>
                        </div>
                        <div class="main-card-box">
                            <div class="box-rigth">
                                <div class="box-img">
                                    <img src="recursos-img/Horizontes1.png" alt="">
                                </div>
                                <div class="box-content-rigth">
                                    <span class="content-title-b">Nuestros Productos</span>
                                    <!-- <h3>bicicleta mercurio <a href="">Mas Informacion</a></h3>
                                    <p class="price">$5,000</p>
                                    <div class="btn-rigth"> 
                                        <a href="" class="btn-orange">Agregar Al Carrito</a>  <a href="" class="btn-green">Comprar Ahora</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="box-left">
                                <div class="box-content-left">
                                    <p> 
                                        <span class="content-title-b">¡Bienvenidos a RoadBike!</span><br>
                                        En RoadBike, 
                                        estamos dedicados a proporcionarte las
                                        mejores bicicletas y accesorios para 
                                        que disfrutes al máximo de cada paseo.
                                        Ya seas un ciclista experimentado o un
                                        principiante entusiasta, tenemos todo
                                        lo que necesitas para tus aventuras
                                        sobre dos ruedas.
                                    </p>   
                                    <p>
                                        <span class="content-title-b">Explora, Descubre y Disfruta</span> <br>
                                        Desde el
                                        momento en que entras en nuestra tienda, 
                                        nuestro objetivo es ofrecerte una experiencia 
                                        incomparable. Nuestro equipo de expertos 
                                        está siempre listo para brindarte asesoramiento 
                                        personalizado, asegurándose de que encuentres la 
                                        bicicleta perfecta que se ajuste a tu estilo y 
                                        necesidades. Cada uno de nuestros productos ha 
                                        sido seleccionado cuidadosamente para ofrecerte 
                                        la mejor calidad y rendimiento.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-card-box">
                        <div class="box-left">
                            <div class="box-content-left">
                                <p> 
                                    <span class="content-title-b">Nuestras Bicicletas</span><br>
                                    Contamos con una amplia variedad de bicicletas para todas las edades y estilos. Desde bicicletas de montaña robustas y resistentes hasta elegantes bicicletas de carretera, pasando por cómodas bicicletas urbanas y seguras bicicletas infantiles. Trabajamos con las mejores marcas del mercado para garantizar que encuentres la bicicleta que se adapte perfectamente a tus necesidades.
                                </p>   
                                <p>
                                    <span class="content-title-b">Ven a Conocernos</span> <br>
                                    Te invitamos a visitar nuestra tienda ubicada en x, donde podrás ver y probar nuestra increíble selección de bicicletas y accesorios. Nuestro horario de atención es [Horario de Atención], pero también puedes explorar nuestra tienda en línea en cualquier momento para ver nuestras ofertas y realizar compras cómodamente desde tu hogar.
                                </p>
                            </div>
                        </div>
                        <div class="box-rigth">
                            <div class="box-img">
                                <img src="recursos-img/Horizontes2.png" alt="">
                            </div>
                            <div class="box-content-rigth">
                                <span class="content-title-b">!Ven a Conocernos¡</span>
                                <!-- <h3>bicicleta mercurio <a href="">Mas Informacion</a></h3>
                                <p class="price">$5,000</p>
                                <div class="btn-rigth"> 
                                    <a href="" class="btn-orange">Agregar Al Carrito</a>  <a href="" class="btn-green">Comprar Ahora</a>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div>
                    <div class="box-title" id="nuevo">
                        <h1>Nuestros Productos</h1>
                    </div>
                    <div class="main-prodcutos-box">
                        <div id="products_list"></div>
                        <!-- contenido -->
                        <!-- <div class="main-show-box">
                            <a class="img" href="articulo.php">
                                <img src="recursos-img/bici-footer.jpg" alt="">
                            </a>
                            <div class="product-info">
                                <h3>Titulo</h3>
                                <p>Precio $9.5</p>
                                <div class="btns-product">
                                    <a class="btn-buy" href="compra.php" title="Comprar">Buy</a>
                                    <a class="btn-add" href="carrito.php" title="Agregar Al Carrito">
                                        <img src="recursos-img/img/add-carrito.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-show-box">
                            <div class="product-info">
                                <h3>Todos los productos recomendados</h3>
                                <a href="http://">Ver Mas</a> -->
                                <!-- <p>Precio $9.5</p> -->
                            <!-- </div>
                        </div> -->
                    <!-- contenido -->
                </div>
            </div>
            <!-- componentes -->
            <div id="componentes">
                <div class="box-title">
                    <h1>Componentes para tú Bicicleta</h1>
                </div>
                <div class="main-prodcutos-box">
                <!-- contenido -->

                    <!-- <div class="main-show-box">
                        <div class="img">
                            <img src="recursos-img/bici-footer.jpg" alt="">
                        </div>
                        <div class="product-info">
                            <h3>Titulo</h3>
                            <p>Precio $9.5</p>
                            <div class="btns-product">
                                <a class="btn-buy" href="compra.php" title="Comprar">Buy</a>
                                <a class="btn-add" href="carrito.php" title="Agregar Al Carrito">
                                    <img src="recursos-img/img/add-carrito.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->

                    <div id="componentes_list"></div>

                <!-- <div class="main-show-box">
                    <div class="product-info">
                        <h3>Todos los componentes para tu Bicicleta</h3>
                        <a href="http://">Ver Mas</a>
                         <p>Precio $9.5</p> -->
                    </div>
                </div> 
                <!-- contenido -->
            </div>
        </main>
        <div>
            <?php require_once "php/footer.php"; ?>
        </div>        
        
        
    <script type="text/javascript">
        $(document).ready(function() {
            // Cargar el archivo JSON usando jQuery
            $.getJSON('js/list.json', function(data) {
                // Iterar sobre los datos y crear filas para la tabla
                $.each(data, function(index, user) {
                    var element = `
                    <div class="main-show-box">
                        <a class="img" href="articulo.php?id=${user.id}">
                                <img src="${user.img}" alt="">
                            </a>
                        <div class="product-info">
                            <h3>${user.titulo}</h3>
                            <p>Precio $${user.precio}</p>
                            <div class="btns-product">
                                <a class="btn-buy" href="compra.php" title="Comprar">Buy</a>
                                <a class="btn-add" href="carrito.php" title="Agregar Al Carrito">
                                    <img src="recursos-img/img/add-carrito.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>`;
                    // row.append($('<td></td>').text(user.titulo));
                    // row.append($('<td></td>').text(user.precio));
                    $('#products_list').append(element);
                });
            });

            // Cargar el archivo JSON usando jQuery
            $.getJSON('js/components.json', function(data) {
                // Iterar sobre los datos y crear filas para la tabla
                $.each(data, function(index, user) {
                    var element = `
                    <div class="main-show-box">
                            <a class="img" href="articulo.php?id=${user.id}">
                            <img src="${user.img}" alt="">
                            </a>
                        <div class="product-info">
                            <h3>${user.titulo}</h3>
                            <p>Precio $${user.precio}</p>
                            <div class="btns-product">
                                <a class="btn-buy " href="compra.php" title="Comprar">Buy</a>
                                <a class="btn-add add-to-cart "  data-id="${user.id}" href="carrito.php" title="Agregar Al Carrito">
                                    <img src="recursos-img/img/add-carrito.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>`;
                    // row.append($('<td></td>').text(user.titulo));
                    // row.append($('<td></td>').text(user.precio));
                    $('#componentes_list').append(element);

                });


                // Manejar clic en "Agregar al carrito"
                $('.add-to-cart').on('click', function() {
                    var productId = $(this).data('id');
                    addToCart(productId);
                });


            // Función para agregar al carrito
            function addToCart(id, title, price) {
                var cart = JSON.parse(localStorage.getItem('cart')) || [];
                var existingProduct = cart.find(item => item.id === id);

                if (existingProduct) {
                    existingProduct.quantity += 1;
                } else {
                    cart.push({ id: id, title: title, price: price, quantity: 1 });
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                displayCart();
            }


            });
        });
    </script>
</body>
</html>