bancos = ["Banco do Brasil", "Caixa", "Santander"]
print(bancos)
# ['Banco do Brasil', 'Caixa', 'Santander']

bancos[1] = "Itaú"
print(bancos)
# ['Banco do Brasil', 'Itaú', 'Santander']

bancos[-1] = "C6"
print(bancos)
# ['Banco do Brasil', 'Itaú', 'C6']

bancos = bancos + ["Bradesco", "Nubank"]
print(bancos)
# ['Banco do Brasil', 'Itaú', 'C6', 'Bradesco', 'Nubank']

bancos += ["Safra"]
print(bancos)
# ['Banco do Brasil', 'Itaú', 'C6', 'Bradesco', 'Nubank', 'Safra']
