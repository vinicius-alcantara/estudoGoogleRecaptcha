<?php
require_once 'conn_db.php'; //Inclui a classe de conexão ao DB
//Recebe parâmtros do formulario de cadastro: inscrevase.php
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
//Instanciando objeto da classe conn_db
$conn = new conn_db();
$conexao = $conn->conecta_db();
//SQL

$sql = "insert into usuarios (usuario, email, senha) values ('$usuario', '$email', '$senha')";
$sql_return_id = mysqli_query($conexao, $sql); 

if($sql_return_id){
   header("Location: index.php?success=1");
}else{
    header("Location: index.php?erro=3");
}
    
?>