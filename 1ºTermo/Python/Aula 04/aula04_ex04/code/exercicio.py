idadeF = idadeM = countF = countM = 0
i = 0

while i < 10:
    sexo = input("\nSexo (M/F): ")
    if sexo == 'M' or sexo == 'm':
        idadeM += int(input("Digite sua idade: "))
        countM += 1
        i += 1
    elif sexo == 'F' or sexo == 'f':
        idadeF += int(input("Digite sua idade: "))
        countF += 1
        i += 1
    else:
        print("Erro! Tente novamente...")

print("")
if countF > 0:
    print(f"Idade Média das mulheres: {round(idadeF / countF)} anos")
if countM > 0:
    print(f"Idade Média dos homens: {round(idadeM / countM)} anos")
print(f"Idade Média do grupo: {round((idadeF + idadeM) / (countF + countM))} anos\n")

'''
DESCRIÇÃO:
- O programa solicita o sexo e a idade de 10 pessoas.
- Usa um laço para repetir o processo até que os dados válidos de 10 pessoas sejam inseridos.
- Soma as idades separadamente para homens e mulheres, contando quantos de cada participaram.
- Após a coleta, calcula e exibe:
    - a idade média das mulheres (se houver),
    - a idade média dos homens (se houver),
    - e a idade média geral do grupo.
'''