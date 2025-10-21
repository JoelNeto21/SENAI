// Semáforo simples: 3 LEDs (Vermelho, Amarelo, Verde)
// Comandos via Serial:
//  - 'R'/'r': ligar/desligar Vermelho
//  - 'Y'/'y': ligar/desligar Amarelo
//  - 'G'/'g': ligar/desligar Verde
//  - 'T': iniciar modo automático de semáforo
//  - 'S': parar modo automático (apaga todos)

const int VERDE_PIN = 9;     // LED Verde
const int AMARELO_PIN = 8;   // LED Amarelo
const int VERMELHO_PIN = 7;  // LED Vermelho

// Tempos (em ms)
const unsigned long TEMPO_VERDE = 5000;   // 5s
const unsigned long TEMPO_AMARELO = 2000; // 2s
const unsigned long TEMPO_VERMELHO = 5000;// 5s

enum Estado { ESTADO_VERDE, ESTADO_AMARELO, ESTADO_VERMELHO };

bool modoAutomatico = false;
Estado estadoAtual = ESTADO_VERMELHO;
unsigned long inicioEstado = 0;

void setLuzes(bool verde, bool amarelo, bool vermelho) {
  digitalWrite(VERDE_PIN, verde ? HIGH : LOW);
  digitalWrite(AMARELO_PIN, amarelo ? HIGH : LOW);
  digitalWrite(VERMELHO_PIN, vermelho ? HIGH : LOW);
}

void aplicarEstado(Estado e) {
  switch (e) {
    case ESTADO_VERDE:
      setLuzes(true, false, false);
      break;
    case ESTADO_AMARELO:
      setLuzes(false, true, false);
      break;
    case ESTADO_VERMELHO:
      setLuzes(false, false, true);
      break;
  }
}

unsigned long tempoDoEstado(Estado e) {
  switch (e) {
    case ESTADO_VERDE: return TEMPO_VERDE;
    case ESTADO_AMARELO: return TEMPO_AMARELO;
    case ESTADO_VERMELHO: return TEMPO_VERMELHO;
  }
  return 1000;
}

Estado proximoEstado(Estado e) {
  switch (e) {
    case ESTADO_VERDE: return ESTADO_AMARELO;
    case ESTADO_AMARELO: return ESTADO_VERMELHO;
    case ESTADO_VERMELHO: return ESTADO_VERDE;
  }
  return ESTADO_VERDE;
}

void setup() {
  Serial.begin(9600);
  pinMode(VERDE_PIN, OUTPUT);
  pinMode(AMARELO_PIN, OUTPUT);
  pinMode(VERMELHO_PIN, OUTPUT);
  setLuzes(false, false, false);
}

void loop() {
  // Processa comandos seriais
  if (Serial.available() > 0) {
    char command = Serial.read();
    switch (command) {
      case 'G': // Verde ON
        modoAutomatico = false;
        setLuzes(true, false, false);
        break;
      case 'g': // Verde OFF
        modoAutomatico = false;
        digitalWrite(VERDE_PIN, LOW);
        break;

      case 'Y': // Amarelo ON
        modoAutomatico = false;
        setLuzes(false, true, false);
        break;
      case 'y': // Amarelo OFF
        modoAutomatico = false;
        digitalWrite(AMARELO_PIN, LOW);
        break;

      case 'R': // Vermelho ON
        modoAutomatico = false;
        setLuzes(false, false, true);
        break;
      case 'r': // Vermelho OFF
        modoAutomatico = false;
        digitalWrite(VERMELHO_PIN, LOW);
        break;

      case 'T': // Start automático
        modoAutomatico = true;
        estadoAtual = ESTADO_VERDE; // inicia no verde
        aplicarEstado(estadoAtual);
        inicioEstado = millis();
        break;
      case 'S': // Stop automático
        modoAutomatico = false;
        setLuzes(false, false, false);
        break;
    }
  }

  // Modo automático: máquina de estados não bloqueante
  if (modoAutomatico) {
    unsigned long agora = millis();
    if (agora - inicioEstado >= tempoDoEstado(estadoAtual)) {
      estadoAtual = proximoEstado(estadoAtual);
      aplicarEstado(estadoAtual);
      inicioEstado = agora;
    }
  }
}
