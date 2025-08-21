# Functions
def maior(p1, p2):
    if (p1 > p2):
        return print(f">> A turma foi melhor na P1\n")
    else:
        return print(f">> A turma foi melhor na P2\n")

def media(notas):
    qtd = len(notas)
    soma = 0
    for i in range(qtd):
        soma += notas[i]
    return soma/qtd

# Code
lista_P1 = []
while True:
    num = input("Notas da P1 ('/' para sair): ")
    if num == '/':
        break
    lista_P1.append(float(num))
print(f"|  Média P1 = {media(lista_P1)}\n")

lista_P2 = []
while True:
    num = input("Notas da P2 ('/' para sair): ")
    if num == '/':
        break
    lista_P2.append(float(num))
print(f"|  Média P2 = {media(lista_P2)}\n")

maior(lista_P1, lista_P2)
