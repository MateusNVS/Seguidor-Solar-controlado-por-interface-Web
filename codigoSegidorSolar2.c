int i, v1, v2, v3, v4;

#include <Servo.h>

void setup() {

  Serial.begin(9600);
}

void loop() {
  Servo servo;
  


  v1 = analogRead(3);
  v2 = analogRead(5);
  v3 = analogRead(6);
  v4 = analogRead(4);

 
  
  
 
  while(!digitalRead(22)){
  
  analogWrite(34, 0);
  analogWrite(35, 1023);
  delay(7);
  analogWrite(34, 1023);
  analogWrite(35, 0);
  delay(40);

  }
  analogWrite(34, 1023);
  analogWrite(35, 0);


  while(!digitalRead(22)){
  
  analogWrite(34, 1023);
  analogWrite(35, 0);
  delay(7);
  analogWrite(34, 0);
  analogWrite(35, 1023);
  delay(40);

  }
  analogWrite(34, 0);
  analogWrite(35, 1023);



if(Serial.read() == 'a'){
  
.

  if(digitalRead(24)){
   

      while(!digitalRead(26)){

        analogWrite(42, 0);
        analogWrite(43, 1023);
        
      }

        analogWrite(42, 1023);
        analogWrite(43, 0);
        delay(1000);

       
  }

  
    if(digitalRead(26)){
   


      while(!digitalRead(24)){

        analogWrite(40, 0);
        analogWrite(41, 1023);
        
      }

        analogWrite(40, 1023);
        analogWrite(41, 0);
        delay(1000);

       
  }


    
  
  
  if(digitalRead(24) == digitalRead(26)){
   

      while(digitalRead(24) != 1){

        analogWrite(40, 0);
        analogWrite(41, 1023);
        
      }

        analogWrite(40, 1023);
        analogWrite(41, 0);
        delay(1000);

       
  }
  
 }
   
}
