<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Comprobar datos</title>

        <link rel="stylesheet" href="https://dev.josprox.com/css/index.min.css" />
        <link rel="stylesheet" href="https://dev.josprox.com/css/bootstrap.min.css" />
        <link rel="stylesheet" href="index.css" />
        <link rel="shortcut icon" href="https://dev.josprox.com/img/PicsArt_02-03-07.35.11-1024x1024.png" type="image/x-icon" />
    </head>
    <body>
        <div class="content-original-mx">
            <div class="container content3">
                <h1>Tus Datos de suscripción:</h1>
                <p>Estos son los datos que nos has enviado:</p>
                <?php
echo "Nombre: ";
echo $_POST['nombre'];
echo "<br/>";
echo "apellidos: ";
echo $_POST['apellidos'];
echo "<br />
                ";
echo "E-mail: ";
echo $_POST['email'];
echo "<br />
                ";
echo "contraseña: ";
echo $_POST['contras'];
echo "<br />
                ";
echo "Sexo: ";
echo $_POST['sexo'];
echo "<br />
                ";
echo "Estudios: ";
echo $_POST['estudios'];
echo "<br />
                ";
echo "Aficiones: Si le interesa ó No le interesa<br />
                ";
echo " Musica: ";
if (isset($_REQUEST['musica'])) {
    echo "Si, le interesa";
} else {
    echo "No le interesa";
}
echo "<br />
                ";
echo " Deportes: ";
if (isset($_REQUEST['deportes'])) {
    echo "Si, le interesa";
} else {
    echo "No le interesa";
}
echo "<br />
                ";
echo " Cine: ";
if (isset($_REQUEST['cine'])) {
    echo "Si, le interesa";
} else {
    echo "No le interesa";
}
echo "<br />
                ";
echo " Libros: ";
if (isset($_REQUEST['libros'])) {
    echo "Si, le interesa";
} else {
    echo "No le interesa";
}
echo "<br />
                ";
echo " Ciencia: ";
if (isset($_REQUEST['ciencia'])) {
    echo "Si, le interesa";
} else {
    echo "No le interesa";
}
echo "<br />
                <br />
                ";
echo "Día de la semana: ";
echo $_POST['dia'];
echo "<br />
                ";
echo "Tu comentario: ";
echo $_POST['comentario'];
echo "<br />
                "; ?>
                <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
                <p>Los datos son correctos: <button class="btn1" onclick="location.href='form.php'">Enviar</button></p>
                <p>Los datos no son correctos: <button class="btn1" onclick="location.href='EJEMPLO22.php'">Volver a escribirlos</button></p>
            </div>
        </div>
    </body>
</html>