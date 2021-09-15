var back = document.querySelector(".background");
var body = document.body;
back.addEventListener('mouseover', ()=>{
    back.style.transition = "0.5s";
    back.style.backgroundColor = "black";
    back.style.cursor = "pointer";
});

back.addEventListener('mouseout', ()=>{
    back.style.transition = "0.5s";
    back.style.backgroundColor = "#101050";
    back.style.cursor = "none";
});


//? ↓ PEGA CADA ELEMENTO DE UM ARRAY MULTIPLO ↓
//? ↓ DE 3 E 5 E ADICIONA EM OUTRO ARRAY ↓

function tchapTchura (array) {

//?  ↓ PEGA CADA ELEMENTO DE UM ARRAY ↓
        for (i = 0; i < array.length; i++){
         console.log(array[i]);
        }

//?  ↓ PEGA CADA ELEMENTO DE UM ARRAY ↓
    var arr = [];
    var sla =  array.forEach(element => {
        console.log(element);
        for(n=0;n<=element;n++){
                if(n*3 == element){
                    console.log(element + " Multiplo de 3");
                    arr.push(element);
                }
    
                if(n*5 == element){
                    console.log(element + " Multiplo de 5");
                    arr.push(element);
                }
        }
    });
    console.log(arr);
    console.log(sla);
}
tchapTchura(["Sla",2,3,4,5,6,7,8,9,10,11,12,60]);

//?  ↓ PEGA CADA ELEMENTO DE UM ARRAY ↓

var array = [1,2,3,4,5,6];
for(item of array){
    if(item % 2 == 0){
        console.log(item + " é PAR");
    }
    if(item % 2 == 1){
        console.log(item + " é IMPAR");
    }
}

var sla = 1235;
console.log(sla % 5); 

var sla2 = [1,2,3,5,8,2,5,7,2,7,12,76,23,97,34,65,23,87,23,62,721,57,23,865];
for(item of sla2){
    if(item % 3 == 0){
        console.log(item + " é multiplo de 3");
    }else if(item % 5 == 0){
        console.log(item + " é multiplo de 5");
    }else{
        console.log(item + " não é multiplo nem de 3 e nem de 5");
    }
}