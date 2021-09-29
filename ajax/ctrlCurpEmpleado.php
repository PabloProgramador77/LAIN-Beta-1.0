<?php

    require "../models/mdlEmpleados.php";

    class ctrlCurpEmpleado{

        static public function getCurp(){

            $table="empleados";
            $col="curp";
            $data=array(
                "curp"=>$_POST['curp']
            );

            $obj=empleadosMdl::getCurpEmpleadoAjax($table, $col, $data);

            echo $obj['curp'];

            $obj=null;

        }

    }

    $obj=ctrlCurpEmpleado::getCurp();

?>