#pip install speedtest-cli
import speedtest
test = speedtest.Speedtest()
down = test.download()
upload = test.upload()
print(f"Velocidade de download: {(down/1000000):.2f} Mbps")
print(f"Velocidade de upload: {(upload/1000000):.2f} Mbps")

'''
DESCRIÇÃO:
- Importa a biblioteca speedtest.
- Usa Speedtest() para iniciar o teste.
- Executa download() e upload() para medir a velocidade.
- Divide os valores por 1.000.000 para converter de bits para megabits por segundo (Mbps).
- Exibe os resultados formatados com 2 casas decimais.
'''