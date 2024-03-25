#include <SoftwareSerial.h>

#define SENSOR1_PIN A2
#define SENSOR2_PIN A0
#define SENSOR3_PIN A1

SoftwareSerial espSerial(2, 3); // RX, TX

void setup() {
  Serial.begin(9600);
  espSerial.begin(9600);  // ESP-01 baud rate

  pinMode(SENSOR1_PIN, INPUT);
  pinMode(SENSOR2_PIN, INPUT);
  pinMode(SENSOR3_PIN, INPUT);
}

void loop() {
  float sensor1_value = analogRead(SENSOR1_PIN);
  float sensor2_value = analogRead(SENSOR2_PIN);
  float sensor3_value = analogRead(SENSOR3_PIN);

  // Send data to ESP-01
  espSerial.print("S1:");
  espSerial.println(sensor1_value);
  delay(100);
  espSerial.print("S2:");
  espSerial.println(sensor2_value);
  delay(100);
  espSerial.print("S3:");
  espSerial.println(sensor3_value);
  delay(1000);  // Adjust delay according to your requirements
}

