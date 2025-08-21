# Aula 05 - Ex 3
# Verificar temperatura de clientes e classificar usando while

qtd = int(input("Quantas pessoas serão analisadas? "))
contador = 0
soma_temp = 0

while contador < qtd:
    temp = float(input(f"Temperatura da pessoa {contador + 1}: "))
    soma_temp += temp

    if temp < 37.2:
        print("Temperatura normal")
    elif 37.2 <= temp <= 38:
        print("Estado febril")
    elif 38 < temp <= 39:
        print("Com febre")
    else:
        print("Febre alta")

    contador += 1

media = soma_temp / qtd
print(f"Total de pessoas analisadas: {qtd}")
print(f"Média das temperaturas: {media:.2f}")
