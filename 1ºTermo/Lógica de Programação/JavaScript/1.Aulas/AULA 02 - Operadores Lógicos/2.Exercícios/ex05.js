//Exercício 5: Teste de Operadores Numéricos 

let a = 10; 
let b = 20; 
let c = 15; 

//AND
console.log((a < b) && (b > c)); // true
console.log((a > b) && (b > c)); // false
console.log((a < b) && (b < c)); // false
console.log((a > b) && (b < c)); // false
//OR
console.log((a < b) || (b > c)); // true
console.log((a > b) || (b > c)); // false
console.log((a < b) || (b < c)); // true
console.log((a > b) || (b < c)); // true
//NOT
console.log(!(a < b)); // false
console.log(!(a > b)); // true
console.log(!(b > c)); // false
console.log(!(b < c)); // true
console.log(!(c > a)); // false
console.log(!(c < a)); // true
//Combinação
console.log((a < b) && (c < b)) || ((a < c) && (c < b)); // true