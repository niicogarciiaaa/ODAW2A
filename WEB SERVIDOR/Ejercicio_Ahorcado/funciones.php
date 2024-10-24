<?php

function selecionarDificultad(){
<html>
    <style>
        body{
            background-color:gray;
        }
        form{
            
            text-align:center;
            
            
        }
        img{
            height:100px;
            margin-bottom:100px;
        }
        p{
            color:white;
        }
        input{
            margin-top:10px;
            
        }

    </style>
    <body>
        <form action="">
            <img src="./ahorcado.png" alt=""><br/>
            <p>Seleciona Dificultad</p>
            <select>
                <option value="7">Fácil 7 Vidas</option>
                <option value="6">Intermedio 6 Vidas</option>
                <option value="5">Difícil 5 Vidas </option>
            </select>
            <br>
            <input type="submit" value="Jugar" name="jugar">
            <input type="button" value="Salir" name="salir">

    </body>       
</html>
      

}


?>