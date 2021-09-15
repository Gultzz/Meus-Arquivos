window.onload = mudar;
var hora = function horario(){
    now = new Date();
// TODO      METODO 1

// ?    var horas = now.getHours();
// ?    var mins = now.getMinutes();
// ?    var secs = now.getSeconds();
// ?    if(horas < 10){
// ?        horas = "0" + horas;
// ?    }
// ?    if(mins < 10){
// ?        mins = "0" + mins;
// ?    }
// ?    if(secs < 10){
// ?        secs = "0" + secs;
// ?     }
// ?    return horas + " : " + mins + " : " + secs; //+ " : " + now.getMilliseconds();


// TODO      METODO 2     
       
    var tempo = [now.getHours(), now.getMinutes(), now.getSeconds()];
    if(tempo[0] < 10){
        tempo[0] = "0" + tempo[0];
    }
    if(tempo[1] < 10){
        tempo[1] = "0" + tempo[1];
    }
    if(tempo[2] < 10){
        tempo[2] = "0" + tempo[2];
    }
    return tempo[0] + " : " + tempo[1] + " : " + tempo[2];
}
console.log(hora());


function mudar(){
    setTimeout(()=>{
        var h1 = document.getElementById("h1");
        h1.innerText = hora();
        mudar();
    },1);
}

var sla = new Date();
function slaa(){
    s = sla.getDate();
    l = sla.getMonth() + 1;
    a = sla.getFullYear();
    console.log(s +"/"+ l +"/"+ a);
}
slaa();

var oi = "1234";
// console.log(oi.split('').reverse());
console.log(oi.repeat,(5));