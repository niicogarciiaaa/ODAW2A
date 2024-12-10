<!--
1. Funciones para manejar cadenas:
strlen($cadena) - Devuelve la longitud de una cadena.
str_replace($buscar, $reemplazar, $cadena) - Reemplaza todas las ocurrencias de una subcadena por otra.
substr($cadena, $inicio, $longitud) - Devuelve una subcadena de una cadena.
trim($cadena) - Elimina los espacios en blanco al principio y al final de la cadena.
strpos($cadena, $subcadena) - Devuelve la posición de la primera aparición de una subcadena
mb_strlen — Obtiene la longitud de una cadena de caracteres



2. Funciones para manejar arrays:
array_push($array, $valor) - Añade uno o más elementos al final de un array.
array_pop($array) - Elimina el último elemento de un array.
count($array) - Devuelve el número de elementos en un array.
array_merge($array1, $array2) - Merges two or more arrays.
in_array($valor, $array) - Comprueba si un valor existe en un array.



4. Funciones para trabajar con números:
abs($numero) - Devuelve el valor absoluto de un número.
round($numero, $decimales) - Redondea un número a una cantidad específica de decimales.
max($array) - Devuelve el valor máximo de un array.
min($array) - Devuelve el valor mínimo de un array.
rand($min, $max) - Genera un número aleatorio entre los valores dados.

6. Funciones para manejo de formularios y entradas del usuario:
$_GET[$clave] - Recibe datos enviados a través de un formulario con método GET.
$_POST[$clave] - Recibe datos enviados a través de un formulario con método POST.
$_REQUEST[$clave] - Recibe datos enviados con cualquier método de solicitud (GET, POST, etc.).
isset($variable) - Verifica si una variable está definida y no es nula.
empty($variable) - Verifica si una variable está vacía.
htmlspecialchars($cadena);
trim($cadena);
move_uploaded_file($origen, $destino):

7. Funciones de validación:
is_int($valor) - Verifica si el valor es un número entero.
is_array($valor) - Verifica si el valor es un array.
is_string($valor) - Verifica si el valor es una cadena de texto.
filter_var($variable, FILTER_VALIDATE_EMAIL) - Valida si una cadena es una dirección de correo electrónico válida.

  mb_strpos — Busca la posición de la primera ocurrencia de un string en otro string
  mb_strrchr — Busca la última ocurrencia de un carácter de un string dentro de otro
  mb_strrichr — Busca la última ocurrencia de un carácter de un string dentro de otro, insensible
                a mayúsculas/minúsculas
  mb_strripos — Busca la posición de la última ocurrencia de un string dentro de otro string,
                insensible a mayúsculas/minúsculas
  mb_strrpos — Busca la posición de la última ocurrencia de un string en otro string
  mb_strstr — Busca la primera ocurrencia de un string dentro de otro
  mb_strtolower — Convierte una cadena de caracteres a minúsculas
  mb_strtoupper — Convierte un string en mayúsculas
  mb_substr_count — Cuenta el número de ocurrencias de un substring
  mb_substr — Obtiene parte de una cadena de caracteres
  mb_split — Divide cadenas de caracteres multibyte usando una expresión regular
  mb_str_split — Dada una cadena multibyte, devuelve una matriz de sus caracteres
  mb_strcut — Obtener parte de un string
  mb_http_input — Detecta la codificación de caracteres de entrada HTTP
  mb_http_output — Establece/obtiene la codificación de caracteres de salida HTTP
  mb_internal_encoding — Establece/obtiene la codificación de caracteres interna 
  

  FUNCIONES CTYPE(BOOLEANAS)
  ctype_alnum($valor) Alfanuméricos
  ctype_alpha($valor) Alfabéticos (maiúsculas ou minúsculas, con acentos, ñ, Ç, etc)
  ctype_cntrl($valor) Caracteres de control (salto de liña, tabulador, etc)
  ctype_digit($valor) Díxitos
  ctype_graph($valor) Caracteres imprimibles (excepto espazos)
  ctype_lower($valor) Minúsculas
  ctype_print($valor) Caracteres imprimibles
  ctype_punct($valor) Signos de puntuación (caracteres imprimibles que non son alfanuméricos nin espazos en branco)
  ctype_space($valor) Espazos en branco (espazos, tabuladores, saltos de liña, etc)
  ctype_upper($valor) Maiúsculas
  ctype_xdigit($valor) Díxitos hexadecimais

  Funcións filter(boolean tmnb)
  FILTER_VALIDATE_INT Entero
FILTER_VALIDATE_BOOLEAN Booleano
FILTER_VALIDATE_FLOAT Float
FILTER_VALIDATE_REGEXP Expresión regular
FILTER_VALIDATE_URL URL
FILTER_VALIDATE_EMAIL Dirección de correo
FILTER_VALIDATE_IP IP

SESIONES

session_start(); crear sesion
sesion_name(); cambiar nombre a sesion
$_SESSION["nome"] = "Uxío Varela"; acceso a dato almacenado en sesion, accesible en todos as páginas nas que se abriu unha sesion
session_destroy(); destruir sesion



CLASES

 __CLASS__: devolve o nome da clase onde foi declarada
 __METHOD__: devolve o nome do método onde foi declarada
 __FILE__: Ruta completa e nome do arquivo. Usado dentro dun INCLUDE devolverá o
nome do ficheiro do INCLUDE.
 __DIR__: Directorio do ficheiro. Usado dentro dun INCLUDE, devolverá o directorio
do arquivo incluído.
 __LINE__: Liña actual do ficheiro.


class_exists Devolve true se a clase está definida e false en
caso contrario.

get_class Devolve o nome da clase do obxecto.

get_class_methods Devolve un array cos nomes dos métodos dunha clase que son accesibles dende ónde se fixo a llamada.

get_class_vars Devolve un array cos nomes dos atributos dunha clase que son accesibles dende onde se fixo a chamada.

get_declared_classes Devolve un array cos nomes das clases definidas. 
get_declared_interfaces Devolve un array cos nomes das interfaces definidas. print_r(get_declared_interfaces());
class_alias Crea un alias para unha clase.
get_object_vars
Devolve un array coas propiedades non estáticas do obxecto especificado. Se unha propiedade non ten asignado un valor devolverase cun valor NULL.

method_exists Devolve true se existe o método no obxecto ou clase que se indica, e false no caso contrario, independentemente de se é accesible ou non.

property_exists Devolve true se existe o atributo no obxecto ou clase que se indica, e false no caso contrario, independentemente de se é accesible ou non.

METODOS MÁGICOS

__isset: Este método dispárase automáticamente cando tratamos de comprobar que un atributo existe usando a función isset() 

__unset: Este método dispárase automáticamente cando se intenta destruir un atributo que non existe uo é privado empregando a función unset()

__toString: Este método devolverá un string cando se usa o obxecto coma se fose unha cadea de texto

__invoke(): Este método dispararase automáticamente cando se intenta chamar a un obxecto como se fose unha función

__call: Esté método dispárase automáticamente cando se chama a un método que non está definido na clase ou que é inaccesible dentro do obxecto 
__callstatic: O método anterior __call era lanzado ao intentar chamar a un método inaccesible no contexto do obxecto, pero non está pensado se o método é inaccesible nun contexto estático. 

Interfaz: cuando no hay propiedades en común, solo métodos y no definimos el codigo dentro
Clase Abstracta: Cuando las clases descendientes tienen propiedades en comú, a mayores de los métodos


EXCEPCIONES
getMessage._ Devolve a mensaxe, en caso de que se puxese algún.
 getCode._ Devolve o código de erro se existe. 


function division($dividendo, $divisor) {
 try {
 if ($divisor == 0) {
 throw new Exception('Non se pode dividir por 0');
 }
 else return $dividendo/$divisor;
 } catch (Exception $e) {
 echo 'Excepción capturada: ', $e->getMessage(), "\n";
 }
}

  -->
