num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))

if num1 > num2:
    print("Maior:", num1)
    print("Menor:", num2)
elif num2 > num1:
    print("Maior:", num2)
    print("Menor:", num1)
else:
    print("Os números são iguais.")

'''
DESCRIÇÃO:
- Recebe dois números (float).
- Usa if/elif para comparar e exibe qual é maior ou menor.
'''