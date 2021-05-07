<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <link rel="shortcut icon" href="https://dev.josprox.com/img/PicsArt_02-03-07.35.11-1024x1024.png" type="image/x-icon" />
        <title>Suscripción boletín</title>
        <style type="text/css">
            h1 {
                text-align: center;
            }
            td {
                padding: 0.2em 2em;
            }
        </style>
        <link rel="stylesheet" href="https://dev.josprox.com/css/index.min.css" />
        <link rel="stylesheet" href="https://dev.josprox.com/css/bootstrap.min.css" />
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <div class="content-original-mx">
            <h1>Suscripción electronica a nuestro boletín.</h1>
            <form action="comprobar.php" method="post">
                <p>Nombre: <input type="text" name="nombre" required="" /> Apellidos: <input type="text" name="apellidos" size="40" required="" /> e-mail: <input type="text" name="email" size="35" required="" /></p>
                <p>contraseña: <input type="password" name="contras" required="" /><br /></p>
                <table>
                    <tr>
                        <td>
                            sexo<br />
                            <input type="radio" name="sexo" value="V" required="" /> Varón<br />
                            <input type="radio" name="sexo" value="M" required="" /> Mujer
                        </td>
                        <td>
                            Nivel de estudios<br />
                            <input type="radio" name="estudios" value="elemental" required="" />
                            Certificado escolar<br />
                            <input type="radio" name="estudios" value="basico" required="" />
                            Graduado <br />
                            <input type="radio" name="estudios" value="bachiller" required="" />
                            Bachiller - Formación Profesional <br />
                            <input type="radio" name="estudios" value="Diplomado" required="" />
                            Diplomado<br />
                            <input type="radio" name="estudios" value="licenciado" required="" />
                            Licenciado o Doctorado<br />
                        </td>
                        <td>
                            <!--Mejorado-->
                            Interesado en los siguientes temas: <br />
                            <input type="checkbox" name="musica" type="musica" />
                            <label class="form-check-label" for="flexRadioDefault1"> Música<br /> </label>

                            <input type="checkbox" name="deportes" type="deportes" />
                            <label class="form-check-label" for="flexRadioDefault1"> Deportes<br /> </label>

                            <input type="checkbox" name="cine" type="cine" />
                            <label class="form-check-label" for="flexRadioDefault1"> Cine<br /> </label>

                            <input type="checkbox" name="libros" type="libros" />
                            <label class="form-check-label" for="flexRadioDefault1"> Libros<br /> </label>

                            <input type="checkbox" name="ciencia" type="ciencia" />
                            <label class="form-check-label" for="flexRadioDefault1"> Ciencia<br /> </label>

                            <!--Clasico--><!--
                        Interesado en los siguientes temas: <br />
                        <input type="checkbox" value="" name="temas" type="musica" /> Música<br />
                        <input type="checkbox" value="" name="temas" type="deportes" /> Deportes<br />
                        <input type="checkbox" value="" name="temas" type="cine" /> Cine<br />
                        <input type="checkbox" value="" name="temas" type="libros" /> Libros<br />
                        <input type="checkbox" value="" name="temas" type="ciencia" /> Ciencia -->
                        </td>
                    </tr>
                </table>
                <p>Día de la semana que le interesa recibirlo:</p>
                <select name="dia">
                    <option value="No seleccionó">día de la semana:</option>
                    <option value="Lunes">lunes</option>
                    <option value="Martes">martes</option>
                    <option value="Miércoles">miercoles</option>
                    <option value="Jueves">jueves</option>
                    <option value="Viernes">viernes</option>
                    <option value="Sábado">sábado</option>
                    <option value="Domingo">domingo</option>
                </select>
                <p>
                    Su opinión: <br />
                    <textarea name="comentario" rows="5" cols="50"></textarea>
                </p>

                <p><input class="btn1" type="submit" value="Comprobar el formulario" /> <input class="btn btn-warning" type="reset" value="borrar todo" /></p>
            </form>
        </div>
    </body>
</html>
