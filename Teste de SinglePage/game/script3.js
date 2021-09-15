var body = document.body;
var car = document.getElementById("car");

body.addEventListener('keypress', function(event){
    key = event.keyCode = 39;
    if(key === 37){
        car.style.left += "100px";
        console.log("dey");
    }
});

function clicado(){
    car.style.marginLeft += "100px";
    console.log(car.style.marginLeft);
}

body.addEventListener('keypress', enter);
function enter(event) {
    key2 = event.keyBoardEvent.keyCode;
    if (key2 === 39) {
        console.log("SLA");
    }
}

function inicializa(){
    var slaa = document.addEventListener('keydown', pegaTecla);
}

function pegaTecla(){
  var tecla = event.keyCode;
  
  while(tecla === 38){
    console.log(tecla);
        if(tecla == 38){
            car.style.left += "5px";
        }else if(car.style.left == "5px"){
            car.style.left += "100px";
        }
    }
}
inicializa();