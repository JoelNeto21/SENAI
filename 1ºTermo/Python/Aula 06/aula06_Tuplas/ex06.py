tupla_carros = "Golf", "Corolla", "Civic", "Opala", "Tucson", "Elantra"
carro1, *carros = tupla_carros
print(f"Carro1: {carro1}")
print(f"Carros: {carros}")
# Carro1: Golf
# Carros: ['Corolla', 'Civic', 'Opala', 'Tucson', 'Elantra']