<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
    </head>

    <body>
        <h1>Contacto</h1>
        <ul>
            @foreach($versiones as $ver)
                <li>{{ $ver }}</li>
            @endforeach
        </ul>

        @if(!empty($version))
            <p>
                {{ $version }}
            </p>
        @endif

        <form method="GET" action="contacto.blade.php">
            <label for="name">
                Nombre: <input type="text" id="name" name="nombre">
            </label>
            <br>
            <label for="mail">
                Correo: <input type="email" id="mail" name="correo">
            </label>
            <br>
            <label for="comment">
                Comentario: <br><textarea id="comment" name="comentario" cols="40" rows="5"></textarea>
            </label>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>

</html>