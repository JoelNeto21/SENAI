// Desafio 2
let n1 = 5
let operador = '*'
let n2 = 4

if(operador == '+'){
    console.log(`\n${n1} + ${n2} = ${n1 + n2}\n`);
}
else if(operador == '-'){
    console.log(`\n${n1} - ${n2} = ${n1 - n2}\n`);
}
else if(operador == '*' || operador == 'x'){
    console.log(`\n${n1} x ${n2} = ${n1 * n2}\n`);
}
else if(operador == ':' || operador == '/'){
    console.log(`\n${n1} / ${n2} = ${n1 / n2}\n`);
}