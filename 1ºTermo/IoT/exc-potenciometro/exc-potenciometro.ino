// Controle de intensidade do LED com PWM e Potenciômetro

const int led = 9;
void setup() {
  pinMode(led, OUTPUT); // Pino PWM para o LED
}

void loop() {
  int sensorIn = analogRead(A0); // Lê o valor do potenciômetro
  int pwmOut = map(sensorIn, 0, 1023, 0, 255); // Mapeia o intervalo (para usar no PWM)
  analogWrite(led, pwmOut); // Ajusta o PWM com o valor lido
}
