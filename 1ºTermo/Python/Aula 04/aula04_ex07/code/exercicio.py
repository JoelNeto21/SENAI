num = int(input("Digite um número inteiro não negativo: "))
fatorial = 1

if num < 0:
    print("Número inválido! Digite um inteiro não negativo.")
else:
    for i in range(1, num + 1):
        fatorial *= i
    print(f"O fatorial de {num} é {fatorial}.")

'''
DESCRIÇÃO:
- O programa solicita um número inteiro não negativo ao usuário.
- Verifica se o número é válido (não negativo).
- Calcula o fatorial usando um laço for que multiplica todos os números de 1 até o número digitado.
- Exibe o resultado do fatorial.
'''