<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Error 404</title>
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .content {
                width: 90%;
                height: 100vh;

                color: rgb(65, 65, 65);
                margin: auto;
                display: flex;
                flex-flow: column nowrap;
            }

            .content__titulo {

                padding: 4rem;
            }

            .content__h1 {
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 1.9rem;

            }

            .content__img {

                display: flex;
                justify-content: center
            }

            .content__boton {
                margin-top: 1.2rem;
                display: flex;
                justify-content: center;
                width: 70%;
                margin: auto;
            }

            .content__a {
                color: rgb(19, 19, 19);
                padding: 1rem;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                background-color: rgb(223, 223, 223);
                box-shadow: 2px 2px 6px rgb(223, 223, 223);
                border-radius: 1.5rem;
            }
        </style>
    </head>

    <body>
        <div class="content">
            <div class="content__titulo">
                <h1 class="content__h1">Ops! Pagina no encontrada</h1>
            </div>
            <div class="content__img">
                <img class="content__image" src="{{ asset('img/error.jpeg') }}" style="width: 25%" alt="">
            </div>
            <div class="content__boton">
                <a href="/" class="content__a">Volver a pagina de inicio</a>
            </div>
        </div>
    </body>

</html>
