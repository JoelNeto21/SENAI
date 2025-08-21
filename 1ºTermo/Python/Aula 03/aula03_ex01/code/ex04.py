ano_nascimento = int(input("Digite o ano de nascimento: "))
ano_atual = 2025

idade = ano_atual - ano_nascimento

if idade >= 18:
    print("Maior de idade.")
else:
    print("Menor de idade.")

'''
DESCRIÇÃO:
- Recebe o ano de nascimento e subtrai do ano atual (ex: 2025).
- Verifica se a idade é maior ou igual a 18 para indicar maioridade.
'''