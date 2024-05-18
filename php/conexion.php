<?php

    $conexion = mysqli_connect("localhost", "root","","fitnoobie");

    //$conexion = mysqli_connect("localhost", "id16201409_unifondo_db","8@U_gkof(((Vj>9e","id16201409_unifondo_db");

    if($conexion){
        echo '
            <script>
                alert("conectado");
            </script>
        ';
    }else{
        echo '
            <script>
                alert("No conectado");
            </script>
        ';
    }