compra = [10.2, 3.35, 16.3, ["tomate", "sabonete", "arroz"]]
print(compra)
# [10.2, 3.35, 16.3, ['tomate', 'sabonete', 'arroz']]

produtos = compra[3]
print(produtos)
# ['tomate', 'sabonete', 'arroz']

total = compra[0] + compra[1] + compra[2]
print(total)
# 29.85

letra = ["a", "b", "c"]
num = [2, 4, 6]
tudo = [letra, num]
print(tudo)
# [['a', 'b', 'c'], [2, 4, 6]]

print(f"Letras: {tudo[0]}")
# Letras: ['a', 'b', 'c']

print(f"Números: {tudo[1]}")
# Números: [2, 4, 6]
