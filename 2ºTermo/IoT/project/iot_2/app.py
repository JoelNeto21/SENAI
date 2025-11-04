from flask import Flask, render_template, jsonify
import serial
import time
import json

# Verifique a porta COM correta no Arduino IDE (Ferramentas > Porta)
try:
    arduino = serial.Serial('COM4', 9600, timeout=1)
    time.sleep(2)
except serial.SerialException as e:
    print(f"Erro ao conectar com o Arduino: {e}")
    arduino = None

app = Flask(__name__)

TEMP_LIMITE_ALTO = 25.0
TEMP_LIMITE_BAIXO = 18.0

temperatura_atual = 20.0
ventilador_ativo = False
aquecedor_ativo = False

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/dados')
def obter_dados():
    global temperatura_atual
    
    if arduino:
        arduino.write(b'T')
        time.sleep(0.1)
        
        if arduino.in_waiting > 0:
            try:
                linha = arduino.readline().decode('utf-8').strip()
                if linha.startswith('TEMP:'):
                    temperatura_atual = float(linha.split(':')[1])
            except (ValueError, IndexError):
                pass
    
    status = "Normal"
    cor_status = "#4caf50"
    
    if temperatura_atual > TEMP_LIMITE_ALTO:
        status = "Muito Quente"
        cor_status = "#f44336"
    elif temperatura_atual < TEMP_LIMITE_BAIXO:
        status = "Muito Frio"
        cor_status = "#2196f3"
    
    return jsonify({
        'temperatura': round(temperatura_atual, 1),
        'status': status,
        'cor_status': cor_status,
        'limite_alto': TEMP_LIMITE_ALTO,
        'limite_baixo': TEMP_LIMITE_BAIXO,
        'ventilador_ativo': ventilador_ativo,
        'aquecedor_ativo': aquecedor_ativo
    })

@app.route('/ventilador/<action>')
def controlar_ventilador(action):
    global ventilador_ativo, aquecedor_ativo
    
    if action == 'on':
        ventilador_ativo = True
        aquecedor_ativo = False
        if arduino:
            arduino.write(b'V')
            arduino.write(b'h')
    elif action == 'off':
        ventilador_ativo = False
        if arduino:
            arduino.write(b'v')
    
    return f"Ventilador {'ligado' if action == 'on' else 'desligado'}."

@app.route('/aquecedor/<action>')
def controlar_aquecedor(action):
    global ventilador_ativo, aquecedor_ativo
    
    if action == 'on':
        aquecedor_ativo = True
        ventilador_ativo = False
        if arduino:
            arduino.write(b'H')
            arduino.write(b'v')
    elif action == 'off':
        aquecedor_ativo = False
        if arduino:
            arduino.write(b'h')
    
    return f"Aquecedor {'ligado' if action == 'on' else 'desligado'}."

@app.route('/limites/<float:alto>/<float:baixo>')
def definir_limites(alto, baixo):
    global TEMP_LIMITE_ALTO, TEMP_LIMITE_BAIXO
    
    if baixo < alto:
        TEMP_LIMITE_ALTO = alto
        TEMP_LIMITE_BAIXO = baixo
        return f"Limites atualizados: Alto={alto}°C, Baixo={baixo}°C"
    else:
        return "Erro: Limite baixo deve ser menor que o limite alto."

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000, use_reloader=False)