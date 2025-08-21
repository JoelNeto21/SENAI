# Aula 05 - Ex 2
# Leia 10 valores inteiros e:
# - Encontre e mostre o maior valor
# - Encontre e mostre o menor valor
# - Calcule e mostre a média dos números lidos (usando while)

contador = 0
soma = 0
maior = None
menor = None

while contador < 10:
    valor = int(input(f"Digite o {contador + 1}º número: "))
    soma += valor
    if maior is None or valor > maior:
        maior = valor
    if menor is None or valor < menor:
        menor = valor
    contador += 1

media = soma / 10
print("Maior valor:", maior)
print("Menor valor:", menor)
print("Média:", media)
