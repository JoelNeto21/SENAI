#include <Arduino.h>

int vermelho = 8;
int verde = 9;
int azul = 10;

void setup()
{
  pinMode(vermelho, OUTPUT);
  pinMode(verde, OUTPUT);
  pinMode(azul, OUTPUT);
}

void loop()
{
  for (int r = 0; r < 256; r += 5)
  {
    analogWrite(vermelho, r);
  }
  delay(1000);
  digitalWrite(vermelho, LOW);
  delay(100);

  for (int g = 0; g < 256; g += 5)
  {
    analogWrite(verde, g);
  }
  delay(500);
  digitalWrite(verde, LOW);
  delay(1000);

  for (int b = 0; b < 256; b += 5)
  {
    analogWrite(azul, b);
  }
  delay(500);
  digitalWrite(azul, LOW);
  delay(1000);
}
