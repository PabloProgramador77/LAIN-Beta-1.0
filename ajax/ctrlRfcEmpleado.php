<?php

    require "../models/mdlEmpleados.php";

    class ctrlRfcEmpleado{

        static public function getRfc(){

            $table="empleados";
            $col="rfc";
            $data=array(
                "rfc"=>$_POST['rfc']
            );

            $obj=empleadosMdl::getRfcEmpleado($table, $col, $data);

            echo $obj['rfc'];

            $obj=null;

        }

    }

    $obj=ctrlRfcEmpleado::getRfc();

?>