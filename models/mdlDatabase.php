<?php

    class database{

        static public function conectDatabase(){

            $link=new PDO(
                "mysql: host=localhost; dbname=lain",
                "root",
                ""
            );

            $link->exec("set names utf8");

            return $link;

        }

    }

?>