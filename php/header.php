<header class="header-container">
    <header class="header">
       <div class="logo">
            <img src="icon/icon.jpg" alt="">
            <a href="#">RoadBike</a>
       </div>
       <div class="nav">
            <ul>
                <li>
                    <a      <?php 
                                if($page_section == "index.php"){ 
                                    echo "class='active'"; 
                            }?>
                            href="index.php">
                                Inicio
                    </a>
                </li>
                <li>
                    <a 
                            <?php 
                                if($page_section == "carrito.php"){ 
                                    echo "class='active'"; 
                            }?>
                        href="carrito.php">
                        Carrito
                    </a>
                </li>
                <li>
                    <a 
                    <?php 
                            if($page_section == "login.php"){ 
                                    echo "class='active'"; 
                            }?>
                        href="login.php">
                        Inicia Seción
                    </a>
                </li>
                <li>
                    <a      <?php 
                                if($page_section == "registro.php"){ 
                                    echo "class='active'"; 
                            }?>
                        
                        href="registro.php">
                        Registrar
                    </a>
                </li>
            </ul>
       </div>
    </header>
    <!-- <div class="btm-header">
        <div class="btm-header-content">
            <p>Sucursal</p>
            <input hidden class="sucs" type="checkbox" name="" id="sucs">
            <label for="sucs" id="">
                <p class="btn" id="elejir">Elejir</p>
            </label>
            
                <ul class="btm-suc">
                    <li><a href="">C.P Independencia #10</a></li>
                    <li><a href="">C.P Independencia #11</a></li>
                    <li><a href="">C.P Independencia #12</a></li>
                </ul>
        </div>
    </div> -->
</header>