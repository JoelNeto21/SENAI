# pip install pyshorteners
import pyshorteners as ps

url = input("Digite a URL que deseja encurtar: ")

u = ps.Shortener().tinyurl.short(url)

print("URL encurtada -> ", u)

'''
DESCRIÇÃO:
- O programa solicita que o usuário digite uma URL.
- Usa a biblioteca pyshorteners para encurtar a URL, utilizando o serviço TinyURL.
- Exibe a URL encurtada na tela para o usuário.
'''