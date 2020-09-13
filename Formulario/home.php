<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <Strong>Bienvenido <?php echo htmlspecialchars($_POST['nombre']); ?>!.</Strong> Usuario registrado correctamente.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <Strong>Su telefono es: <?php echo htmlspecialchars($_POST['telefono']); ?>.</Strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
</body>

</html>