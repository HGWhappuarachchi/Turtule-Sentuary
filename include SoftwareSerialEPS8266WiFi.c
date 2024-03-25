#include <SoftwareSerial.h>
#include <ESP8266WiFi.h>

#define RX_PIN 2
#define TX_PIN 3

SoftwareSerial arduinoSerial(RX_PIN, TX_PIN); // RX, TX

const char* ssid     = "YOUR_SSID";
const char* password = "YOUR_PASSWORD";
const char* host     = "YOUR_SERVER_IP";
const int   port     = 80;

void setup() {
  Serial.begin(9600);
  arduinoSerial.begin(9600);
  delay(10);

  // Connect to Wi-Fi
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {
  if (arduinoSerial.available() > 0) {
    String sensorData = arduinoSerial.readStringUntil('\n');

    // Establish HTTP connection
    WiFiClient client;
    if (!client.connect(host, port)) {
      Serial.println("Connection failed");
      return;
    }

    // Send data to server
    client.print("GET /update.php?");
    client.print("data=");
    client.print(sensorData);
    client.println(" HTTP/1.1");
    client.print("Host: ");
    client.println(host);
    client.println("Connection: close");
    client.println();
    
    // Read server response
    while (client.available()) {
      String line = client.readStringUntil('\r');
      Serial.print(line);
    }

    client.stop();
    delay(1000); // Adjust delay according to your requirements
  }
}

