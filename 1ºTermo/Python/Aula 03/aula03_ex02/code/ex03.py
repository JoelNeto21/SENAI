idade = int(input("Digite a idade do nadador: "))

if 5 <= idade <= 7:
    print("Categoria: Infantil A")
elif 8 <= idade <= 11:
    print("Categoria: Infantil B")
elif 12 <= idade <= 13:
    print("Categoria: Juvenil A")
elif 14 <= idade <= 17:
    print("Categoria: Juvenil B")
elif idade >= 18:
    print("Categoria: Adultos")
else:
    print("Idade fora das categorias disponíveis.")

'''
DESCRIÇÃO:
- Recebe a idade.
- Usa if/elif para classificar nas categorias: Infantil A/B, Juvenil A/B ou Adulto.
'''