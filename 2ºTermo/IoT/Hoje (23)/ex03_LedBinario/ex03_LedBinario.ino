const int pinLEDs[] = {13, 12, 11, 10}; 
const int numLEDs = 4;

void setup() {
  for (int i = 0; i < numLEDs; i++) {
    pinMode(pinLEDs[i], OUTPUT);
  }
}

void loop() {
  for (int i = 0; i < 16; i++) {
    // Apaga todos os LEDs antes de exibir o novo número
    for (int j = 0; j < numLEDs; j++) {
      digitalWrite(pinLEDs[j], LOW);
    }    
    // reboot
    delay(1000); 

    digitalWrite(pinLEDs[0], (i & 1) ? HIGH : LOW);
    digitalWrite(pinLEDs[1], (i & 2) ? HIGH : LOW);
    digitalWrite(pinLEDs[2], (i & 4) ? HIGH : LOW);
    digitalWrite(pinLEDs[3], (i & 8) ? HIGH : LOW);

    delay(1000); 
  }
}
