# Aula 05 - Ex 7
# Calcular o fatorial de um número (usando while)

n = int(input("Digite um número para calcular o fatorial: "))
fatorial = 1
contador = n

while contador > 0:
    fatorial *= contador
    contador -= 1

print(f"O fatorial de {n} é {fatorial}")
