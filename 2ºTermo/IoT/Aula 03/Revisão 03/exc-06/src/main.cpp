#include <Arduino.h>

int botao = 2;
int led = 13;
bool estado = false;

void setup() {
  pinMode(botao, INPUT_PULLUP);
  pinMode(led, OUTPUT);
}

void loop() {
  if (digitalRead(botao) == LOW) {
    delay(200);
    estado = !estado; // muda o estado do LED
    digitalWrite(led, estado);
    while (digitalRead(botao) == LOW); 
  }
}
