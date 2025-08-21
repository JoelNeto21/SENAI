letras = ["a", "b", "c", "d", "e", "f"]
var = input("Informe uma letra: ")
if var.lower() in letras:
    print(f"A letra '{var.lower()}' está na lista")
    # A letra 'a' está na lista
else:
    print(f"A letra '{var.lower()}' NÃO está na lista")
    # A letra 'g' NÃO está na lista
