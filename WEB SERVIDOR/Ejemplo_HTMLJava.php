<%@page contentType="text/html" pageEncoding="ISO-8859-1"%>
<jsp:useBean id="p" scope="session" class="persona.Persona"/>

<% 
   //Ejemplo de Script JSP, este fragmento de código es JAVA
   String nombreAux; 
   nombreAux = Eva;
   int edadAux;
   edadAux = 5; %>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Bean de sesión</title>
        
        <p>El nombre es <%=p.getNombre()%> y la edad es <%=p.getEdad()%> años.</p> 
            
        <p>Recuperamos los valores del request</p>    
        <p>Estos son los valores introducidos en el formulario:
           El nombre es <%=nombreAux%> y la edad es <%=edadAux%> años. </p>
        
    </head>
    <body>
       
    </body>
</html>