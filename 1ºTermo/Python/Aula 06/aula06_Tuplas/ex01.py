paises = "Brasil", "Paraguai", "Uruguai", "México"
pais = paises[0]
print(pais)
# Brasil

fatia = paises[1:3]
print(fatia)
# ('Paraguai', 'Uruguai')

# paises[1] = "Colômbia"
# # TypeError: 'tuple' object does not support item assignment

for pais in paises:
    print(pais)
# Brasil
# Paraguai
# Uruguai
# México
