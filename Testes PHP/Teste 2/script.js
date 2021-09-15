// var nam = prompt("Qual seu nome");
// var ida = prompt("Qual sua idade");
// var gen = prompt("Qual seu genero");
// var pessoa = {
//   nome: nam,
//   idade: ida,
//   genero: gen,
// };
// var confirmar = confirm("Quer ver aparecer na tela?"); // confirm() pergunta alguma confirmção

// if (confirmar == true) {
//   document.write("<h1>" + pessoa.nome + "</h1>");
//   document.write("<h1>" + pessoa.idade + "</h1>");
//   document.write("<h1>" + pessoa.genero + "</h1>");
// } else {
//   console.log(pessoa.nome);
//   console.log(pessoa.idade);
//   console.log(pessoa.genero);
// }


        var pessoas = [{name:"Gustavo",idade:15,genero:"Masculino1"},{name:"Lucas",idade:65,genero:"Masculino2"},{name:"João",idade:17,genero:"Masculino3"}];
        console.log(pessoas[1].name);


  var count = 0;
  var h1 = document.getElementById("h1");
  var botao = document.getElementById("botao");
  botao.addEventListener('click',()=>{
    count++;
    h1.innerHTML = count;
  });
  function valor(sla){
    return sla.split('').reverse().join('');
  }
  console.log(valor("Slaasdd"));

/*
TODO               OBJETO NAS LINGUAGENS

!                    Java Script
!
!                    var pessoa = {
!                            name:"Gustavo",
!                            idade:"15",
!                            genero:"Masculino"
!                    };

?                    PHP
?
?                        $pessoa = [
?                            name=>"Gustavo",
?                            idade=>15,
?                            genero=>"Masculino"
?                        ];

*/

function contaLetras(string, letra) {
  // Escreva aqui seu código
  for(i = 0; i < string.length; i++){
    if(letra == string[i]){
      console.log("Oi");
    }
  }
}
contaLetras("Gustavo", "v");