<?php


class conexion {


    private $host = "localhost";
    private $dbname="proyecto";
    private $user="root";
    private $password="";
    private $db;




    function __construct(){

                try{

                    $this->db = new PDO(
                        "mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password
                    );  

                    echo "Conectado con exito";
                }catch(PDOException $error){

                    echo "ha ocurrido un erorr".$error;

                }

    }


}



$conectar = new conexion();



?>