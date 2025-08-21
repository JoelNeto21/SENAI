# Inputs
altura = float(input("Digite a altura do reservatório (cm): "))
largura = float(input("Digite a largura do reservatório (cm): "))
comprimento = float(input("Digite o comprimento do reservatório (cm): "))
consumo_diario = float(input("Digite o consumo médio diário (em litros): "))

# Cálculos
volume_cm3 = altura * largura * comprimento
capacidade_litros = volume_cm3 / 1000
autonomia_dias = capacidade_litros / consumo_diario

# Outputs
print(f"\nCapacidade total do reservatório: {capacidade_litros:.2f} litros")
print(f"Autonomia do reservatório: {autonomia_dias:.2f} dias")

if autonomia_dias < 2:
    classificacao = "Consumo elevado"
elif 2 <= autonomia_dias <= 7:
    classificacao = "Consumo moderado"
else:
    classificacao = "Consumo reduzido"

print("Classificação do consumo:", classificacao)

'''
DESCRIÇÃO:
- Recebe altura, largura, comprimento (em cm) e consumo diário (em litros).
- Calcula o volume do reservatório em cm³ e converte para litros (/1000).
- Divide o volume total pelo consumo para obter autonomia em dias.
- Classifica o consumo:
    - Menor que 2 dias → elevado
    - Entre 2 e 7 dias → moderado
    - Maior que 7 dias → reduzido
'''