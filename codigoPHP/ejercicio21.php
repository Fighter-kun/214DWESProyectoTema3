<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio21
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 23/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio21">
  <meta name="keywords" content="CodigoEjercicio, 21">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
        table , tr , td {
            width: 10px;
        }
        table {
            margin-left: 40%;
        }
    </style>
</head>

<body>
    <header class="text-center">
        <h1>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre 
            las preguntas y las respuestas recogidas:</h1>
    </header>
    <main>
        <div class="container mt-3 text-center">
            <div class="row">
                <div class="col">
                    <form name="cuestionario1" action="tratamiento21.php" method="post">
                        <fieldset>
                            <table>
                                <thead>
                                   <legend>Cuestionario 1</legend> 
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><label for="nombre">Nombre:</label></td>
                                    <td><input type="text" name="nombreUsuario"></td>
                                </tr>
                                <tr>
                                    <td><label for="edad">Edad (18-99):</label></td>
                                    <td> <input type="text" name="edad" min="18" max="99" placeholder="18" required></td>
                                </tr>
                                <tr>
                                    <td><label for="time">Hora:</label></td>
                                    <td><input type="text" name="time"></td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit">Enviar</button>
                        </fieldset>
                        
                    </form>
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 23/10/2023
                     */
                    
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="position-fixed bottom-0 end-0">
        <div class="row text-center">
            <div class="footer-item">
                <address>© <a href="../../index.html" style="color: white; text-decoration: none; background-color: #666">Carlos García Cachón</a>
                    IES LOS SAUCES 2023-24 </address>
            </div>
            <div class="footer-item">
                <a href="../indexProyectoTema3.html" style="color: white; text-decoration: none; background-color: #666">Inicio</a>
            </div>
            <div class="footer-item">
                <a href="https://github.com/Fighter-kun?tab=repositories" target="_blank"><img
                        src="../webroot/media/images/github.png" alt="LogoGitHub" class="pe-5"/></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>

