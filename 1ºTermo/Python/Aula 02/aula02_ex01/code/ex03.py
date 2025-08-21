salario = float(input("Digite o salário atual: "))
percentual = float(input("Digite o percentual de aumento (%): "))

novo_salario = salario + (salario * percentual / 100)

print("Salário atualizado:", novo_salario)

'''
DESCRIÇÃO:
- Solicita o valor atual do salário e o percentual de aumento com input().
- Converte os valores para float.
- Calcula o aumento: salário * (percentual / 100).
- Soma ao salário atual e imprime o novo salário.
'''