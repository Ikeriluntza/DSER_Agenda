<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Usuario</title>

        <!-- Bootstrap -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <style type="text/css">

        #wrapper {
            width:300px;
            margin:0 auto;
            font-family:Verdana, sans-serif;
        }
        legend {
            color:#374737;
            font-size:16px;
            padding:0 10px;
            background:#ccc;
            -moz-border-radius:4px;
            box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
            padding:5px 10px;
            font-family:Helvetica, sans-serif;
            font-weight:bold;
        }
        fieldset {
            border-radius:4px;
            background: #fff; 
            background: -moz-linear-gradient(#fff, #f9fdff);
            background: -o-linear-gradient(#fff, #f9fdff);
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff));
            background: -webkit-linear-gradient(#fff, #f9fdff);
            padding:20px;
            border-color:rgba(4, 129, 177, 0.4);
        }
        input,
        textarea {
            color: #373737;
            background: #fff;
            border: 1px solid #CCCCCC;
            color: #aaa;
            font-size: 14px;
            line-height: 1.2em;
            margin-bottom:15px;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            border-radius:4px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        
        .vacio{
            
        }

        textarea {
            padding:3px;
            width:96%;
            height:100px;
        }
        textarea:focus {
            background:#ebf8fd;
            text-indent: 0;
            z-index: 1;
            color: #373737;
            opacity:0.6;
            box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
            border-color:#ccc;
        }
        .small {
            line-height:14px;
            font-size:12px;
            color:#999898;
            margin-bottom:3px;
        }
        .btn-glyphicon { 
            padding:8px; 
            background:#ffffff; 
            margin-right:4px; 
        }
        .icon-btn { 
            padding: 1px 15px 3px 2px; 
            border-radius:50px;
        }
    </style>
    <body>
        <div id="wrapper">
            <br>
            <form action="../controlador/controladorInsertarAgenda.php" method="post">
                <h2>Insertar Contacto</h2>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <input type="text" name="nombre" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido1:
                    </td>
                    <td>
                        <input type="text" name="apellido1" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Apellido2:
                    </td>
                    <td>
                        <input type="text" name="apellido2" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telefono:
                    </td>
                    <td>
                        <input type="text" name="telefono" value="">
                    </td>
                </tr>
                <br/>
                <tr>
                    <td>
                        Email 1:&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text" name="email1" value="">
                    </td>
                </tr>
                <br/>

                <tr>
                    <td>
                        Email 2:&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text" name="email2" value="">
                    </td>
                </tr>
                <br/>

                <tr>
                    <td>
                        Email 3:&nbsp;&nbsp;
                    </td>
                    <td>
                        <input type="text" name="email3" value="">
                    </td>
                </tr>
                <p>GRUPO 1:
                    <select name="grupo1">
                        <option value="0">---</option>
                        <?php
                        for ($i = 0; $i < count($listadoGrupos); $i++) {
                            echo '<option value="'
                            . $listadoGrupos[$i]["idGrupo"] . '">'
                            . $listadoGrupos[$i]["nombre"]
                            . '</option>';
                        }
                        ?>
                    </select>
                </p>
                <p>GRUPO 2:
                    <select name="grupo2">
                        <option value="0">---</option>
                        <?php
                        for ($i = 0; $i < count($listadoGrupos); $i++) {
                            echo '<option value="'
                            . $listadoGrupos[$i]["idGrupo"] . '">'
                            . $listadoGrupos[$i]["nombre"]
                            . '</option>';
                        }
                        ?>
                    </select>
                </p>
                <p>GRUPO 3:
                    <select name="grupo3">
                        <option value="0">---</option>
                        <?php
                        for ($i = 0; $i < count($listadoGrupos); $i++) {
                            echo '<option value="'
                            . $listadoGrupos[$i]["idGrupo"] . '">'
                            . $listadoGrupos[$i]["nombre"]
                            . '</option>';
                        }
                        ?>
                    </select>
                </p>
                <input class="vacio" type="submit" value="Insertar"></input>  
            </form>
            <a href="../controlador/controladorAgenda.php"><button>Atras</button></a>
        </div>
    </body>
</html>