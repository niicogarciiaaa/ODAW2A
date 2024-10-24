<?php
                 echo "<pre>";
            
            //Declaración de array
            $array1 = array();
            
            //Asignación de valores
            $array1["Lunes"]="Repollo";
            $array1["Martes"]="Colifor";
            $array1["Miércoles"]="Acelgas";
            $array1["Jueves"]="Espinacas";
            $array1["Viernes"]="Brocoli";
            $array1["Sábado"]="Lechuga";
            
            //Visualizar el array
            print_r($array1);
            echo "\n";
            
            //Tamaño del array
            print("\nTamaño del array: ".count($array1));
            print("\nTamaño del array: ".sizeof($array1));
            
            echo "\n";
            //Recuperar las claves en un array
            $claves = array_keys($array1);
            print_r($claves);
            echo "\n";
            
            //Recorrer con un for
            echo "\nImprimir con el for: ";
            for($i=0; $i<count($claves); $i++){
                
                echo " ".$array1[$claves[$i]];
                
            } 
            
            echo "\n";
            
            //Visualizar con foreach
            foreach($array1 as $j){
                echo "$j ";
            }
            
            //Visualizar con foreach
            foreach($array1 as $dia=>$verdura){
                echo "\n El $dia hay $verdura";
            }
            
            echo "\n";
            
            
            
            //Buscar un elemento (true o false)
            echo "\nBuscamos el Repollo: ".in_array("Repollo", $array1);
            echo "\nBuscamos el Col: ".in_array("Col", $array1);
            
            echo "\n";
            //Ordenar Manteniendo la asociación de indices
            asort($array1); //Orden ascendente
            print_r($array1);
            echo "\n";
            arsort($array1); //Orden descendente
            print_r($array1);
            
            
            echo "\n";
            //Ordenar recolocando los elementos
            sort($array1); //Ascendente
            print_r($array1);
            echo "\n";
            
            rsort($array1); //Descendente            
            print_r($array1);
            echo "\n";
            
            
            //Eliminar un elemento del array
            unset($array1[4]); 
            print_r($array1);
            echo "\n";
            
            $array1=array_values($array1);
            print_r($array1);
            echo "\n";
            
            //Eliminar el array
            unset($array1);
            print_r($array1);
            echo "\n";
           
            
            echo "</pre>";
        
        ?>
