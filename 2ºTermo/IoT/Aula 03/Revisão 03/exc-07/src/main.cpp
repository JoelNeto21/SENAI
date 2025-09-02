#include <Arduino.h>

int leds[] = {9, 10, 11, 12, 13};
int qtd = 5;

void setup() {
  for (int i = 0; i < qtd; i++) {
    pinMode(leds[i], OUTPUT);
  }
}

void loop() {
  for (int i = 0; i < qtd; i++) {
    digitalWrite(leds[i], HIGH);
    delay(70);
    digitalWrite(leds[i], LOW);
  }
}
