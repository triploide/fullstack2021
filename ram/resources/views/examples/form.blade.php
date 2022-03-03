<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <main class="container">
        <h1>Formulario</h1>
        <form action="/admin/form" method="POST">
            @csrf
            <p>
                <label for="firstname">Nombre</label><br>
                <input id="firstname" type="text" name="firstname" value="">
            </p>
            <div class="form-group">
                <label for="lastname">Apellido</label>
                <input class="form-control" id="lastname" type="text" name="lastname" value="">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input class="form-control" id="dni" type="number" name="dni" value="" placeholder="44333222">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="email" value="test@mail.com">
            </div>
            <div class="form-group">
                <label for="comment">Comentario</label>
                <textarea class="form-control" id="comment" name="comment" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                <select class="form-control" name="subject" id="subject">
                    <option value="Comercial">Comercial</option>
                    <option value="Ventas">Ventas</option>
                    <option value="Soporte">Soporte</option>
                </select>
            </div>
            <div class="form-group">
                <p>Intereses</p>
                <p>
                    <label for="option1">CSS</label>
                    <input id="option1" type="checkbox" name="options[]" value="css">
                </p>
                <p>
                    <label for="option2">HTML</label>
                    <input id="option2" type="checkbox" name="options[]" value="html">
                </p>
                <p>
                    <label for="option3">PHP</label>
                    <input id="option3" type="checkbox" name="options[]" value="php">
                </p>
                <div class="form-group">
                    <button class="btn btn-primary" name="submit" type="submit" value="">Guardar</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>