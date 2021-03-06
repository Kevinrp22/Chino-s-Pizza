<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- MAIN JS -->
    <script src="main.js"></script>
    <!-- BootStrap -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/9d699014b9.js" crossorigin="anonymous"></script>
    <!-- FONT GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Finger+Paint|Frijole|Lato&display=swap" rel="stylesheet">
</head>
</head>

<body>
    <!-- COPIAR DESDE AQUI HASTA -->
    <div id="sidebar">
        <ul>
            <li id="logo-sidebar"><a href="../Inicio/inicio.html" class="logo-hovernone"><img
                        src="../../assets/logo.png" alt="" style="width: 265px;"></a></li>
            <a href="../Inicio/inicio.html">
                <li>
                    <i class="fas fa-home px-1"></i>Inicio
                </li>
            </a>

            <a href="">
                <li>
                    <i class="fas fa-book-open px-1"></i>Carta
                </li>
            </a>

            <a href="../Personalizar-pizzas/personalizar-pizzas.html">
                <li>
                    <i class="fas fa-pizza-slice px-1"></i>Personaliza tu pizza
                </li>
            </a>
            <a href="">
                <li>
                    <i class="fas fa-book-open px-1"></i>Menu
                </li>
            </a>
        </ul>
    </div>
    <div id="contenedor-arriba">
        <div class="contenedor-logo">
            <div id="logo">
                <a href="../Inicio/inicio.html">
                    <img src="../../assets/logo.png" alt="" style="width: 265px;">
                </a>
            </div>

        </div>
        <button id="boton-carrito" class="boton-carrito boton-nodespleg" type="button" style="display: none; ">
            <i class="fas fa-shopping-cart"></i>
        </button>

        <div class="barra py-1">
            <button id="boton-menu" type="button" style="display: none;">
                <i class="fas fa-bars"></i>
            </button>
            <button id="boton-menu" class="boton-carrito" type="button" style="display: none; ">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>




    </div>


    <!-- MENU -->


    <div class="header">
        <div class="container">
            <nav class="menu">
                <ul>
                    <a href="../Inicio/inicio.html">
                        <li>
                            <i class="fas fa-home px-1"></i>Inicio
                        </li>
                    </a>

                    <a href="">
                        <li>
                            <i class="fas fa-book-open px-1"></i>Carta
                        </li>
                    </a>

                    <a href="../Personalizar-pizzas/personalizar-pizzas.html">
                        <li>
                            <i class="fas fa-pizza-slice px-1"></i>Personaliza tu pizza
                        </li>
                    </a>
                    <a href="">
                        <li>
                            <i class="fas fa-book-open px-1"></i>Menu
                        </li>
                    </a>
                </ul>

            </nav>
            <div class="contenedor-texto-principal text-center">
                <p class="texto-principal  "></p>
                <p class="texto-principal ">Carrito</p>
                <p class="texto-segundario "></p>
                <!-- <button class="botonPrincipal">
                    <a href="#">Empezar con mi pedido</a>
                </button> -->
            </div>

        </div>
    </div>
    <!-- HASTA AQUI-->
    <div class="container">
        <div class="contenedorinfo">
            
        </div>
    </div>
</body>

</html>