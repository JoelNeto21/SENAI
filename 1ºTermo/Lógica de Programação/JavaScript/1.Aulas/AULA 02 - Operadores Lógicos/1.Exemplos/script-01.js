/* TEORIA ->

//Operadores Lógicos

let a = true;
let b = false;
let c = true;
let d = false;

console.log('\nOperador AND');
console.log("-----------------")

console.log(a && b); // false
console.log(a && c); // true
console.log(a && d); // false

console.log(b && c); // false
console.log(b && d); // false

console.log(c && d); // false

//----------------------------

console.log('\nOperador OR');
console.log("-----------------")

console.log(a || b); // true
console.log(a || c); // true
console.log(a || d); // true

console.log(b || c); // true
console.log(b || d); // false

console.log(c || d); // true

//----------------------------

console.log('\nOperador NOT');
console.log("-----------------")

console.log(!a); // false
console.log(!b); // true
console.log(!c); // false
console.log(!d); // true

//----------------------

console.log("\n-------------------------------")

let ab = true;
let bc = false;

let andResultado = ab && bc;
console.log("\nResultado de ab && bc: " + andResultado); // false

let orResultado = ab || bc;
console.log("\nResultado de ab || bc: " + orResultado); // true

let notResultado = !ab;
console.log("\nResultado de !ab: " + notResultado); // false
let notResultado2 = !bc;
console.log("Resultado de !bc: " + notResultado2 + ""); // true

let combinados = (ab && !bc) || (!ab && bc);
console.log("\nResultado de (ab && !bc) || (!ab && bc): " + combinados + "\n\n"); // true

*/

// Exemplos

let x = 10;
let y = 5;
let z = 0;

//Operador E (&&) com valores numéricos
let ResultadoE = (x > y) && (y > z);
console.log("\nResultado de (x > y) && (y > z): " + ResultadoE); // true
console.log("Resultado de (z < y) && (x > z): " + ((z < y) && (x > z))); // true

//Operador OU (||) com valores numéricos
let ResultadoOU = (x < y) || (y > z);
console.log("\nResultado de (x < y) || (y > z): " + ResultadoOU); // true

//Operador NÃO (!) com valores numéricos
let ResultadoN = !(x < y);
console.log("\nResultado de !(x < y): " + ResultadoN); // false

//Combinação de operadores lógicos com valores numéricos
let ResultadoC = ((x > y) && (y > z)) || ((x < y) && (z > y));
console.log("\nResultado de ((x > y) && (y > z)) || ((x < y) && (z > y)): " + ResultadoC + "\n\n"); // true
