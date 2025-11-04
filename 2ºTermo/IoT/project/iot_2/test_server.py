from flask import Flask, render_template, jsonify
import random
import time

app = Flask(__name__)

TEMP_LIMITE_ALTO = 25.0
TEMP_LIMITE_BAIXO = 18.0

temperatura_simulada = 22.0
ventilador_ativo = False
aquecedor_ativo = False

@app.route('/')
def index():
    print(">>> Página principal 'index.html' carregada pelo navegador.")
    return render_template('index.html')

@app.route('/dados')
def obter_dados():
    global temperatura_simulada
    
    variacao = random.uniform(-0.5, 0.5)
    temperatura_simulada += variacao
    
    if ventilador_ativo:
        temperatura_simulada -= 0.2
    if aquecedor_ativo:
        temperatura_simulada += 0.3
    
    temperatura_simulada = max(10.0, min(45.0, temperatura_simulada))
    
    status = "Normal"
    cor_status = "#4caf50"
    
    if temperatura_simulada > TEMP_LIMITE_ALTO:
        status = "Muito Quente"
        cor_status = "#f44336"
    elif temperatura_simulada < TEMP_LIMITE_BAIXO:
        status = "Muito Frio"
        cor_status = "#2196f3"
    
    dados = {
        'temperatura': round(temperatura_simulada, 1),
        'status': status,
        'cor_status': cor_status,
        'limite_alto': TEMP_LIMITE_ALTO,
        'limite_baixo': TEMP_LIMITE_BAIXO,
        'ventilador_ativo': ventilador_ativo,
        'aquecedor_ativo': aquecedor_ativo
    }
    
    print(f"Dados enviados: Temp={dados['temperatura']}°C, Status={status}")
    return jsonify(dados)

@app.route('/ventilador/<action>')
def controlar_ventilador(action):
    global ventilador_ativo, aquecedor_ativo
    
    print("=" * 50)
    print("COMANDO VENTILADOR RECEBIDO!")
    print(f" - Ação: '{action}'")
    
    if action == 'on':
        ventilador_ativo = True
        aquecedor_ativo = False
        print(" - Ventilador LIGADO")
        print(" - Aquecedor DESLIGADO (automático)")
        mensagem = "Ventilador ligado. Aquecedor desligado automaticamente."
    elif action == 'off':
        ventilador_ativo = False
        print(" - Ventilador DESLIGADO")
        mensagem = "Ventilador desligado."
    else:
        print(" - Ação inválida!")
        mensagem = "Ação inválida para ventilador."
    
    print("=" * 50)
    return mensagem

@app.route('/aquecedor/<action>')
def controlar_aquecedor(action):
    global aquecedor_ativo, ventilador_ativo
    
    print("=" * 50)
    print("COMANDO AQUECEDOR RECEBIDO!")
    print(f" - Ação: '{action}'")
    
    if action == 'on':
        aquecedor_ativo = True
        ventilador_ativo = False
        print(" - Aquecedor LIGADO")
        print(" - Ventilador DESLIGADO (automático)")
        mensagem = "Aquecedor ligado. Ventilador desligado automaticamente."
    elif action == 'off':
        aquecedor_ativo = False
        print(" - Aquecedor DESLIGADO")
        mensagem = "Aquecedor desligado."
    else:
        print(" - Ação inválida!")
        mensagem = "Ação inválida para aquecedor."
    
    print("=" * 50)
    return mensagem

@app.route('/limites/<float:alto>/<float:baixo>')
def definir_limites(alto, baixo):
    global TEMP_LIMITE_ALTO, TEMP_LIMITE_BAIXO
    
    if baixo < alto:
        TEMP_LIMITE_ALTO = alto
        TEMP_LIMITE_BAIXO = baixo
        print(f"Limites atualizados: Alto={alto}°C, Baixo={baixo}°C")
        return f"Limites atualizados: Alto={alto}°C, Baixo={baixo}°C"
    else:
        return "Erro: Limite baixo deve ser menor que o limite alto."

if __name__ == '__main__':
    print("=" * 60)
    print("🌡️  SERVIDOR DE TESTE - MONITORAMENTO DE TEMPERATURA")
    print("=" * 60)
    print("Funcionalidades disponíveis:")
    print("• Monitoramento de temperatura em tempo real (simulado)")
    print("• Controle remoto de ventilador e aquecedor")
    print("• LED de alerta automático para temperatura alta")
    print("• Interface web responsiva com gráficos")
    print("=" * 60)
    print("📡 Abra seu navegador e acesse: http://localhost:5000")
    print("🔧 Para alterar limites: http://localhost:5000/limites/30/15")
    print("=" * 60)
    
    app.run(debug=True, host='0.0.0.0', port=5000)