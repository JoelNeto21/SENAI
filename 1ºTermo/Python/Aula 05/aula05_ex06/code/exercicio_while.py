# Aula 05 - Ex 6
# Mostrar uma string de trás para frente (usando while)

texto = input("Digite uma palavra ou frase: ")
i = len(texto) - 1

while i >= 0:
    print(texto[i], end="")
    i -= 1
print()
