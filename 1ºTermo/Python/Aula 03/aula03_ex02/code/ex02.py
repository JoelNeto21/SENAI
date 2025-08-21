valor = float(input("Digite o valor da compra: "))
parcelas = int(input("Digite o número de prestações: "))

valor_parcela = valor / parcelas

print(f"Cada prestação será de R$ {valor_parcela:.2f}")

'''
DESCRIÇÃO:
- Recebe o valor total e o número de prestações.
- Divide o valor pelo número de parcelas.
- Exibe o valor de cada prestação.
'''