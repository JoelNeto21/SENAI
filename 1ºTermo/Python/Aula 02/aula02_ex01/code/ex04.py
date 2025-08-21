PI = 3.1416
raio = float(input("Digite o raio da lata: "))
altura = float(input("Digite a altura da lata: "))

volume = PI * (raio ** 2) * altura

print("Volume da lata de óleo:", volume)

'''
DESCRIÇÃO:
- Define PI como uma constante com 4 casas decimais.
- Recebe o raio e a altura via input() e converte para float.
- Calcula o volume usando a fórmula volume = PI * raio² * altura.
- Imprime o volume.
'''