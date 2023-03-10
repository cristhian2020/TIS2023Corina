<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','parqueo');

$servidor = "mysql:dbname=".BD."; host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "la conexion a la BD fue exitosa";

}catch(PDOException $e){
   // echo "Error al conectar a la BD";
    echo "<script>alert('Error al conectar a la BD');</script>";

}

 $URL = "http://localhost/www.sisparqueo.com";

?>