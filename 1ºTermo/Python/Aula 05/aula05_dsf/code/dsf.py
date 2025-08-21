while True: 
    numero = int(input("Digite o número da tabuada que você quer treinar: ")) 
    acertos = 0 
    erros = 0 

    for i in range(1, 11): 
        resposta = int(input(f"Quanto é {numero} x {i}? ")) 
        resultado_correto = numero * i 

    if resposta == resultado_correto: 
        print("CORRETO") 
        acertos += 1 
    else: 
        print(f"QUE PENA, VOCÊ ERROU, O VALOR CORRETO É {resultado_correto}") 
        erros += 1 

    print(f"Total de acertos: {acertos}") 
    print(f"Total de erros: {erros}") 

    repetir = input("Deseja começar de novo? (s/n): ").lower() 
    if repetir != "s": 
        break 

'''
DESCRIÇÃO:
- O programa permite ao usuário treinar a tabuada de um número escolhido, repetindo até que ele 
decida parar. 
- Para cada número de 1 a 10, o programa solicita a resposta da multiplicação e verifica se está 
correta. 
- Imprime "CORRETO" se a resposta estiver certa, ou informa o valor correto caso contrário. 
- Ao final de cada rodada, exibe o total de acertos e erros. 
- Pergunta ao usuário se deseja começar de novo, repetindo o processo enquanto a resposta for "s".
'''