<?php

class Agenda {

    private $agenda;
    private $link;

    public function __construct() {
        $this->agenda = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }

    private function set_names() {
        return $this->link->query("SET NAMES 'utf8'");
    }

    public function listaAgenda() {
        self::set_names();

//llamada al procedimiento
        $sql = "call pMostrarContactos()";

        $result = $this->link->query($sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $this->agenda[] = $row;
        }
        return $this->agenda;
        $result->free_result();
        $this->link->close();
    }

}

class nuevoContacto {

    public function __construct() {
        $this->agenda = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }

    private function set_names() {
        return $this->link->query("SET NAMES 'utf8'");
    }

    public function listaGrupo() {
        self::set_names();

        $sql = 'SELECT * from grupos';
        $result = $this->link->query($sql);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $this->agenda[] = $row;
        }

        return $this->agenda;
        $result->free_result();
        $this->link->close();
    }

    public function insertarContacto($p_nombre, $p_apellido1, $p_apellido2, $p_telefono, $p_email1, $p_email2, $p_email3, $p_grupo1, $p_grupo2, $p_grupo3) {
        self::set_names();

        $sql = "call pInsertarContactos('$p_nombre', '$p_apellido1', '$p_apellido2', $p_telefono, '$p_email1', '$p_email2', '$p_email3', '$p_grupo1', '$p_grupo2', '$p_grupo3')";
        $this->link->query($sql);
    }

// Filtros en la tabla

    public function lista_consultar($p_Nombre, $p_Apellido1, $p_Apellido2, $p_Grupo) {
        self::set_names();
        $sql = "CALL pFiltro('$p_Nombre', '$p_Apellido1', '$p_Apellido2','$p_Grupo')";
        foreach ($this->link->query($sql) as $res) {
            $this->agenda[] = $res;
        }
        return $this->agenda;
        $this->link = null;
    }

}

class eliminarContacto {

    public function __construct() {
        $this->agenda = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }

    private function set_names() {
        return $this->link->query("SET NAMES 'utf8'");
    }

    public function delete_contacto($idContacto) {
        $sql = "call pBorrarContacto ($idContacto)";
        $this->link->query($sql);
    }

}

class Modificar {

    public function __construct() {
        $this->agenda = array();
        $this->link = new mysqli('localhost', 'root', '', 'agenda');
    }

    private function set_names() {
        return $this->link->query("SET NAMES 'utf8'");
    }

    public function lista_modificar($p_nombre, $p_apellido1, $p_apellido2, $p_telefono, $p_email1, $p_email2, $p_email3, $p_grupo1, $p_grupo2, $p_grupo3, $p_idContBorrar) {

        self::set_names();

        $sql = "CALL pUpdateContacto('$p_nombre','$p_apellido1','$p_apellido2',$p_telefono,'$p_email1','$p_email2','$p_email3','$p_grupo1',"
                . "'$p_grupo2','$p_grupo3','$p_idContBorrar')";
        $this->link->query($sql);
    }

}



   