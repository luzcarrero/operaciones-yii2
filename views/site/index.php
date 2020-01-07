<?php
use app\assets\AppAsset;
use app\models\Notice;
use app\models\FormNotices;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        * {
            font-family: sans-serif;
        }

        nav {
            background-color: black;
        }


        /*HEADER
         el navbar es el que me agrega el espaciado entre el margen y el jumbotrom*/

        .navbar {
            margin-bottom: 0;
        }

        .navbar-brand img {
            display: inline-block;
        }


        /*accedemos a la clase jumbotron en este caso como solo hay uno usamos
         esa directamente para mas jumbotrones usamos otras clases para que
        el mismo estilo no se aplique a todos*/

        .jumbotron {
            background-color: #33acb7;
            padding: 20px 0;
            color: #ffffff;
        }


        /*estilos de la section "main" le agregamos margenes*/

        .main {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .fa-star {
            color: blueviolet;
        }

        .fa-star span {
            color: black;
        }


        /*estilos para los articulos de la clase post*/

        .post {
            padding-bottom: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid #dddddd;
        }

        .post .post-title a {
            color: #363636;
        }

        .post .thumb {
            margin-right: 10px;
            width: 40%;
            float: left;
        }


        /*para ajustar el tamaño de la imagen a la izquierda*/

        .post .thumb img {
            width: 100%;
        }


        /*estilos de los botones le damos un with del 100% para ajustarlos */

        .post .contenedor-botones {
            width: 100%;
        }

        .conteLog {
            width: 10%;
        }

        .log {
            width: 100%;
        }


        /*Media queie para ajustar el responsive de las imagenes */

        @media screen and (max-width: 768px) {
            .post .thumb {
                width: 100%;
                margin-bottom: 20px;
                margin-right: 0;
            }
        }


        /*estilos pagina sobre mi*/

        .caja {
            width: 100%;
            display: flex;
            align-content: center;
        }

        .cajita-uno {
            width: 75%;
            height: 300px;
            text-align: justify;
            margin: 0px auto;
        }

        .cajita-dos {
            width: 200px;
            height: 200px;
            text-align: center;
            background-color: #33ACB7;
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%);
            clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%);
            border-radius: 15px 15px 15px 15px;
        }

        .cajita-dos img {
            width: 100%;
            height: 100%;
        }

        .cajita-dos h2 {
            margin-top: 5%;
        }

        .biografia {
            text-align: justify;
        }

        .pie-sobremi {
            background-color: black;
            color: white;
            height: 60px;
            line-height: 60px;
            font-size: 16px;
        }

        .pie-sobremi a {
            text-decoration: none;
        }
        /*mini formu de las personas que me contacten*/

        .contactame {
            width: 100%;
            display: inline;
            text-align: center;
        }
    </style>
</head>

<body>

<section class="main container">
    <div class="row">
        <div class="posts col-md-9">



            <div class="migas-de-pan">
                <ol class="breadcrumb">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li class="active">Diseño Web</li>
                </ol>
            </div>


            <article class="post  clearfix">
                <a href="#" class="thumb pull-lef conte-img">
                    <img class="img-thumbnail" src="img/HTML5.jpg" alt="javascript"/>
                </a>
                <h2 class="post-title">
                    <a href="#">¿Que es HTML5?</a>
                </h2>
                <p><span class="post-fecha">Marzo-2019</span> por <span class="post-autor"><a href="#">Luz Carrero</a></span></p>
                <p class="post-contenido tex-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cum, ex ipsum iure libero minima numquam omnis sapiente voluptate!
                    Aperiam aut cum deleniti minus nulla quibusdam reprehenderit sint, ullam unde voluptates?
                </p>
                <div class="contenedor-botones">
                    <a href="#" class="btn btn-primary">Leer mas</a>
                    <a href="#" class="btn btn-success">Comentarios <span class="badge">50</span></a>
                </div>
            </article>

            <article class="post  clearfix">
                <a href="#" class="thumb pull-lef conte-img">
                    <img class="img-thumbnail" src="img/CSS.jpeg" alt="javascript"/>
                </a>
                <h2 class="post-title">
                    <a href="#">CSS ¡fácil y rapido!</a>
                </h2>
                <p><span class="post-fecha">Marzo-2019</span> por <span class="post-autor"><a href="#">Luz Carrero</a></span></p>
                <p class="post-contenido tex-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cum, ex ipsum iure libero minima numquam omnis sapiente voluptate!
                    Aperiam aut cum deleniti minus nulla quibusdam reprehenderit sint, ullam unde voluptates?
                </p>
                <div class="contenedor-botones">
                    <a href="#" class="btn btn-primary">Leer mas</a>
                    <a href="#" class="btn btn-success">Comentarios <span class="badge">50</span></a>
                </div>
            </article>

            <article class="post  clearfix">
                <a href="#" class="thumb pull-lef conte-img">
                    <img class="img-thumbnail" src="img/javascript-img.jpg" alt="javascript"/>
                </a>
                <h2 class="post-title">
                    <a href="#">JavaScript</a>
                </h2>
                <p><span class="post-fecha">Marzo-2019</span> por <span class="post-autor"><a href="#">Luz Carrero</a></span></p>
                <p class="post-contenido tex-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cum, ex ipsum iure libero minima numquam omnis sapiente voluptate!
                    Aperiam aut cum deleniti minus nulla quibusdam reprehenderit sint, ullam unde voluptates?
                </p>
                <div class="contenedor-botones">
                    <a href="#" class="btn btn-primary">Leer mas</a>
                    <a href="#" class="btn btn-success">Comentarios <span class="badge">50</span></a>
                </div>
            </article>
        </div>
        <!--aqui el aside que va ubicado a la derecha cubriendo el resto de espacio que no cubre la seccion de cursos-->
        <aside class="col-md-3 hidden-xs hidden-sm">
            <h4>Categorias</h4>
            <div class="list-group">
                <a href="#" class="list-group-item active">Diseño Web</a>
                <a href="#" class="list-group-item ">Recursos</a>
                <a href="#" class="list-group-item ">Elementos Web</a>
                <a href="#" class="list-group-item ">Cursos</a>
                <a href="#" class="list-group-item ">Seo</a>
                <a href="#" class="list-group-item " >CSS</a>
            </div>
            <h4>Articulos Recientes</h4>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-headding">Incia proyector HTML5 mas rapido con bootstrap</h4>
                <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 desde  en 15 min</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-headding">Incia proyector HTML5 mas rapido con bootstrap</h4>
                <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 desde  en 15 min</p>
            </a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-headding">Incia proyector HTML5 mas rapido con bootstrap</h4>
                <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 desde  en 15 min</p>
            </a>
        </aside>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <p>Luz Carrero</p>
            </div>
            <div class=" col-xs-6 col-mg-6">
                <ul class="list-inline tex-lef">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>