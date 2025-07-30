function mudarcor(){
    const num = parseInt(prompt(`1 - Verde\n2 - Laranja\n3 - Vermelho\n\nDigite a cor a ser mostrada:`))

    switch (num) {
        case 1:
            document.getElementById('s1').style.backgroundColor = 'green'
            document.getElementById('s1').style.boxShadow = '0px 0px 10px 5px rgba(64, 208, 35, 0.93)'

            document.getElementById('s2').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s2').style.boxShadow = '0px 0px 0px 0px transparent'

            document.getElementById('s3').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s3').style.boxShadow = '0px 0px 0px 0px transparent'

        break;
    
        case 2:
            document.getElementById('s1').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s1').style.boxShadow = '0px 0px 0px 0px transparent'

            document.getElementById('s2').style.backgroundColor = 'orange'
            document.getElementById('s2').style.boxShadow = '0px 0px 10px 5px rgba(208, 133, 35, 0.93)'

            document.getElementById('s3').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s3').style.boxShadow = '0px 0px 0px 0px transparent'

        break;

        case 3:
            document.getElementById('s1').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s1').style.boxShadow = '0px 0px 0px 0px transparent'

            document.getElementById('s2').style.backgroundColor = 'rgba(255, 255, 255, 0.18)'
            document.getElementById('s2').style.boxShadow = '0px 0px 0px 0px transparent'

            document.getElementById('s3').style.backgroundColor = 'red'
            document.getElementById('s3').style.boxShadow = '0px 0px 10px 5px rgba(208, 35, 35, 0.93)'
        break;
    
        default:
            alert(`[ERRO]\nDigite um número válido!`)
            break;
    }
}