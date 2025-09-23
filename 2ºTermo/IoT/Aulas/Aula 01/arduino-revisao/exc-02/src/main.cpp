#include <Arduino.h>

// 2. Semáforo Simples

void setup() {
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(11, OUTPUT);

}

void loop() {
  // Led Verde
  digitalWrite(11, HIGH);
  delay(3000);
  digitalWrite(11, LOW);
  delay(1000);
  // Led Amarelo
  digitalWrite(12, HIGH);
  delay(1000);
  digitalWrite(12, LOW);
  delay(1000);
  // Led Vermelho
  digitalWrite(13, HIGH);
  delay(3000);
  digitalWrite(13, LOW);
  delay(1000);

}