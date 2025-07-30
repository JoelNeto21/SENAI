const numeros = require("readline");

const num = numeros.createInterface({
  input: process.stdin,
  output: process.stdout,
});

num.question("Digite o primeiro número: ", (num1) => {
  num.question("Digite o segundo número: ", (num2) => {
    num.question("Digite o terceiro número: ", (num3) => {
      let soma = Number(num1) + Number(num2) + Number(num3);
      console.log(`A soma dos números é: ${soma}`);
      num.close();
    });
  });
});
