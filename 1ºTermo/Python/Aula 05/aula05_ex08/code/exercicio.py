# Aula 05 - Ex 8
# Nome e senha não podem ser iguais (usando while)

while True:
    nome = input("Digite o nome de usuário: ")
    senha = input("Digite a senha: ")
    if nome == senha:
        print("Erro: a senha não pode ser igual ao nome de usuário. Tente novamente.")
    else:
        print("Cadastro realizado com sucesso!")
        break
