function gera_cor(){
    var hexadecimais = '0123456789ABCDEF';
    var cor = '#';
  
    // Pega um número aleatório no array acima
    for (var i = 0; i < 6; i++ ) {
    //E concatena à variável cor
        cor += hexadecimais[Math.floor(Math.random() * 16)];
    }
    document.getElementById("body").style.backgroundColor = cor;
}
function colocarImagem2(imagem) {
    document.getElementById("image2").src = imagem;
}
function tirarImagem2(imagem) {
    document.getElementById("image2").src = imagem;
}
function aparecer2(texto1,texto2,texto3,texto4,texto5){
    const ap = document.getElementById("itemAparecer").style;
    ap.position = texto1;
    ap.width = texto2;
    ap.height = texto3;
    ap.color = texto4;
    ap.backgroundColor = texto5;
}
function aparecer(){
    document.getElementById("bot").onclick = aparecer2('none','0','0','0','0');
}
function aparecer3(texto1,texto2,texto3,texto4,texto5){
    const ap = document.getElementById("itemAparecer").style;
    ap.position = texto1;
    ap.width = texto2;
    ap.height = texto3;
    ap.color = texto4;
    ap.backgroundColor = texto5;
}