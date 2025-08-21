import webbrowser 
# Informe a URL do vídeo aqui: 
url = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" 
# Adiciona 'ss' para redirecionar para site de download 
download = url[:12] + "ss" + url[12:] 
# Abre o link no navegador 
webbrowser.open(download) 

'''
DESCRIÇÃO:
- O programa recebe a URL de um vídeo do YouTube como uma string. 
- Modifica a URL inserindo "ss" após os primeiros 12 caracteres para direcionar ao site de 
download. 
- Utiliza a biblioteca webbrowser para abrir automaticamente o link modificado no navegador 
padrão. 
- Assim, facilita o acesso rápido à página para baixar o vídeo do YouTube.
'''