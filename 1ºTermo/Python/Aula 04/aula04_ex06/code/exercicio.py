text = input("Digite algo: ")
array = []

for i in text :
    array.append(i)

array.reverse()
string = "".join(array)

print(string)

'''
DESCRIÇÃO:
- O programa solicita uma string ao usuário.
- Converte a string em uma lista de caracteres.
- Utiliza o método .reverse() para inverter a ordem dos caracteres na lista.
- Junta os caracteres novamente em uma string com "".join().
- Exibe a string invertida na tela.
'''