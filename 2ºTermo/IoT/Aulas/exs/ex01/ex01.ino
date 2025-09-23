#include "DHT.h"

DHT dht(3, DHT11);

int ledVerde = 13;
int ledAmarelo = 12;
int ledVermelho = 11;

void setup() {
  dht.begin();
  pinMode(ledVerde, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(ledVermelho, OUTPUT);
}

void loop() {
  delay(2000);
  float temperatura = dht.readTemperature();

  // default
  digitalWrite(ledVerde, LOW);
  digitalWrite(ledAmarelo, LOW);
  digitalWrite(ledVermelho, LOW);

  if (temperatura <= 25) {
    digitalWrite(ledVerde, HIGH);  // verde
  } else if (temperatura > 25 && temperatura <= 30) {
    digitalWrite(ledAmarelo, HIGH);  // amarelo
  } else {
    digitalWrite(ledVermelho, HIGH);  // vermelho
  }
}
