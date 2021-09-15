var produtos = ['Computador', 'Telefone', 'Mouse', 'Teclado'];
console.log(produtos);
console.log("Sua lista tem " + produtos.length + " produtos");
produtos.splice(2,1);
console.log(produtos);
console.log("Sua lista tem " + produtos.length + " produtos");

function pesquisar(item) {
    var pesquisa = produtos.includes(item); // includes verifica se o que voce digitou existe
    if (pesquisa === true) {
        console.log(`${item} foi encontrado na lista.`);
    } else {
        console.log(`${item} não foi encontrado na lista.`);
    }
}
pesquisar('Computador');

// TODO DESAFIO 1 COMPLETO

console.log("\n--------------------------------------\n");

var numeros = [1, 3, 5, 7, 0, 9];
var numerosOrdenados = numeros.sort(); // sort( ordena em order crescente)
console.log(numerosOrdenados);
numerosOrdenados.splice(0, 1); // splice() remove o tem pelas posição index e o item
console.log(numerosOrdenados);
var OrdemContraria = numerosOrdenados.reverse();// inverte uma array ou string
console.log(OrdemContraria);

// TODO DESAFIO 2 COMPLETO

console.log("\n--------------------------------------\n");

var hoje = "15/09/2021";
var sla = hoje.split('/'); // o split() separa em um array separando-o pelo sinal colocado
var day = sla[0];
var mounth = sla[1];
var year = sla[2];

console.log(`Hoje é dia ${day} do mes ${mounth} e do ano de ${year}`);

// TODO DESAFIO 3 COMPLETO