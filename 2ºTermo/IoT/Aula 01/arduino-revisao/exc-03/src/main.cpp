#include <Arduino.h>

// 3. Contador Binário

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

//-------------------------
// Modelo inicial básico

// void setup() {
//   pinMode(10, OUTPUT);
//   pinMode(11, OUTPUT);
//   pinMode(12, OUTPUT);
//   pinMode(13, OUTPUT);
  
// }

// void loop() {
//   //0000
//   digitalWrite(13, LOW);
//   digitalWrite(12, LOW);
//   digitalWrite(11, LOW);
//   digitalWrite(10, LOW);
//   delay(1000);
    
//   //0001
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //0010
//     digitalWrite(10, LOW);
//     delay(1000);
//   digitalWrite(11, HIGH);
//   delay(1000);
  
//   //0011
//   	digitalWrite(11, LOW);
//   	delay(1000);
//   digitalWrite(11, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //0100
//     digitalWrite(11, LOW);
//   	digitalWrite(10, LOW);
//   	delay(1000);
//   digitalWrite(12, HIGH);
//   delay(1000);
  
//   //0101
//     digitalWrite(12, LOW);
//     delay(1000);
//   digitalWrite(12, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //0110
//     digitalWrite(12, LOW);
//     digitalWrite(10, LOW);
//     delay(1000);
//   digitalWrite(12, HIGH);
//   digitalWrite(11, HIGH);
//   delay(1000);
  
//   //0111
//     digitalWrite(12, LOW);
//     digitalWrite(11, LOW);
//     delay(1000);
//   digitalWrite(12, HIGH);
//   digitalWrite(11, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //1000
//     digitalWrite(12, LOW);
//     digitalWrite(11, LOW);
//     digitalWrite(10, LOW);
//     delay(1000);
//   digitalWrite(13, HIGH);
//   delay(1000);

//   //1001
//   	digitalWrite(13, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);  
  
//   //1010
//   	digitalWrite(13, LOW);
//   	digitalWrite(10, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(11, HIGH);
//   delay(1000);
  
//   //1011
//   	digitalWrite(13, LOW);
//   	digitalWrite(11, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(11, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //1100
//   	digitalWrite(13, LOW);
//   	digitalWrite(11, LOW);
//   	digitalWrite(10, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(12, HIGH);
//   delay(1000);
  
    
//   //1101
//   	digitalWrite(13, LOW);
//   	digitalWrite(12, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(12, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
//   //1110
//   	digitalWrite(13, LOW);
//   	digitalWrite(12, LOW);
//   	digitalWrite(10, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(12, HIGH);
//   digitalWrite(11, HIGH);
//   delay(1000);
  
//   //1111
//   	digitalWrite(13, LOW);
//   	digitalWrite(12, LOW);
//   	digitalWrite(11, LOW);
//   	delay(1000);
//   digitalWrite(13, HIGH);
//   digitalWrite(12, HIGH);
//   digitalWrite(11, HIGH);
//   digitalWrite(10, HIGH);
//   delay(1000);
  
// }
