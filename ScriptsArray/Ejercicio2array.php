<?php
        //declaro el array
         $ciudades=[];
         //añado ciudades 
         array_push($ciudades, "Zaragoza", "Huesca","Teruel","Calatayud","Tarazona");//se añaden al final
    ?>

    <table border="1">
        
    <?php
        //imprimir el array en una tabla
        //Se pueden definir estilos en una hoja css
        echo "<tr><th>CIUDADES</th></tr>";
        foreach($ciudades as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>