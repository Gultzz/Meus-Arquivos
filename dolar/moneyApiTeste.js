addEventListener('keyup', async function () {
    await convert();
});
async function convert() {
    setTimeout(async function () {
        var valor = document.getElementById("input").value.replace(',', '.');
        var moeda1 = await `http://api.currencylayer.com/live?access_key=77d152f6608023e5fe662b878474021f&format=1`;
        console.log(moeda1);
        // var link = fetch(url).then(response => console.log(response.json()));
        var link = await fetch(moeda1).then(response => response.json()).then(link);
        console.log(link);
        console.log(link.quotes.USDBRL);
        var h1 = document.getElementById("h1");
        var total = (link.quotes.USDBRL * valor).toFixed(2).replace('.', ',');
        h1.innerHTML = "R$: " + total;
    }, 0);
}

// var caesarShift = function (str, amount) {
//   // Wrap the amount
//   if (amount < 0) {
//     return caesarShift(str, amount + 26);
//   }

//   // Make an output variable
//   var output = "";

//   // Go through each character
//   for (var i = 0; i < str.length; i++) {
//     // Get the character we'll be appending
//     var c = str[i];

//     // If it's a letter...
//     if (c.match(/[a-z]/i)) {
//       // Get its code
//       var code = str.charCodeAt(i);

//       // Uppercase letters
//       if (code >= 65 && code <= 90) {
//         c = String.fromCharCode(((code - 65 + amount) % 26) + 65);
//       }

//       // Lowercase letters
//       else if (code >= 97 && code <= 122) {
//         c = String.fromCharCode(((code - 97 + amount) % 26) + 97);
//       }
//     }

//     // Append
//     output += c;
//   }

//   // All done!
//   return output;
// };
// console.log(caesarShift("aaa", 300));



