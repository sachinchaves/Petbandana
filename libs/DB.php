<?php

    class DB {

        public function connect(){
            $arrConfig = parse_ini_file("../bandana.ini");
            $host = $arrConfig['host'];
            $username = $arrConfig['username'];
            $password = $arrConfig['password'];
            $database = $arrConfig['database'];
            return mysqli_connect($host, $username, $password, $database);
        }

        public function runQuery($sql) {
            $oDB = new DB();
            $result = mysqli_query($oDB->connect(), $sql);
            return $result;
        }

        static public function selectOne($sql){
            $oDB = new DB();
            
            $results = mysqli_query($oDB->connect(), $sql);  
            return mysqli_fetch_assoc($results);
        }

        static public function selectAll($sql){
            $oDB = new DB();
        
            $results = mysqli_query($oDB->connect(), $sql);  
            
            $data = [];
            while($row = mysqli_fetch_assoc($results)){
                $data[] = $row;
            }

            return $data;
        }
        

    }
?>