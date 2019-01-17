<?php
class conn_db{
    //Atributos
    private $hostname = "localhost";
    private $user = "root";
    private $password = "root!@#1nf0";
    private $database = "login";
    
    public function conecta_db(){
        $link = mysqli_connect($this->hostname, $this->user, $this->password) or die("Erro: " . mysqli_error($link));
        mysqli_select_db($link, $this->database);
        return $link;
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query("SET character_set_connection=utf8");
    mysqli_query("SET character_set_client=utf8");
    mysqli_query("SET character_set_results=utf8");
    }  
}
?>