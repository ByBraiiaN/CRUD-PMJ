<?php

    /*===============================
    ||Función para ejecutar la
    ||sentencia sql tabla supervisores.
    ================================*/
    function getSupervisor(array $data){
        $mysqli = conectar();
         $array = array();
           $sql = "SELECT * FROM ".$data['tabla']." ";
           $sql.= "ORDER BY ".$data['columna']." ASC";
           $res = $mysqli->query($sql);
        
        while ($reg = $res->fetch_object()) {
            $array[] = $reg;
        }

        return $array;
    }

    /*===============================
    ||Función para ejecutar la
    ||sentencia sql tabla empleados.
    ================================*/
    function getEmpleados(array $data){
        $mysqli = conectar();
         $array = array();
           $sql = "SELECT emp.id_empleado, emp.nombre, emp.apellido, emp.correo, emp.telefono, sup.supervisor ";
           $sql.= "FROM ".$data['tabla']." emp ";
           $sql.= "INNER JOIN tbl_supervisor sup ON ";
           $sql.= "emp.id_supervisor = sup.id_supervisor ";
           $sql.= "WHERE emp.estado = 1 ";
           $sql.= "ORDER BY emp.apellido ASC";
           $res = $mysqli->query($sql);

        while ($reg = $res->fetch_object()) {
            $array[] = $reg;
        }

        return $array;
    }

    /*===============================
    ||Función para ejecutar la
    ||sentencia sql insertar empleado.
    ================================*/
    function addEmpleado(array $data){
          $mysqli = conectar();
          $nombre = $mysqli->real_escape_string($data["nombre"]);
        $apellido = $mysqli->real_escape_string($data["apellido"]);
          $correo = $mysqli->real_escape_string($data["correo"]);
        $telefono = $mysqli->real_escape_string($data["telefono"]);
           $idSup = $data["id_supervisor"];
             $sql = "INSERT INTO ".$data['tabla']." ";
             $sql.= "(id_empleado, nombre, apellido, correo, telefono, id_supervisor, estado) ";
             $sql.= "VALUES (null, '{$nombre}', '{$apellido}', '{$correo}', '{$telefono}', {$idSup}, 1)";
           $mysqli->query($sql);
    }