<?php
//Llamada al modelo
//Estos son los formatos requeridos en el form
$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";//formato para solo permitir texto
$patron_email = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";//formato para validar correo
    if(isset($_POST['apellidos']) && !empty($_POST['apellidos'])){//validar que la variable exite y que no esta vacia
        /*Obtener datos form*/
        $Ape = $_POST['apellidos'];
        $Sexo = $_POST['sexo'];
        $Email = $_POST['email'];
        $Nacimiento = $_POST['fecha'];
        $FechaActual = date("Y-m-d");//Fecha actual
        $Mensaje = '';
    if($Sexo == "Masculino"){ 
        $Mensaje = "El señor ";
    }
    else{
        $Mensaje = "La señorita ";   
    }
    if($FechaActual > $Nacimiento){
        if(preg_match($patron_texto,$Ape)){//comparar formato solo texto
            if(preg_match($patron_email,$Email)){//comparar formato correo
                require_once("Modelo/cliente modelo.php");
                $ver=new mensaje;//obtener clase de modelo para poder usarla
                $datos= $ver-> mostrar($Mensaje, $Ape);//obtener funcion de la clase para usarla, ademas de pasarle 2 parametros
            }
            else{
                echo '<script languaje="javascript">alert("Ingrese un correo electronico valido");</script>';//correo no valido
            }   
        }
        else{
            echo '<script languaje="javascript">alert("El campo apellido paciente solo puede contener letras");</script>';//solo se permite texto
        }     
    }
    else{
        echo '<script languaje="javascript">alert("Por favor ingrese una fecha valida, la fecha de nacimiento no puede ser mayor a la fecha actual");</script>';  
    }
    }
//llamada a la vista
require_once("Vista/Tarea.php");
?>