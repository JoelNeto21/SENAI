//Algoritmo para checar se um veículo é elétrico ou flex

function veiculo(tipo){
    return tipo == "Elétrico" || tipo == "Flex";
}

console.log(veiculo("Elétrico")); // true
console.log(veiculo("Flex")); // true