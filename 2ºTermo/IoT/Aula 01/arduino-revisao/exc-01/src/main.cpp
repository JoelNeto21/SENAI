#include <Arduino.h>

// 1. Pisca-pisca (Blink)

void setup() {
  pinMode(13, OUTPUT);

}

void loop() {
  digitalWrite(13, HIGH);
  delay(1000);
  digitalWrite(13, LOW);
  delay(1000);
  
}