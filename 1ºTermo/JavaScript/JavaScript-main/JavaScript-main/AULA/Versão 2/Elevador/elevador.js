function mudarcor(){
    const num = parseInt(prompt(`1 - Verde\n2 - Laranja\n3 - Vermelho\n\nDigite a cor a ser mostrada:`))

    switch (num) {
        case 1:
            document.getElementById('s1').style.backgroundColor = 'green'
        break;
    
        case 2:
            document.getElementById('s2').style.backgroundColor = 'orange'
        break;

        case 3:
            document.getElementById('s3').style.backgroundColor = 'red'
        break;
    
        default:
            alert(`[ERRO]\nDigite um número válido!`)
            break;
    }
}