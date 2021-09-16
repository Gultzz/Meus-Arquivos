
var total = 0;

function criarBalao(){
    var balao = document.createElement("div");
    balao.setAttribute("class", "balao");

    var x = Math.floor(Math.random() * 1300);
    var y = Math.floor(Math.random() * 550);

    balao.setAttribute("style", "left:"+x+"px;top:"+y+"px;");
    balao.setAttribute("onclick", "estourar(this)",);

    document.body.appendChild(balao);

}
function estourar(objeto){
    document.body.removeChild(objeto);
    total ++;
    var score = document.getElementById("total");
    score.innerHTML = "Baloes Estourados: " + total;
}
function carregarJogo() {
    setInterval(criarBalao, 1000);
}
