#include <Arduino.h>

int leds[] = {9, 10, 11, 12, 13};
int qtd = 5;
int pot = A0;

void setup() {
  for (int i = 0; i < qtd; i++) {
    pinMode(leds[i], OUTPUT);
  }
}

void loop() {
  int valor = analogRead(pot);
  int nivel = map(valor, 0, 1023, 0, qtd);

  for (int i = 0; i < qtd; i++) {
    digitalWrite(leds[i], i < nivel ? HIGH : LOW);
  }
}
