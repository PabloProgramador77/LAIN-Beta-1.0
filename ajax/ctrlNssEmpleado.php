<?php

    require "../models/mdlEmpleados.php";

    class ctrlNssEmpleado{

        static public function getNss(){

            $table="empleados";
            $col="nss";
            $data=array(
                "nss"=>$_POST['nss']
            );

            $obj=empleadosMdl::getNssEmpleado($table, $col, $data);

            echo $obj['nss'];

            $obj=null;

        }

    }

    $obj=ctrlNssEmpleado::getNss();

?>