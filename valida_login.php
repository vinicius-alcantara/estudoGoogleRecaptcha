<pre>
<?php
session_start(); //Inicia Sessão dos usuários
//API - Google Captcha
$curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POSTFIELDS => [
        'secret' => '6Len-k8UAAAAAGwnYJ1AzwTLBCx33JEm2jCiwe0l',
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ]
]);
$response = json_decode(curl_exec($curl));
curl_close($curl);
//Fim - Captcha

require_once 'conn_db.php'; //Inclui a classe de conexão ao DB
//Recebe parâmtros do formulario de login: login.php
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$conn = new conn_db();
$conexao = $conn->conecta_db();

$sql = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";
$resultado_id = mysqli_query($conexao, $sql);
if($resultado_id){
    $dados_usuario = mysqli_fetch_array($resultado_id);
    if($dados_usuario["usuario"] && $response->success == 1){
        $_SESSION["id_usuario"] = $dados_usuario["id"];
        $_SESSION["usuario"] = $dados_usuario["usuario"];
        $_SESSION["email"] = $dados_usuario["email"];
        header("Location: home.php");
    } elseif ($response->success == 0) {
        header("Location: login.php?erro=2");
    } elseif (!$dados_usuario["usuario"]){
        header("Location: login.php?erro=1");
    }
}else{
    echo "Erro na excução da consulta. Por favor entrar em contato com admin do site!";
}
?>
</pre>