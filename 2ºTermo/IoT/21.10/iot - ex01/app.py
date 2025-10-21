from flask import Flask, render_template
import serial
import time

# ATENÇAO: Verifique a porta COM correta no seu IDE do Arduino (em Ferramentas > Porta)
# No Windows, sera algo como 'COM3', 'COM4', etc.
try:
    arduino = serial.Serial('COM4', 9600, timeout=1)
    time.sleep(2) # Um tempo para a porta serial se estabilizar
except serial.SerialException as e:
    print(f"Erro ao conectar com o Arduino: {e}")
    arduino = None

app = Flask(__name__)

# Rota principal que renderiza a página HTML
@app.route('/')
def index():
    return render_template('index.html')
# Rota que recebe os comandos do HTML e os envia para o Arduino (controle manual)
@app.route('/control/<led_id>/<action>')
def control(led_id, action):
    """
    led_id pode ser '1','2','3' ou nomes: 'verde','amarelo','vermelho'
    action: 'on' ou 'off'
    Mapeamentos para Arduino:
      Verde -> 'G'/'g', Amarelo -> 'Y'/'y', Vermelho -> 'R'/'r'
    """
    if not arduino:
        return "Arduino nao conectado."

    # Normaliza identificador do LED
    led_id = str(led_id).lower()
    action = str(action).lower()

    # aceita números e nomes
    if led_id in ('1', 'verde'):
        command = 'G' if action == 'on' else 'g'
        alvo = 'verde'
    elif led_id in ('2', 'amarelo'):
        command = 'Y' if action == 'on' else 'y'
        alvo = 'amarelo'
    elif led_id in ('3', 'vermelho'):
        command = 'R' if action == 'on' else 'r'
        alvo = 'vermelho'
    else:
        return "Comando invalido (LED desconhecido)."

    try:
        arduino.write(command.encode())
        return f"Comando '{command}' enviado para o LED {alvo}."
    except Exception as e:
        return f"Falha ao enviar comando: {e}"


# Rota para iniciar/parar o semáforo automático
@app.route('/semaforo/<action>')
def semaforo(action):
    if not arduino:
        return "Arduino nao conectado."

    action = str(action).lower()
    if action == 'start':
        cmd = 'T'  # start automatico
        msg = 'Semaforo iniciado.'
    elif action == 'stop':
        cmd = 'S'  # parar automatico
        msg = 'Semaforo parado.'
    else:
        return "Acao invalida (use 'start' ou 'stop')."

    try:
        arduino.write(cmd.encode())
        return msg
    except Exception as e:
        return f"Falha ao enviar comando: {e}"


if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000, use_reloader=False)