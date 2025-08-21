numero = int(input("Digite o número que deseja treinar na tabuada: "))

acertos = 0
erros = 0

for i in range(1, 11):
    resposta = int(input(f"{numero} x {i} = "))
    resultado_correto = numero * i

    if resposta == resultado_correto:
        print("CORRETO")
        acertos += 1
    else:
        print(f"QUE PENA, VOCÊ ERROU, O VALOR CORRETO É {resultado_correto}")
        erros += 1

print(f"\nTotal de acertos: {acertos}")
print(f"Total de erros: {erros}")

'''
DESCRIÇÃO:
- O programa solicita ao usuário um número para treinar a tabuada.
- Utiliza um laço for que vai de 1 até 10 para fazer as multiplicações.
- A cada iteração, o usuário digita o resultado da multiplicação, e o programa compara com o valor correto.
- Se a resposta estiver certa, exibe “CORRETO” e soma 1 na variável acertos.
- Se estiver errada, exibe a resposta correta e soma 1 em erros.
- Ao final, imprime o total de acertos e de erros acumulados durante o treino.
'''