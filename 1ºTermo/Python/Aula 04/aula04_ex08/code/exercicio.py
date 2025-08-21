def solicitar_dados():
    usuario = input("Usuário: ")
    senha = input("Senha: ")

    if senha == usuario:
        print("Erro! A senha não pode ser igual ao nome de usuário.\n")
        solicitar_dados()  # chama a função de novo
    else:
        print("Cadastro realizado com sucesso!")

solicitar_dados()

'''
DESCRIÇÃO:
- O programa define uma função chamada solicitar_dados() para pedir o nome de usuário e a senha.
- Dentro da função, o usuário digita seu nome e sua senha.
- Se a senha for igual ao nome de usuário, o programa exibe uma mensagem de erro e chama a função novamente, repetindo o processo.
- Quando o usuário digita uma senha diferente do nome, o programa exibe uma mensagem de sucesso e termina a execução.
- A repetição é feita por meio de recursão, sem utilizar while.
'''