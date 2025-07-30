//Exercício 1: Operador && (E) 
//Pergunta: Dada as variáveis a e b, qual será o resultado das expressões abaixo?

let a = true; 
let b = false; 
console.log(a && b); // false
console.log(a && true); // true
console.log(b && false); // false
console.log(a && (b || true)); // true