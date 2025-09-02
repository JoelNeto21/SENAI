#include <Arduino.h>

int led = 13;
String mensagem = "SOS";

void setup() {
  pinMode(led, OUTPUT);
}

void ponto() {
  digitalWrite(led, HIGH);
  delay(200);
  digitalWrite(led, LOW);
  delay(200);
}

void traco() {
  digitalWrite(led, HIGH);
  delay(600);
  digitalWrite(led, LOW);
  delay(200);
}

void espacoLetra() {
  delay(600);
}

void espacoPalavra() {
  delay(1400);
}

void letraMorse(char c) {
  switch (c) {
    case 'S': ponto(); ponto(); ponto(); 
      break;
    case 'O': traco(); traco(); traco(); 
      break;
  }
}

void loop() {
  for (int i = 0; i < mensagem.length(); i++) {
    char c = toupper(mensagem[i]);
    if (c == ' ') {
      espacoPalavra();
    } else {
      letraMorse(c);
      espacoLetra();
    }
  }
  delay(5000);
}
