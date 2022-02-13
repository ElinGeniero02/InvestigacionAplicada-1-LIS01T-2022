<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MVC en PHP</title>
        <link rel="stylesheet" href="Vista/estilos.css">
        <script type="text/javascript" src="Vista/script.js"></script>
    </head>
    <body>
        <div id="conteiner">
            <div id="informacion">
                <form  method="post">
                    <div id="h1">
                        <h1>Consulta ficha del paciente</h1>     
                    </div>  
                    <div id="datos">
                        Apellido de paciente: <input type="text" name="apellidos" required id="d1" class="data" autofocus><br>
                        Direccion: <input required class="data" type="text" name="direccion"><br>
                        Correo electronico: <input required class="data" type="text" name="email"><br>
                        F.nacimiento: <input required class="data" type="date" name="fecha"><br><br>
                        Sexo:
                        <select required name="sexo">
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                        <br>
                        Diagnostico: <input required class="data" type="text" name="diagnostico"><br>
                        Tratamiento: <input required class="data" type="text" name="Tratamiento"><br>
                        <input type="submit" id="boton" class="data"  name="Guardar"><br>
                    </div>         
                </form>
            </div>
        </div>
    </body>
</html>