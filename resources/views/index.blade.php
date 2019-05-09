<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--<link rel="stylesheet" href="css/style.css">--}}
    <style>
        /*@import url('https://fonts.googleapis.com/css?family=Open+Sans');*/

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            color: #000;
            font-family: "Helvetica";
        }

        h1 {
            font-size: 48px;
            margin: 0;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24x;
            font-weight: 400;
        }

        h3 {
            font-size: 18px;
            font-weight: 400;
        }

        h4 {
            font-size: 20px;
        }

        p {
            margin-bottom: 5px;
        }

        li {
            list-style: none;
            display: flex;
            align-items: center;
        }

        img {
            width: 100%;
            height: 100%;
        }

        header {
            width: 100%;
            height: 500px;
            background: url(../img/bg.jpg);
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        main {
            padding: 30px;
        }

        footer {
            background: #35c0ff;
            width: 100%;
            height: 50px;
        }

        .cl-primary {
            color: #35c0ff;
        }

        .mb1 {
            margin-bottom: 10px;
        }

        .mb3 {
            margin-bottom: 30px;
        }

        .mr1 {
            margin-right: 10px;
        }

        .icon {
            width: 25px;
            margin-right: 10px;
        }


        .caracteristicas span {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .logo {
            width: 120px;
        }

        .direccion {
            padding-bottom: 20px;
            border-bottom: 1px solid #35c0ff;
            width: 70%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .direccion2 {
            padding-bottom: 20px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .oferta {
            background: #35c0ff;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 300px;
            height: 290px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .oferta2 {
            padding-bottom: 20px;
            border-bottom: 1px solid #35c0ff;
        }


        .thumb {
            width: 300px;
            height: 270px;
        }

        .user {
            display: flex;
            align-items: center;
        }

        .lista p {
            margin-left: 30px;
            position: relative;
        }

        .lista li {
            margin-left: 50px;
            position: relative;
        }

        .lista p::after {
            content: '';
            width: 10px;
            height: 10px;
            background: #35c0ff;
            position: absolute;
            top: 6px;
            left: -20px;
        }
    </style>
    <title>PDF</title>
</head>
<body>
<header></header>
<main>
    <section>
        <div class="direccion">
            <div>
                <h1 class="cl-primary">Oficina 101</h1>
                <p>Plaza 700</p>

                <h3>Atencion a: <b>{{$name}}</b></h3>
                <h3>Fecha: <b>Nombre del Cliente</b></h3>
            </div>
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="oferta">
            <h2>OFERTA</h2>
            <h1>$6,000</h1>
            <p>PRECIO REGULAR: $8,500 MXN</p>
        </div>
    </section>


    <section>
        <div style="width: 50%">
            <div class="ubicacion mb3">
                <h4 class="cl-primary mb3">Ubicacion</h4>
                <p>Av Nombre de la Calle #000</p>
                <p>Col. Nombre de Colonia 000000</p>
                <p>Municipio, Estado, Pais</p>
            </div>

            <div class="caracteristicas">
                <h4 class="cl-primary mb3">Caracteristicas</h4>

                <span>
                        <ul>
                            <li>
                                <img src="img/ico-1.png" class="icon">
                                <p>Banos</p>
                            </li>
                            <li>
                                <img src="img/ico-2.png" class="icon">
                                <p>Estacionamiento</p>
                            </li>
                            <li>
                                <img src="img/ico-3.png" class="icon">
                                <p>Area de Comedor</p>
                            </li>
                            <li>
                                <img src="img/ico-4.png" class="icon">
                                <p>Acceso a internet</p>
                            </li>
                        </ul>
            
                        <ul>
                            <li>
                                <img src="img/ico-1.png" class="icon">
                                <p>Banos</p>
                            </li>
                            <li>
                                <img src="img/ico-2.png" class="icon">
                                <p>Estacionamiento</p>
                            </li>
                            <li>
                                <img src="img/ico-3.png" class="icon">
                                <p>Area de Comedor</p>
                            </li>
                            <li>
                                <img src="img/ico-4.png" class="icon">
                                <p>Acceso a internet</p>
                            </li>
                        </ul>
                    </span>

            </div>
        </div>

        <div class="thumb">
            <img src="img/thumb-1.png">
        </div>

    </section>

    <section>
        <div>
            <div class="superficie mb3">
                <h4 class="cl-primary mb3">Superficie</h4>
                <ul>
                    <li>
                        <img src="img/ico-5.png" class="icon">
                        <p>20m</p>
                    </li>
                    <li>
                        <img src="img/ico-6.png" class="icon ">
                        <p>5 personas</p>
                    </li>
                </ul>
            </div>
            <div class="user">
                <img src="img/user.png" class="mr1">
                <div>
                    <b>Nombre del Asesor</b>
                    <p>asesor@correo.com</p>
                    <p>8100000000</p>
                </div>
            </div>
        </div>
        <div class="thumb">
            <img src="img/thumb-2.png">
        </div>
    </section>


</main>
<footer></footer>
</body>
</html>