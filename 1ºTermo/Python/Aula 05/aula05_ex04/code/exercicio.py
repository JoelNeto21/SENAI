# Aula 05 - Ex 4
# Ler idade e sexo de N pessoas e calcular médias (while)

total = int(input("Quantas pessoas serão inseridas? "))
cont = 0
soma_m = soma_h = qtd_m = qtd_h = 0

while cont < total:
    idade = int(input(f"Idade da pessoa {cont + 1}: "))
    sexo = input("Sexo (M/F): ").strip().upper()

    if sexo == "F":
        soma_m += idade
        qtd_m += 1
    elif sexo == "M":
        soma_h += idade
        qtd_h += 1

    cont += 1

media_m = soma_m / qtd_m if qtd_m else 0
media_h = soma_h / qtd_h if qtd_h else 0
media_total = (soma_m + soma_h) / total

print(f"Média de idade das mulheres: {media_m:.2f}")
print(f"Média de idade dos homens: {media_h:.2f}")
print(f"Média de idade do grupo: {media_total:.2f}")
