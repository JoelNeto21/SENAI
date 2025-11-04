// Pinos utilizados
const int sensorTempPin = 2;  // Sensor de temperatura (LM35 ou similar)
const int ledAlertaPin = 13;   // LED vermelho de alerta
const int ventiladorPin = 9;   // Pin para controle do ventilador (simbolico)
const int aquecedorPin = 10;   // Pin para controle do aquecedor (simbolico)

// Variáveis globais
float temperatura = 0.0;
bool ventiladorAtivo = false;
bool aquecedorAtivo = false;
const float TEMP_LIMITE = 25.0;  // Limite de temperatura para alerta

void setup() {
  Serial.begin(9600);
  
  // Configuração dos pinos
  pinMode(ledAlertaPin, OUTPUT);
  pinMode(ventiladorPin, OUTPUT);
  pinMode(aquecedorPin, OUTPUT);
  
  // Inicializa tudo desligado
  digitalWrite(ledAlertaPin, LOW);
  digitalWrite(ventiladorPin, LOW);
  digitalWrite(aquecedorPin, LOW);
  
  Serial.println("Sistema de Monitoramento de Temperatura Iniciado");
}

void loop() {
  // Lê a temperatura do sensor
  lerTemperatura();
  
  // Verifica se há comandos do servidor web
  if (Serial.available() > 0) {
    char comando = Serial.read();
    processarComando(comando);
  }
  
  // Controle automático do LED de alerta
  if (temperatura > TEMP_LIMITE) {
    digitalWrite(ledAlertaPin, HIGH);  // Liga LED vermelho
  } else {
    digitalWrite(ledAlertaPin, LOW);   // Desliga LED vermelho
  }
  
  delay(1000);  // Atualiza a cada segundo
}

void lerTemperatura() {
  // Lê o valor analógico do sensor
  int leituraAnalogica = analogRead(sensorTempPin);
  
  // Converte para temperatura em Celsius (para sensor LM35)
  // LM35: 10mV por grau Celsius
  // Arduino: 5V/1024 = 4.88mV por unidade
  float tensao = leituraAnalogica * (5.0 / 1024.0);
  temperatura = tensao * 100.0;  // LM35: 10mV/°C
  
  // Para simulação, adiciona uma pequena variação aleatória
  // (remova esta linha ao usar sensor real)
  temperatura += random(-20, 21) / 10.0;  // Variação de ±2°C
  
  // Limita a temperatura para valores realistas
  if (temperatura < 0) temperatura = 0;
  if (temperatura > 50) temperatura = 50;
}

void processarComando(char comando) {
  switch (comando) {
    case 'T':  // Solicitação de temperatura
      Serial.print("TEMP:");
      Serial.println(temperatura);
      break;
      
    case 'V':  // Liga ventilador
      digitalWrite(ventiladorPin, HIGH);
      digitalWrite(aquecedorPin, LOW);  // Desliga aquecedor
      ventiladorAtivo = true;
      aquecedorAtivo = false;
      Serial.println("Ventilador LIGADO");
      break;
      
    case 'v':  // Desliga ventilador
      digitalWrite(ventiladorPin, LOW);
      ventiladorAtivo = false;
      Serial.println("Ventilador DESLIGADO");
      break;
      
    case 'H':  // Liga aquecedor
      digitalWrite(aquecedorPin, HIGH);
      digitalWrite(ventiladorPin, LOW);  // Desliga ventilador
      aquecedorAtivo = true;
      ventiladorAtivo = false;
      Serial.println("Aquecedor LIGADO");
      break;
      
    case 'h':  // Desliga aquecedor
      digitalWrite(aquecedorPin, LOW);
      aquecedorAtivo = false;
      Serial.println("Aquecedor DESLIGADO");
      break;
      
    default:
      Serial.println("Comando não reconhecido");
      break;
  }
}

// Função para debug - imprime status do sistema
void imprimirStatus() {
  Serial.println("=== STATUS DO SISTEMA ===");
  Serial.print("Temperatura: ");
  Serial.print(temperatura);
  Serial.println("°C");
  Serial.print("LED Alerta: ");
  Serial.println(temperatura > TEMP_LIMITE ? "LIGADO" : "DESLIGADO");
  Serial.print("Ventilador: ");
  Serial.println(ventiladorAtivo ? "LIGADO" : "DESLIGADO");
  Serial.print("Aquecedor: ");
  Serial.println(aquecedorAtivo ? "LIGADO" : "DESLIGADO");
  Serial.println("========================");
}
