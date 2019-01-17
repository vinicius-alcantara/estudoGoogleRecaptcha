<?php
    session_start();
?>
<!Doctype html>
<html lang="pt-br">
    <head>
        <title>Ambiente de Trabalho</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="hover/hover-min.css">
        <link rel="stylesheet" type="text/css" href="css/style-home.css">
        <script type="text/javascript" src="js/animation-text-banner.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="https://edu-de-lucas1.webnode.com/_files/200000134-b6879b8327/CodigoNeve.js"></script>
        <style>
            #video-goku {
                width: 1200px;
                height: 700px;
                box-sizing: border-box;
                margin-bottom: -17px;
            }
        </style>
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
        <script type="text/javascript">
            
            
            function mostraVideo(){
                var conteudoatual = document.getElementById("video-loading");
                conteudoatual.innerHTML = "<video id='video-goku' autoplay='autoplay'> <source src='videos/ka.mp4' type='video/mp4'></video>";
            }
            
          setTimeout(mostraVideo, 0);
          
          
           setInterval(function(){
                document.getElementById("video-goku").style.display = "none";
                document.getElementById("container").style.display = "block";
           }, 10000);
          
           
           
           //setTimeout(divPadrao, 30000);
          
           //window.addEventListener(divPadrao);
            
       
        </script>
        
        <div id="video-loading" style="margin-top: -13px; padding: 0px;">
        <!--
        <video id="video-goku" width="1200" height="700" controls="controls" autoplay="autoplay">
            <source src="videos/ka.mp4" type="video/mp4">
        </video>
        -->   
        </div>
        
        <div id="container" class="hvr-wobble-top hvr-wobble-skew hvr-buzz-out">
            <div id="caixa-selecao">
            <div id="ca">
                     <h3>Selecione o Ambiente</h3>
                 </div>
            <div class="form-group" id="formulario-ambiente">
            <div id="co">
                <p><b>Ambiente de Trabalho:</b></p>
                <form class="form-group" method="post" action="valida_ambiente.php">
                    <select class="form-control form-group" name="ambiente">
                        <option value="1" selected="">AWS | EC2 - Produção</option>
                        <option value="2">Rede Local - Produção</option>
                        <option value="3">Rede Local - Homologação</option>
                    </select>
                    <input class="btn btn-primary" type="submit" value="Entrar"/>
                </form>
            </div>
        </div>
            </div>
            <div id="ro">
                <p>&copy; 2018<br/>Developed by Vinícius Alcântara<br/>Versão 1.0</p>
            </div>
        </div>
        
        <div id="rodape-pag" style="margin-top: 0px;">
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
    </body>
</html>