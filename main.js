var email;
var senha;
var msgErro;
var img;

function mostrar(){
    mostrarLoading();
    email = document.getElementById("email");
    senha = document.getElementById("senha");
    msgErro = document.getElementById("msgErro");
    if(senha.value == ""){
            msgErro.innerText = "Preencha todos os campos";
            removerImagem();
    }else{
        msgErro.innerText = "";
        removerImagem();
    }
    if(email.value == ""){
        msgErro.innerText = "Preencha todos os campos";
        removerImagem();
}else{
    msgErro.innerText = "";
    removerImagem();
}
}
function mostrarLoading(){
    img = document.getElementById("img");
    img.src = "https://olaargentina.com/wp-content/uploads/2019/11/loading-gif-transparent-10.gif";
}
function removerImagem(){
    img = document.getElementById("img");
    img.src = "";
}