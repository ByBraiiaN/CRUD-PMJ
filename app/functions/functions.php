<?php

    require "app/appcrud/crud.php";
    $_SESSION['msg'] = "";

    /*===============================
    ||Función para obtener
    ||todos los supervisores de la DB.
    ================================*/
    function supervisores(){
        $data = array(
            "tabla" => "tbl_supervisor",
            "columna" => "supervisor"
        );

        $datos = getSupervisor($data);
        return $datos;
    }

    /*===============================
    ||Función para obtener
    ||todos los empleados de la DB.
    ================================*/
    function empleados(){
        $data = array(
            "tabla" => "tbl_empleados"
        );

        $datos = getEmpleados($data);
        return $datos;
    }

    /*===============================
    ||Función para validar la
    ||información a insertar en la DB.
    ================================*/
    function add(){
        if($_POST["txt_supervisor"] == 0){
            $_SESSION['msg'] = '<div class="alert alert-warning alert-dismissible fase in">
                  <strong>Ups!</strong> Favor de seleccionar supervisor.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
        } else {
            $data = array(
                        "tabla" => "tbl_empleados",
                       "nombre" => trim($_POST["txt_nombre"]),
                     "apellido" => trim($_POST["txt_apellido"]),
                       "correo" => trim($_POST["txt_correo"]),
                     "telefono" => trim($_POST["txt_telefono"]),
                "id_supervisor" => $_POST["txt_supervisor"]
            );

            addEmpleado($data);
            $_SESSION['msg'] = '<div class="alert alert-success alert-dismissible fase in">
                <strong>Éxito!</strong> Empleado registrado en la Base de datos.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }