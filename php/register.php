<?php
    include 'conexion.php';

    //var_dump($_POST);

    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $contra1= $_POST["contra1"];
    $contra2= $_POST["contra2"];
    $sexo= $_POST["lista"];
    $nivel = $_POST["lista1"];
    $fase = $_POST["lista2"];
    $actividad= $_POST["lista3"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

   

    $query = "INSERT INTO usuario(nombre, correo, altura, peso, nivel, actividad, contraseña, sexo, fase) 
    VALUES('$nombre', '$correo', '$altura', '$peso', '$nivel', '$actividad', '$contra1', '$sexo', '$fase')";


    $run = mysqli_query($conexion, $query);

    if(!empty($run)){
        echo'
            <script>
                alert("Registro exitoso");
                window.location = "../index.php";
            </script>
        ';
    }
    else{
        echo'
            <script>
                alert("Error con el registro");
                window.location = "../index.php";
            </script>
        ';
    }

?>