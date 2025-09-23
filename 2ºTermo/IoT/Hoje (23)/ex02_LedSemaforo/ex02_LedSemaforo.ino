#define RED 11
#define YELLOW 12
#define GREEN 13

void setup() {
  pinMode(RED, OUTPUT);
  pinMode(YELLOW, OUTPUT);
  pinMode(GREEN, OUTPUT);
}

void loop() {
  digitalWrite(GREEN, HIGH); // Verde
  delay(3000);

  digitalWrite(GREEN, LOW);
  digitalWrite(YELLOW, HIGH); // Amarelo
  delay(1000);

  digitalWrite(YELLOW, LOW);
  digitalWrite(RED, HIGH); // Vermelho
  delay(3000);

  digitalWrite(RED, LOW);
}
