soma = 0
maior = None
menor = None

for i in range(10):
    num = int(input(f"Digite o {i+1}º número inteiro: "))
    soma += num

    if maior is None or num > maior:
        maior = num
        
    if menor is None or num < menor:
        menor = num

media = soma / 10

print(f"Maior valor digitado: {maior}")
print(f"Menor valor digitado: {menor}")
print(f"Média dos valores: {media:.2f}")

'''
DESCRIÇÃO:
- O programa lê 10 números usando um laço for e acumula na variável soma. 
- As variáveis maior e menor são iniciadas como None e atualizadas conforme os valores digitados. 
- Após as leituras, calcula-se a média dividindo a soma por 10. 
- São exibidos o maior, o menor e a média dos números.
'''