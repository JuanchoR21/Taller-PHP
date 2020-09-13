<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ranchers">
    <title>Registro PHP</title>
</head>

<body class="p-3 mb-2 bg-primary text-white">
    <style>
        body {
            font-family: "Ranchers";            
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Bienvenido Usuario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Usuario</a>
                <a class="nav-link" href="#">Administrador</a>
            </div>
        </div>
    </nav>
    <section class="container-fluid pt-2 pb-5">
        <article class="row justify-content-center">
            <form action="home.php" method="post" class="p-4 bg-dark tect-white">
                <div class="form-group">
                    <h2>Registro de usuarios</h2>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-user-circle-o fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-address-card fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="contraseña" placeholder="Ingrese Contraseña">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-phone fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="telefono" placeholder="Ingrese Telefono">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-address-card fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="mail" class="form-control" name="correo" placeholder="Ingrese su correo">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-sign-in"> Registro</i></button>
                </div>
            </form>
        </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>