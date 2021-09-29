<?php

    require "../models/mdlEmpleados.php";

    class empleadosCtrl{

        static public function addEmpleado(){

            $table="empleados";

            $cols=array(
                "col1"=>'nombreEmp',
                "col2"=>'apePat',
                "col3"=>'apeMat',
                "col4"=>'edad',
                "col5"=>'genero',
                "col6"=>'fechaNac',
                "col7"=>'edoCivil',
                "col8"=>'curp',
                "col9"=>'nss',
                "col10"=>'rfc'
            );

            $data=array(
                "nombre"=>$_POST['nombre'],
                "paterno"=>$_POST['paterno'],
                "materno"=>$_POST['materno'],
                "edad"=>$_POST['edad'],
                "genero"=>$_POST['genero'],
                "civil"=>$_POST['civil'],
                "nacimiento"=>$_POST['nacimiento'],
                "curp"=>$_POST['curp'],
                "nss"=>$_POST['nss'],
                "rfc"=>$_POST['rfc']
            );

            $obj=empleadosMdl::addEmpleadoDB($table, $cols, $data);

            return $obj;

            $obj=null;

        }

    }

?>