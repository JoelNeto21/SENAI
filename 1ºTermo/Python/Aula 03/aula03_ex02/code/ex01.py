gols_time1 = int(input("Digite os gols do primeiro time: "))
gols_time2 = int(input("Digite os gols do segundo time: "))

if gols_time1 > gols_time2:
    print("Vitória do primeiro time!")
elif gols_time2 > gols_time1:
    print("Vitória do segundo time!")
else:
    print("Empate!")

'''
DESCRIÇÃO:
- Recebe os gols dos dois times.
- Compara os valores:
    - Se forem iguais: empate.
    - Caso contrário, indica qual time venceu.
'''