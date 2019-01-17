<?php
$erro = isset($_GET["erro"]) ? $_GET["erro"] : 0;
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="hover/hover-min.css">
        <link rel="stylesheet" type="text/css" href="css/progress.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="js/sh-button-pass.js"></script>
        <script type="text/javascript" src="js/animation-text-banner.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div id="bk-navmenu">
        <div id="navmenu">
        <div class="container">
            <div id="navheader" class="navbar-header">
                <div id="logo">
                    <span>Imagem</span>
                </div>
                </div>
            <!--
                <div id="animated-text">
                    <h1>texto animado</h1>
                </div>
            -->    
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
            <h3 id="titulo-login"><br/>Login</h3>
                <div class="form-group" id="formulario">
                    <form class="form-group" method="post" action="valida_login.php">
                        
                <?php
                    $message_erro1 = '<div class="alert alert-danger" role="alert">
                    <strong>As credenciais fornecidas estão incorretas!</strong>
                    <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                    </button>
                    </div>';
                    
                    $message_erro2 = '<div class="alert alert-danger" role="alert">
                    <strong>Por favor, valide o captcha!</strong>
                    <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                    </button>
                    </div>';
                            
                    if($erro == 1){
                        echo $message_erro1;
                    } elseif ($erro == 2) {
                        echo $message_erro2;
                    }
                ?>
                        
        <p class="p-titulo">Usuário:</p>
            <div class="form-group left-inner-addon div-input">
                <label for="usuario">
                    <span class="glyphicon glyphicon-user"></span>
                        <input type="text" class="form-control input-user" placeholder="Usuário" id="usuario" name="usuario" size="28px" required=""/>
                </label>
            </div>
        <p class="p-titulo">Senha:</p>
            <div class="form-group left-inner-addon div-input">
                <label for="senha">
                    <span class="glyphicon glyphicon-lock"></span>
                                <input type="password" class="form-control input-user" placeholder="Senha" id="senha" name="senha" size="28px" required=""/>
                </label>
                </div>
                <div id="btn-pass" class="btn-pass hvr-pulse">
                        <button id="eye" type="button" class="btn glyphicon glyphicon-eye-close" onclick="shSenha()"></button>
                </div>
                    <br/>
                        <a href="#" data-toggle="modal" data-target="#Ijan-modal" style="font-family: Arial, sans-serif;">Esqueceu a Senha?</a>
                        <br/><br/>
                        <input type="submit" class="btn btn-primary btn_carrega_conteudo" value="Entrar" id="btn-entrar">
                        <br/><br/>
                        <div id="captcha" class="g-recaptcha" data-sitekey="6Len-k8UAAAAAAIBEzM1qIwFy4zYgKmyGZx7seJs"></div> 
                        <br/>
                    </form>
                    
            
            <!--Janela Modal-->
  <form class="modal fade" id="Ijan-modal">
      <div class="modal-dialog">
          <div class="modal-content">
              
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
              </button>
              <h4 class="modal-title">Redefinição de Senha</h4>
          </div>
          
          <div class="modal-body">
                  <label for="Iemail"></label>
                  <input type="email" class="form-control" placeholder="Digite seu Email" id="Iemail">
                  <label for="Ipass"></label>
                  <input type="password" class="form-control" placeholder="Qual a resposta de sua pergunta secreta?" id="Ipass">           
          </div>
          
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
      </div>
      </div>
  </form>
            </div>
            </div>
            <div>
            <p id="rodape">&copy; 2018<br/>Developed by Vinícius Alcântara<br/>Versão 1.0</p>
            </div>
        
        <div id="rodape-pag">
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
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <a href="http://www.cursors-4u.com/cursor/2005/08/30/spe9-10.html" target="_blank" title="Dragonball Z Gohan"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Dragonball Z Gohan" style="position:absolute; top: 0px; right: 0px;" /></a>
    </body>
    
    
    
</html>

