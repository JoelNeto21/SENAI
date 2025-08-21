lista = []
while True:
    num = input("Digite valores inteiros ('/' para sair): ")
    if num == '/':
        break
    lista.append(int(num))
print(lista)

for i in range(len(lista)):
    if lista[i] % 2 == 0:
        lista.remove(lista[i])
print(lista)
