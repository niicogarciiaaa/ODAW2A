<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template



1. ¿Qué posibles valores tiene el atributo?
application/x-www-form-urlencoded
multipart/form-data
text/plain (HTML5)
2. ¿Cuál es el valor por defecto?
application/x-www-form-urlencoded

3. ¿Qué valor soporta el envío de archivos adjuntos?
multipart/form-data
4. ¿Qué ocurre si envío un archivo sin utilizar la configuración correcta de enctype?
      Porque no se envia correctamente la foto si no se pone el multipart/form-data
5. ¿Puedo recoger los datos de POST usando text/plain en enctype?
    No puede acceder a los datos del array
6. ¿Por qué el valor del atributo no afecta a GET?

Cuando usas el método GET, el valor de enctype no afecta al envío de datos porque GET siempre
envía los datos en la URL utilizando application/x-www-form-urlencoded.
El atributo enctype solo tiene relevancia cuando el formulario utiliza el método POST
y los datos se envían en el cuerpo de la solicitud.


-->