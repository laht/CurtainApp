#include <Servo.h>

int serialData = 0;
Servo myServo;

void setup()
{
  Serial.begin(9600);  
}

void loop()
{
  if (Serial.available() > 0)
  {
    serialData = Serial.read();
    if(serialData == 49) {
      myServo.attach(9);
      myServo.write(180);
    }
    else if(serialData == 50) {
      myServo.attach(9);
      myServo.write(0);
    }
    else {
      myServo.detach();
    }
    Serial.println(serialData);
  }  
}
