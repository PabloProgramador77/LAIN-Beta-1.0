<?php

    require "mdlDatabase.php";

    class empleadosMdl{

        static public function addEmpleadoDB($table, $cols, $data){

            $stmt=database::conectDatabase()->prepare(
                "INSERT INTO $table 
                ($cols[col1], $cols[col2], $cols[col3], $cols[col4], $cols[col5], $cols[col6], $cols[col7], $cols[col8], $cols[col9], $cols[col10]) 
                VALUES(:$cols[col1], :$cols[col2], :$cols[col3], :$cols[col4], :$cols[col5], :$cols[col6], :$cols[col7], :$cols[col8], :$cols[col9], :$cols[col10])"
            );

            $stmt->bindParam(":".$cols['col1'], $data['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col2'], $data['paterno'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col3'], $data['materno'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col4'], $data['edad'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col5'], $data['genero'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col6'], $data['nacimiento'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col7'], $data['civil'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col8'], $data['curp'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col9'], $data['nss'], PDO::PARAM_STR);
            $stmt->bindParam(":".$cols['col10'], $data['rfc'], PDO::PARAM_STR);

            if($stmt->execute()){

                return true;

            }else{

                return false;

            }

            $stmt->close();

            $stmt=null;

        }

        static public function getCurpEmpleadoAjax($table, $col, $data){

            $stmt=database::conectDatabase()->prepare(
                "SELECT * FROM $table WHERE $col=:$col"
            );

            $stmt->bindParam(":".$col, $data['curp'], PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->close();

            $stmt=null;

        }

        static public function getNssEmpleado($table, $col, $data){

            $stmt=database::conectDatabase()->prepare(
                "SELECT * FROM $table WHERE $col=:$col"
            );

            $stmt->bindParam(":".$col, $data['nss'], PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->close();

            $stmt=null;

        }

        static public function getRfcEmpleado($table, $col, $data){

            $stmt=database::conectDatabase()->prepare(
                "SELECT * FROM $table WHERE $col=:$col"
            );

            $stmt->bindParam(":".$col, $data['rfc'], PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt->close();

            $stmt=null;

        }

        static public function getEmpleadosDB($table){

            $stmt=database::conectDatabase()->prepare(
                "SELECT * FROM $table ORDER BY fecha DESC"
            );

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt->close();

            $stmt=null;

        }

    }

?>