function shSenha(){
    var tipo = document.getElementById("senha");
        if(tipo.type === "password"){
            tipo.type = "text";
                var shbtn = document.getElementById("btn-pass");
                    shbtn.innerHTML = "<button id='eye' type='button' class='btn glyphicon glyphicon-eye-open' onclick='shSenha()'></button>";
        } else {
            tipo.type = "password";
            var shbtn = document.getElementById("btn-pass");
                shbtn.innerHTML = "<button id='eye' type='button' class='btn glyphicon glyphicon-eye-close' onclick='shSenha()'></button>";

        }

}