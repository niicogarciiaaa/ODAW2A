<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='procesar.php' method='post'>
            <h3>Contraseñas Aleatorias</h3>
            <h3>Minimos Caracteres:</h3><input type="text" name="min"/>
            <h3>Maximos Caracteres:</h3><input type="text" name="max"/>
            <br/><br/>
            <select name="opciones">
                <option value="numeros" selected="">Numeros</option>
                <option value="letras">Letras</option>
                <option value="numerosletras">Numeros y letras</option>
            </select>
            <input type='submit' name='botonEnviar' value='Enviar'>
            
        </form>
    </body>
</html>
