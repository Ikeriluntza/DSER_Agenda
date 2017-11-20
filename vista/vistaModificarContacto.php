<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <h1>Bienvenido a la agenda</h1>
        <section>
            <form action="../controlador/controladorModificarContacto.php" method="post">
                <fieldset>
                    <legend>Nuevo Contacto</legend>

                    <select id="contactos" name="contactos" onchange="rellenarDatos()"> 
                        <?php
                        for ($i = 0; $i < count($pd); $i++) {
                            echo'<option value="' . $pd[$i]['idContacto'] . '" '
                            . 'title="' . $pd[$i]['nombre'] . "-"
                            . $pd[$i]['apellido1'] . "-"
                            . $pd[$i]['apellido2'] . "-"
                            . $pd[$i]['telefono'] . "-"
                            . $pd[$i]['emails'] . "-"
                            . $pd[$i]['grupos'] . '" >'
                            . $pd[$i]['nombre'] . " " . $pd[$i]['apellido1'] ." ". $pd[$i]['apellido2'] . "</option>";
                        }
                        ?>
                    </select><br/> 
                    Nombre: &nbsp;&nbsp;<input id="Nombre" type="text" name="nombre" value="">
                    Apellido 1: &nbsp;<input id="Apellido1" type="text" name="apellido1" value="">
                    Apellido 2: &nbsp;<input id="Apellido2" type="text" name="apellido2" value="">
                    Telefono: &nbsp;&nbsp;<input id="Telefono" type="text" name="telefono" value=""><br><br>
                    Email 1: &nbsp;&nbsp;<input id="Email1" type="text" name="email1" value="">
                    Email 2: &nbsp;&nbsp;<input id="Email2" type="text" name="email2" value="">
                    Email 3: &nbsp;&nbsp;<input id="Email3" type="text" name="email3" value=""><br><br>
                    Grupo 1: &nbsp;&nbsp;<input id="Grupo1" type="text" name="grupo1" value="">
                    Grupo 2: &nbsp;&nbsp;<input id="Grupo2" type="text" name="grupo2" value="">
                    Grupo 3: &nbsp;&nbsp;<input id="Grupo3" type="text" name="grupo3" value=""><br><br>

                    <input type="submit" name="modificar" value="Modificar" >
                    <a href="../controlador/controladorAgenda.php" style="text-decoration:none">
                        <input type="button"  value="Ir a consulta" ></a>
                    <a href="../index.php" style="text-decoration:none">
                        <input type="button"  value="Ir al menu" ></a>

                </fieldset>
            </form>
            <script type="text/javascript">
                function rellenarDatos() {

                    var e = document.getElementById('contactos');
                    var title = e.options[e.selectedIndex].title;

                    var datos = title.split('-');
                    var email = datos[4].split(',');
                    var grupo = datos[5].split(',');

                    if (email[1] == null) {
                        email[1] = '';
                    }
                    if (email[2] == null) {
                        email[2] = '';
                    }
                    if (grupo[0] == null) {
                        grupo[0] = '';
                    }
                    if (grupo[1] == null) {
                        grupo[1] = '';
                    }
                    if (grupo[2] == null) {
                        grupo[2] = '';
                    }

                    document.getElementById('Nombre').value = datos[0];
                    document.getElementById('Apellido1').value = datos[1];
                    document.getElementById('Apellido2').value = datos[2];
                    document.getElementById('Telefono').value = datos[3];

                    document.getElementById('Email1').value = email[0];
                    document.getElementById('Email2').value = email[1];
                    document.getElementById('Email3').value = email[2];

                    document.getElementById('Grupo1').value = grupo[0];
                    document.getElementById('Grupo2').value = grupo[1];
                    document.getElementById('Grupo3').value = grupo[2];



                }
            </script>

            <?php
            echo "   
                    <script type=\"text/javascript\">
                       rellenarDatos(); 
                   </script>       
                ";
            ?>
        </section>
    </body>
</html>