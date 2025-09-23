int led = 13;
String msg = "JOEL NETO";

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
  delay(700);
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
    case 'A':
      ponto();
      traco();
      break;  // .-
    case 'B':
      traco();
      ponto();
      ponto();
      ponto();
      break;  // -...
    case 'C':
      traco();
      ponto();
      traco();
      ponto();
      break;  // -.-.
    case 'D':
      traco();
      ponto();
      ponto();
      break;                   // -..
    case 'E': ponto(); break;  // .
    case 'F':
      ponto();
      ponto();
      traco();
      ponto();
      break;  // ..-.
    case 'G':
      traco();
      traco();
      ponto();
      break;  // --.
    case 'H':
      ponto();
      ponto();
      ponto();
      ponto();
      break;  // ....
    case 'I':
      ponto();
      ponto();
      break;  // ..
    case 'J':
      ponto();
      traco();
      traco();
      traco();
      break;  // .---
    case 'K':
      traco();
      ponto();
      traco();
      break;  // -.-
    case 'L':
      ponto();
      traco();
      ponto();
      ponto();
      break;  // .-..
    case 'M':
      traco();
      traco();
      break;  // --
    case 'N':
      traco();
      ponto();
      break;  // -.
    case 'O':
      traco();
      traco();
      traco();
      break;  // ---
    case 'P':
      ponto();
      traco();
      traco();
      ponto();
      break;  // .--.
    case 'Q':
      traco();
      traco();
      ponto();
      traco();
      break;  // --.-
    case 'R':
      ponto();
      traco();
      ponto();
      break;  // .-.
    case 'S':
      ponto();
      ponto();
      ponto();
      break; // ...
    case 'T': 
      traco(); 
      break;  // -
    case 'U':
      ponto();
      ponto();
      traco();
      break;  // ..-
    case 'V':
      ponto();
      ponto();
      ponto();
      traco();
      break;  // ...-
    case 'W':
      ponto();
      traco();
      traco();
      break;  // .--
    case 'X':
      traco();
      ponto();
      ponto();
      traco();
      break;  // -..-
    case 'Y':
      traco();
      ponto();
      traco();
      traco();
      break;  // -.--
    case 'Z':
      traco();
      traco();
      ponto();
      ponto();
      break;  // --..
  }
}

void loop() {
  for (int i = 0; i < msg.length(); i++) {
    char c = toupper(msg[i]);
    if (c == ' ') {
      espacoPalavra();
    } else {
      letraMorse(c);
      espacoLetra();
    }
  }
  delay(5000);
}
