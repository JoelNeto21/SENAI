#define LED_BLINK 13
// OR int LED_BLINK = 13;

void setup() {
  pinMode(LED_BLINK, OUTPUT);
}

void loop() {
  digitalWrite(LED_BLINK, HIGH);
  delay(1000);
  digitalWrite(LED_BLINK, LOW);
  delay(1000);
}
