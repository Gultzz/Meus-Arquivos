function downmouse(){
 console.log("Voce clicou");
}
function upmouse(){
    console.log("Voce desclicou");
}
function passouMouse(){
    console.log("Voce passo por cima");
}
function tirouOmouse(){
    console.log("Voce tirou o mouse de cima");
}
function movendoMouse(){
    console.log("Voce está mechendo sobre o botao");
}
function direitoNao(){
    console.log("Voce clicoi com direito");
    return false;
}
function focado(){
    console.log("Focado");
}
function opcaoSelecionada(cardapioo){
    console.log(cardapioo.value + " selecionado");

}
function aceitar(){
    if(obs.value == ""){
        alert("Voce pediu "+ cardapioo.value + " com " + cardapio.value);
    }else{
        alert("Voce pediu "+ cardapioo.value + " com " + cardapio.value + "    OBS: " + obs.value);
    }
}
function aceito2(cardapio){
    console.log(cardapioo.value + " selecionado");
}
function sumir(){
    var lateral1 = document.createElement("img");
    lateral1.setAttribute("class", "lateral1");
    lateral1.setAttribute("style", "opacity: 1");
}
sumir();