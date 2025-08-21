temperaturas = []

while True:
    entrada = input("Digite a temperatura do paciente (ou 'sair' para encerrar): ")
    
    if entrada.lower() == 'sair':
        break

    try:
        temp = float(entrada)
        temperaturas.append(temp)

        if temp < 37.2:
            print("Temperatura normal.")
        elif 37.2 <= temp <= 38.0:
            print("Estado febril.")
        elif 38.0 < temp <= 39.0:
            print("Febre.")
        else:
            print("Febre alta.")
    
    except ValueError:
        print("Valor inválido. Digite um número ou 'sair'.")

total = len(temperaturas)
media = sum(temperaturas) / total if total > 0 else 0

print("\nRESULTADO FINAL:")
print(f"Total de pacientes analisados: {total}")
print(f"Média das temperaturas: {media:.2f} °C")

'''
DESCRIÇÃO:
- Recebe temperaturas em loop até o usuário digitar "sair".
- Armazena cada temperatura em uma lista.
- Classifica cada temperatura:
    - < 37.2 → normal
    - 37.2 a 38.0 → estado febril
    - 38.0 a 39.0 → febre
    - 39.0 → febre alta
- Ao final, exibe o total de pacientes e a média das temperaturas.
'''