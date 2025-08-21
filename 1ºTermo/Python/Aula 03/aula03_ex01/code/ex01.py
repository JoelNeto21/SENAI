nota1 = float(input("Digite a primeira nota: "))
nota2 = float(input("Digite a segunda nota: "))

media = (nota1 + nota2) / 2

if media >= 6:
    print("Aprovado")
else:
    print("Reprovado")

'''
DESCRIÇÃO:
- Recebe duas notas (float), calcula a média.
- Verifica se média >= 6 para exibir "aprovado" ou "reprovado".
'''