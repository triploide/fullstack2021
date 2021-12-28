<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1 class="my-5">Formulario</h1>

        <p><a href="paginar.php?pagina=1">Página 1</a></p>
        <p><a href="paginar.php?pagina=2">Página 2</a></p>
        <p><a href="paginar.php?pagina=3">Página 3</a></p>

        <form action="procesar.php" method="POST">
            <div class="form-group my-3">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="" id="nombre">
            </div>
            <div class="form-group my-3">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="" id="email">
            </div>
            <div class="form-group my-3">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" value="" id="password">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
            </div>
        </form>

    </main>
</body>
</html>