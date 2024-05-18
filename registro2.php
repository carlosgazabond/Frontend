<?php

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$contra1= $_POST["contra1"];
$contra2= $_POST["contra2"];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilosregistro2.css">
</head>
<body>
    
    <div class="container">

        <div class="formulario">   <!--Registrarse-->
    
            <div class="signup2">
                <span class="title" >Registro 2</span>

                <form action="php/register.php" method="post">

                    <div class="input-field2"> 
                        <p>Selecciona tu Sexo:</p>
                        <input type="radio" name="lista" value="a">Hombre
                        <input type="radio" name="lista" value="b">Mujer
                        
                    </div>
                    
                    <div class="input-field2"> 
                        <p>Selecciona tu Nivel de entrenamiento:</p>
                        <input type="radio" name="lista1" value="a">Principiante
                        <input type="radio" name="lista1" value="b">Intermedio
                    </div>

                    <div class="input-field2"> 
                        <p>Selecciona tu fase actual:</p>
                        <input type="radio" name="lista2" value="a">Volumen
                        <input type="radio" name="lista2" value="b">Definicion
                    </div>

                    <div class="input-field2">
                        <p>Selecciona tu nivel de actividad fisica:</p>
                        <input type="radio" name="lista3" value="a">Leve
                        <input type="radio" name="lista3" value="b">Moderada
                        <input type="radio" name="lista3" value="c">Fuerte
                        <input type="radio" name="lista3" value="d">Muy fuerte

                    </div>

                    <div class="input-field3"> 
                        <input type="number" name="peso" placeholder="Ingresa tu peso">
                    </div> 
            
                    <div class="input-field3">
                        <input type="number" name="altura" placeholder="Ingresa tu altura en centimetros">
                    </div>
             
                    <div class="input-field-button"> 
                    
                        <input type="submit" value="Completar registro 2/2">
                            

                    </div>

                </form>

                <div class="link-signup">

                    <p>No completaste el registro? <a href="registro1.html" class="link">Regresar</a></p>

                </div>


        
            </div>


        </div> 

    </div>

    
</body>
</html>