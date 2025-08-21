num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))

subtracao_usuario = float(input("Digite o resultado da subtração (num1 - num2): "))
multiplicacao_usuario = float(input("Digite o resultado da multiplicação: "))
divisao_usuario = float(input("Digite o resultado da divisão (num1 / num2): "))

subtracao_real = num1 - num2
multiplicacao_real = num1 * num2
divisao_real = num1 / num2

print(f"Subtração correta: {subtracao_real:.2f}")
print(f"Multiplicação correta: {multiplicacao_real:.2f}")
print(f"Divisão correta: {divisao_real:.2f}")

'''
DESCRIÇÃO:
- Solicita dois números float.
- Solicita do usuário os resultados de subtração, multiplicação e divisão.
- Compara os resultados informados com os reais e informa se estão corretos.
'''