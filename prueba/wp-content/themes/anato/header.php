<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page">
        <header id="masterhead" class="site-header" role="banner">
            <div class="topnav">
                <a class="active"><img src="https://anato.org/wp-content/uploads/2019/11/logo-web-anato-1-1.png"></a>
                <a href="#">Home</a>
                <a href="#">Nodotros</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Buscar.." name="Buscar">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div style="padding-left:16px">
                <h2>Responsive Search Bar</h2>
                <p>Navigation bar with a search box and a submit button inside of it.</p>
                <p>Resize the browser window to see the responsive effect.</p>
            </div>
        </header>
    </div>


    <div id="contenido" class="container"></div>