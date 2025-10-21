const int led1Pin = 7;  // LED Verde
const int led2Pin = 8;  // LED Vermelho
void setup() {
  Serial.begin(9600);
  pinMode(led1Pin, OUTPUT);
  pinMode(led2Pin, OUTPUT);
}

void loop() {
  if (Serial.available() > 0) {
    char command = Serial.read();
    switch (command) {
      case 'A':
        digitalWrite(led1Pin, HIGH);  // Liga o LED 1
        break;
      case 'a':
        digitalWrite(led1Pin, LOW);  // Desliga o LED 1
        break;
      case 'B':
        digitalWrite(led2Pin, HIGH);  // Liga o LED 2
        break;
      case 'b':
        digitalWrite(led2Pin, LOW);  // Desliga o LED 2
        break;
    }
  }
}
