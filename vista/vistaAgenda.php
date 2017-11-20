<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Agenda</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>
            table{
                align: center;
                text-align: center;
            }            
            th{
                align: center;
                text-align: center;
            }
        </style>

    </head>
    <body>
        <h1>Agenda</h1>

        <!--El filtro-->

        <form action="../controlador/controladorFiltrosAgenda.php" method="post">
            <label>Nombre:&nbsp;</label><input type="text" name="nombre" placeholder="Nombre" value=""/>
            <label>Apellido1:&nbsp;</label><input type="text" name="apellido1" placeholder="Apellido1" value=""/>
            <label>Apellido2:&nbsp;</label><input type="text" name="apellido2" placeholder="Apellido2" value=""/>
            <label>Grupo:&nbsp;</label><select name="grupo" >
                <option value=""></option>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'agenda');
                $sql = mysqli_query($link, "select idGrupo, nombre from grupos");
                while ($row = $sql->fetch_assoc()) {
                    echo '<option value="' . $row['idGrupo'] . '">' . $row['nombre'] . "</option>";
                }
                ?>
            </select>
            <input type="submit" name="filtrar" value="Filtrar"/>
        </form>
        <br/>
        <hr/>
        <br/>
        <!--La tabla-->

        <table class="table table-striped">
            <thead>
                <tr >
                    <th><strong>Nombre</strong></th>
                    <th><strong>Apellido 1</strong></th>
                    <th><strong>Apellido 2</strong></th>
                    <th><strong>Telefono</strong></th>
                    <th><strong>Correo</strong></th>
                    <th><strong>Grupo</strong></th>
                    <th><strong>Eliminar</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($pd); $i++) {
                    $idBorrado = $pd[$i]["idContacto"];
                    ?>
                    <tr>
                        <td text-align="center"><?php echo $pd[$i]["nombre"]; ?></td>
                        <td text-align="center"><?php echo $pd[$i]["apellido1"]; ?></td>
                        <td text-align="center"><?php echo $pd[$i]["apellido2"]; ?></td>
                        <td text-align="center"><?php echo $pd[$i]["telefono"]; ?></td>
                        <td text-align="center"><?php echo str_replace(",", "<br/>", $pd[$i]["emails"]); ?></td>
                        <td text-align="center"><?php echo str_replace(",", "<br/>", $pd[$i]["grupos"]); ?></td>
                        <td text-align="center"> <a href="../controlador/controladorEliminar.php?idEliminar=<?php echo $idBorrado; ?>"> <img src="../img/eliminar.png" style="height: 20px;"></img></a></td>
                    </tr>


                    <?php
                }
                ?>
            </tbody>
        </table>

        <p><a href="../controlador/controladorInsertarListarGrupos.php">Nuevo Usuario</a></p> 
        <p><a href="../controlador/controladorListarContactosModificar.php">Modificar Usuario</a></p> 

    </body>
</html>