function enviar(){
    var email = document.querySelector("#email").value;
    var senha = document.querySelector("#password").value;
    return logar();
}
function logar(){
    var email = document.querySelector("#email").value;
    var senha = document.querySelector("#password").value;
    var emailValue = document.querySelector("#email-valor").value;
    var senhaValue = document.querySelector("#password-valor").value;

    if(senhaValue == senha && emailValue == email){
        alert("LOGADO");
        document.location.href = "logado.html";
    }else{
        alert("Senha ou Email errado, caso tenha registado");
    }
}