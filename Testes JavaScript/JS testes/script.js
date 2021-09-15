
setTimeout(100, document.write(Date()));

var tracos = "------------------------";

const number = [
    {name:"Item1", preco:15.90},
    {name:"Item2", preco:16.90},
    {name:"Item3", preco:12.90},
    {name:"Item4", preco:22.00},
    {name:"Item5", preco:32.90},
    {name:"Item6", preco:45.90},
    {name:"Item7", preco:20.90},
    {name:"Item8", preco:90.90},
    {name:"Item9", preco:105.99},
    {name:"Item10", preco:13.90},
    {name:"Item11", preco:73.90},
    {name:"Item12", preco:154.90},
    {name:"Item13", preco:82.00}
];

const numberModify = number.filter(item => {
    if(item.preco >= 30){
        if(item.preco >= 60){
            return {name:item.name, preco:item.preco = "De " + item.preco + " por " + item.preco/2 + ", 50% de desconto na promoção"}
        }else{
            return {name:item.name, preco:item.preco}
        }
    }
});
console.log(number);
console.log(numberModify);

console.log(tracos);

const users = [
    { name: 'Ada Lovelace', premium: true },
    { name: 'Grace Hopper', premium: false },
    { name: 'Alan Turing', premium: true },
    { name: 'Linus Torvalds', premium: false },
    { name: 'Margaret Hamilton', premium: true }
];

const premiumUsers = users.filter(user => user.premium);

console.log(premiumUsers);

console.log(tracos);

const criancas = [
    { name: 'Lucas', altura:1.48 ,idade: 10},
    { name: 'João', altura:1.44 ,idade: 9},
    { name: 'Marcos', altura:1.53 ,idade: 11},
    { name: 'Pedro', altura:1.70 , idade: 16},
    { name: 'Bernardo', altura:1.50 , idade: 13}
];

const criancasPermitidas = criancas.filter(crianca => crianca.altura >= 1.50 && crianca.idade >= 11);

console.log(criancas);
console.log(criancasPermitidas);

console.log(tracos);

const nums = [0,1,2,3,4,5,6,7,8,9,10];
const numSoma = nums.filter(num => num / 2 == num);
const numSoma2 = nums.reduce((acumulador, item) => acumulador + item, 0);
console.log(numSoma);
console.log(numSoma2);

console.log(tracos);



