<?php
$erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;
$success = isset($_GET["success"]) ? $_GET["success"] : 0;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="hover/hover-min.css">
        <script type="text/javascript" src="js/sh-button-pass.js"></script>
    </head>
    <body>
        <div id="bk-navmenu">
        <div id="navmenu">
        <div class="container">
            <div id="navheader" class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barra-navegacao">
                <span class="sr-only">Alternar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <div id="logo">
                    <span>Imagem</span>
                </div>
                </div>
                    <div id="texto-dinamico" class="navbar-header">
                        <marquee direction="left" behavior="alternate">Seja Livre!</marquee>
                        <marquee direction="right" behavior="alternate">Use Linux!</marquee>
                    </div>
                        <div id="pinguin">
                            <span>Imagem</span>
                        </div>
            </div>
        </div>
        </div>
        <div id="container-raiz">
            <h3 id="titulo-cad">Cadastre-se!</h3>
                    <div class="form-group" id="formulario">
                    <form class="form-group" method="post" action="valida_cadastro.php">
                <?php
                    $message_erro3 = '<div class="alert alert-danger" role="alert">
                    <strong>Erro ao cadastrar usuário!</strong>
                    <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                    </button>
                    </div>';
                    
                    $success_info = '<div class="alert alert-success" role="alert">
                    <strong>Usuário cadastrado com sucesso!<br/><a href="http://localhost/login/login.php">Clique aqui para fazer login!</a></strong>
                    <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                    </button>
                    </div>';
                            
                    if($erro == 3){
                        echo $message_erro3;
                    } elseif ($success == 1) {
                        echo $success_info;
                    }                 
                ?>
    <p class="p-titulo">Usuário:</p>
        <div class="form-group left-inner-addon div-input">
            <label for="usuario">
                <span class="glyphicon glyphicon-user"></span>
                    <input class="form-control input-user" type="text" id="nome" name="usuario" placeholder="Nome de usuário" size="28px" required="">
            </label>
        </div><br/><br/>
    <p class="p-titulo">E-mail:</p>     
        <div class="form-group left-inner-addon div-input">
            <label for="email">
                <span class="glyphicon glyphicon-envelope"></span>
                    <input class="form-control input-user" type="email" id="email" name=" email" placeholder="E-mail" size="28px" required="">
            </label>
       </div>

    <p class="p-titulo">Senha:</p>        
        <div class="form-group left-inner-addon div-input">
            <label for="senha">
                <span class="glyphicon glyphicon-lock"></span>
                    <input class="form-control input-user" type="password" id="senha" name="senha" placeholder="Senha" size="28px" required="">
            </label>
        </div>
    <div id="btn-pass" class="btn-pass">
                        <button id="eye" type="button" class="btn glyphicon glyphicon-eye-close" onclick="shSenha()"></button>
                </div>
                
            <br/><br/><br/>
    <input id="btn-cad" type="submit" class="btn btn-group btn-primary" data-toggle="modal" data-target="#Ijan-modal" value="Cadastrar">
                    </form>
                    </div>    
                </div>
                <div>
                    <p id="rodape">&copy; 2018<br/>Developed by Vinícius Alcântara<br/>Versão 1.0</p>
                </div>
        <div id="rodape-pag" class="navbar navbar-fixed-top navbar-inverse navbar-transparent">
            <div id="rodape-corpo">
                <div id="institucional" class="info-rodape">
                    <ul class="list-group">
                        <h3>Institucional</h3>
                        <a href="#"><li>A Empresa</li></a>
                        <a href="#"><li>Carreira</li></a>
                        <a href="#"><li>Eventos</li></a>
                        <a href="#"><li>XcodeIT na Web</li></a>
                    </ul>
                </div>
                <div id="contato" class="info-rodape">
                    <ul class="list-group">
                        <h3>Contato</h3>
                        <li>E-mail: vinicius.redes2011@gmail.com</li>
                        <li>Fone | Whatsapp: (86)99450-3752</li>
                    </ul>
                </div>
                <div id="ajuda" class="info-rodape">
                    <ul class="list-group">
                        <h3>Ajuda</h3>
                        <a href="#"><li>Documentação</li></a>
                        <a href="#"><li>Suporte</li></a>
                    </ul>
                </div>
                <div id="xcodeit" class="info-rodape">
                    <p>XcodeIT</p>
                    <p id="copy">&copy; 2018<p>
                </div>
                
            </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
