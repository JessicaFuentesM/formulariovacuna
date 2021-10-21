<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Vacunación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="">
    <div>
    <select name="tipo" id="tipo" type="id" class="form-select form-select-sm" aria-label=".form-select-sm example">
    <option selected>Tipo de Identificación</option>
    <option value="Cedula de ciudadania">Cedula de ciudadania</option>
    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option> 
    </select>
    </div>
    <div>
    <span class="input-group-text">Identificación</span>
    <input type="text" name="ident" id="ident" aria-label="Identificacion" class="form-control">
    <span class="input-group-text">Nombres</span>
    <input type="text" name="nombre" aria-label="First name" class="form-control">
    <span class="input-group-text">Apellidos</span>
    <input type="text" name="apellido" aria-label="Last name" class="form-control">
    </div>
    <div>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bio">
    <option selected>Tipo de biológico</option>
    <option value="Moderna">Moderna</option>
    <option value="Sinovac">Sinovac</option>
    <option value="AstraZeneca">AstraZeneca</option>
    <option value="Pfizer">Pfizer</option>
    </select>
    </div>
    <div>
    <span class="input-group-text">Fecha de primera dosis</span>
    <input type="text_name" name="fechap" aria-label="" class="form-control">
    <span class="input-group-text">Fecha de segunda dosis</span>
    <input type="text" name="fechas" aria-label="" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" value="guardar">Enviar</button>
    </form>    
    <?php
       $file_txt = fopen ("vacunas.txt", "a")
       or die("problema al crear vacunas.txt");
       fwrite($file_txt,$_POST['tipo'].";");
       fwrite($file_txt,$_POST['ident'].";");
       fwrite($file_txt,$_POST['nombre'].";");
       fwrite($file_txt,$_POST['apellido'].";");
       fwrite($file_txt,$_POST['bio'].";");
       fwrite($file_txt,$_POST['fechap'].";");
       fwrite($file_txt,$_POST['fechas'].";");
       fclose($file_txt);

       $archivo=fopen("vacunas.txt","r") 
       or die("problema al abrir vacunas.txt ");
       while(!feof($archivo)){
            $traer = fgets($archivo);
            echo $traer;
       }
    ?>
</body>
</html>