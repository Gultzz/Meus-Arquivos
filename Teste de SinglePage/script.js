window.onload = mudar;
function abrirPage2(){
    const page2 = document.getElementById('page2');
    page2.style.width = "100%";
    page2.style.visibility = "visible";
    history.replaceState({page: 2}, "Título da Página 2", "?page=2");
}

function abrirPage1(){
    const page2 = document.getElementById('page2');
    page2.style.width = "0";
    page2.style.visibility = "hidden";
    history.replaceState({page: 1}, "Título da Página 1", "?page=1");
}

function dataAtualFormatada(){
    var data = new Date(),
        dia  = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0'+dia : dia,
        mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0'+mes : mes,
        anoF = data.getFullYear();
        console.log(`${diaF} ${mesF} ${anoF}`);
    return diaF+" "+mesF+" "+anoF;
}
var hora = function horario(){
    now = new Date();
    return now.getHours() + " : " + now.getMinutes() + " : " + now.getSeconds();
}
console.log(hora());


function mudar(){
    setTimeout(function () {
        var h1 = document.getElementById("h1");
        h1.innerText = hora();
        mudar();
    },1000);
}
