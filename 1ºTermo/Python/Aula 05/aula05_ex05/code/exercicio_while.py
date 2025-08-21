# Aula 05 - Ex 5
# Mostrar números entre 5 e 100 divisíveis por 7 mas não múltiplos de 5 (while)

num = 5
while num <= 100:
    if num % 7 == 0 and num % 5 != 0:
        print(num)
    num += 1
