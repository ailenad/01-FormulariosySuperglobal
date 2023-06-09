<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
          
    <h1 class="text-center">Peliculas</h1>

    <main class="p-4">
        <div class="col-6 mx-auto">
        <form action="procesar_datos.php" method="POST">
                <div class="mb-3">
                 <label for="nombre">Nombre</label>
                <input type="text" name='nombre'>   
                </div>
                <div class="mb-3">
                 <label for="apellido">Apellido</label>
                <input type="text" name='apellido'>   
                </div>
                <div class="mt-3">
                 <label for="fecha">Fecha de nacimiento</label>
                <input type="date" name='fecha'> <br>   
                </div>
                
                <label class="mt-3 h4">Selecciona las peliculas que has visto:</label>
                <br>
                <div class="form-check">
                <?php include('partials/peliculas.php')?>
                </div>
                <button type='submit' class="mt-3 justify-content-end">Enviar!</button>
        </form>
        </div>
    </main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>