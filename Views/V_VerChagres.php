<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="JS/main.js"></script>

</head>
<body>
<section class="inicio" id="1">
        <header>
            <div class="menu">
                <ul>
                    <li class="1 active"><a onclick="Cambiar(1)" href="#1">INICIO</a></li>
                    <li class="2"><a onclick="Cambiar(2)" href="#2">JUNTA</a></li>
                    <li class="3"><a onclick="Cambiar(3)" href="#3">RECREACION</a></li>
                    <li class="4"><a onclick="Cambiar(4)" href="#4">HISTORIA</a></li>
                    <li class="5"><a onclick="Cambiar(5)" href="#5">TIENDAS</a></li>
                </ul>
            </div>
        </header>
        <div class="ContenedorClavado"> </div>

        <!--FONDO TRANSPARENTE-->
        <div class="FondoTransparente"></div>
        <!--FIN-->

        <!--DIV QUE CONTIENE LA DESCRIPCION DE ONELIFE-->
        <div class="CONTENT">

            <?php
            foreach($contenido as $cont){
                
                echo "<div class="."TITULO".">";
                echo "<p>".$cont['Nombre']."</p>";
                echo "</div>";
                echo "<div class="."PARRAFO".">";
                echo "<p>".$cont['descripcion']."</p>";
                echo "</div>";
            }    
            ?>
            <a href="">MAS</a><!-----------------------Boton de MAS-->
        </div>
        <!--FIN-->
    </section>

    <section class="SegundaSection" id="2">
            <div class="Contenido">
                <div class="imagen"><img src="IMG/Junta.jpeg" alt=""></div>
                <div class="Descripcion">

                    <div class="tarjeta">
                        <div class="Titulo"><h2>Junta Comunal Chilibre</h2></div>
                        <div class="Representante">
                                <p>Representante: Yoira Perea</p>
                                <p>Teléfono: 216-2119/ 216-3065</p>
                        </div>

                        <a href="#1" class="boton">Mapa</a>
                    </div>
                    
                </div>
            </div>
    </section>

    <section class="Recreacion" id="3">
            <div>
                
            </div>
    </section>
</body>
</html>