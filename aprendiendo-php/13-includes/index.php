<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>

<body>
    <?php
    include 'includes/cabecera.php';
    ?>
    <!--Contenido-->
    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias excepturi, nemo magni reprehenderit nobis sit voluptas, quasi eum ad natus obcaecati labore doloribus maxime ex repellat quibusdam? Delectus, dolor fugiat.</p>
        <hr>
    </div>

    <!--Pie de pagina-->
    <?php require 'includes/footer.php'; ?>
</body>

</html>