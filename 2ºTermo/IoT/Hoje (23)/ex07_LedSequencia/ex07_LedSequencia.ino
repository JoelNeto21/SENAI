const int leds[] = {13, 12, 11, 10};
const int qtd = 4;

void setup() {
  for (int i = 0; i < qtd; i++) {
    pinMode(leds[i], OUTPUT);
  }
}

void loop() {
  for (int i = 0; i < qtd; i++) {
    digitalWrite(leds[i], HIGH);
    delay(100);
    digitalWrite(leds[i], LOW);
  }
}
