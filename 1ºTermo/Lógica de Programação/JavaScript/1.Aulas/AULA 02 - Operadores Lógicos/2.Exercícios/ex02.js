//Exercício 2: Operador || (OU) 
//Pergunta: Dada as variáveis x e y, qual será o resultado das expressões abaixo?

let x = false; 
let y = true; 
console.log(x || y); // true
console.log(x || false); // false
console.log(y || false); // true
console.log(x || (y && false)); // false