valor = float(input("Digite o valor da prestação: "))
taxa = float(input("Digite a taxa de juros (%): "))
tempo = int(input("Digite o tempo de atraso (em meses): "))

prestacao = valor + (valor * (taxa / 100) * tempo)

print("Valor da prestação em atraso:", prestacao)

'''
DESCRIÇÃO:
- Recebe valor, taxa e tempo como float.
- Usa fórmula: prestação = valor + (valor * (taxa / 100) * tempo).
- Exibe o valor final da prestação.
'''