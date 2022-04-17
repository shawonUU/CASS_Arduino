<?php
    include('dbcon.php');
    $reference = $database->getReference('IO/'.$_SESSION['currentUserId']);

    $snapshot = $reference->getSnapshot();
    $IO = $reference->getValue();

    $code = '#include <ESP8266WiFi.h>                                              
    #include <FirebaseArduino.h>'

    .$IO['advance']['header'].
    
    '
    #define FIREBASE_HOST "cass-arduino-default-rtdb.firebaseio.com"   
    #define FIREBASE_AUTH "xCLEyuqpbNyb3BbPAPGZJRKFbzwQAv1rAkotDRRT" 
    #define WIFI_SSID "'.$IO['advance']['ssid'].'"                                          
    #define WIFI_PASSWORD "'.$IO['advance']['pass'].'"
    
     
    
    int I1=D0,I2=D1,I3=D2,I4=D3,I5=D4,I6=D6 /*AI1=A0,AI2=A1,AI3=A2*/;
    int O1=D6,O2=D7,O3=D8,O4=3,O5=1,O6=9 /*AO1=A4,AO2=A5,AO3=A6*/;
    float I1v,I2v,I3v,I4v,I5v,I6v /*AI1v,AI2v,AI3v*/;
    String DB,ar[30],ROOT = "'.$_SESSION['currentUserId'].'";'
    
    .$IO['advance']['gloval'].

    '
    
    void setup() {
      Serial.begin(9600);
    
      WiFi.begin(WIFI_SSID, WIFI_PASSWORD);                               
      Serial.print("Connecting to ");
      Serial.print(WIFI_SSID);
      while (WiFi.status() != WL_CONNECTED) 
      {
        Serial.print(".");
        delay(500);
      }
      Serial.println();
      Serial.print("Connected to ");
      Serial.println(WIFI_SSID);
      Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
    
    
      pinMode(1, FUNCTION_3); 
      pinMode(3, FUNCTION_3);
      pinMode(9, FUNCTION_3); 
      
      pinMode(I1, INPUT);
      pinMode(I2, INPUT);
      pinMode(I3, INPUT);
      pinMode(I4, INPUT);
      pinMode(I5, INPUT);
      pinMode(I6, INPUT);
      /*pinMode(AI1, INPUT);
      pinMode(AI2, INPUT);
      pinMode(AI3, INPUT);*/
    
      pinMode(O1, OUTPUT);
      pinMode(O2, OUTPUT);
      pinMode(O3, OUTPUT);
      pinMode(O4, OUTPUT);
      pinMode(O5, OUTPUT);
      pinMode(O6, OUTPUT);
      /*pinMode(AO1, OUTPUT);
      pinMode(AO2, OUTPUT);
      pinMode(AO3, OUTPUT);*/'
      
      .$IO['advance']['setup'].

    '
      }
    
    float I1_read(){'.readSensor('I1',$IO).'}
    float I2_read(){'.readSensor('I2',$IO).'}
    float I3_read(){'.readSensor('I3',$IO).'}
    float I4_read(){'.readSensor('I4',$IO).'}
    float I5_read(){'.readSensor('I5',$IO).'}
    float I6_read(){'.readSensor('I6',$IO).'}
    /*float AI1_read(){'.readSensor('AI1',$IO).'}
    float AI2_read(){'.readSensor('AI2',$IO).'}
    float AI3_read(){'.readSensor('AI3',$IO).'}*/
    
    float I1_valueCustomize(float I1v){
      '.customizeSensor('I1',$IO).'
    }
    float I2_valueCustomize(float I2v){'.customizeSensor('I2',$IO).'}
    float I3_valueCustomize(float I3v){'.customizeSensor('I3',$IO).'}
    float I4_valueCustomize(float I4v){'.customizeSensor('I4',$IO).'}
    float I5_valueCustomize(float I5v){'.customizeSensor('I5',$IO).'}
    float I6_valueCustomize(float I6v){'.customizeSensor('I6',$IO).'}
    /*float AI1_valueCustomize(float AI1v){'.customizeSensor('AI1',$IO).'}
    float AI2_valueCustomize(float AI2v){'.customizeSensor('AI2',$IO).'}
    float AI3_valueCustomize(float AI3v){'.customizeSensor('AI3',$IO).'}*/
    
    
    void output1(){
      if(ar[10] == "true"){
        if(ar[1] == "on"){digitalWrite(O1,HIGH);}
        else{digitalWrite(O1,LOW);}
      }
      else{'
        .output('O1',$IO).
      '}
    
      String deviceStatus = "";
      if(O1 == HIGH){deviceStatus = "on";}
      else if(O1 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 1);
    }
    void output2(){
      if(ar[11] == "true"){
        if(ar[2] == "on"){digitalWrite(O2,HIGH);}
        else{digitalWrite(O2,LOW);}
      }
      else{'
        .output('O2',$IO).
      '}
    
      String deviceStatus = "";
      if(O2 == HIGH){deviceStatus = "on";}
      else if(O2 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 2);
    }
    void output3(){
      if(ar[12] == "true"){
        if(ar[3] == "on"){digitalWrite(O3,HIGH);}
        else{digitalWrite(O3,LOW);}
      }
      else{'
        .output('O3',$IO).
      '}
       String deviceStatus = "";
      if(O3 == HIGH){deviceStatus = "on";}
      else if(O3 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 3);
    }
    void output4(){
      if(ar[13] == "true"){
        if(ar[4] == "on"){digitalWrite(O4,HIGH);}
        else{digitalWrite(O4,LOW);}
      }
      else{'
        .output('O4',$IO).
      '}
    
        String deviceStatus = "";
      if(O4 == HIGH){deviceStatus = "on";}
      else if(O4 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 4);
    }
    void output5(){
      if(ar[14] == "true"){
        if(ar[5] == "on"){digitalWrite(O5,HIGH);}
        else{digitalWrite(O5,LOW);}
      }
      else{'
        .output('O5',$IO).
      '}
    
        String deviceStatus = "";
      if(O5 == HIGH){deviceStatus = "on";}
      else if(O5 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 5);
    }
    void output6(){
      if(ar[15] == "true"){
        if(ar[6] == "on"){digitalWrite(O6,HIGH);}
        else{digitalWrite(O6,LOW);}
      }
      else{'
        .output('O6',$IO).
      '}
    
        String deviceStatus = "";
      if(O6 == HIGH){deviceStatus = "on";}
      else if(O6 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 6);
    }
    
    /*
    void analogOutput1(){
      if(ar[16] == "true"){
        if(ar[7] == "on"){analogWrite(AO1,HIGH);}
        else{analogWrite(AO1,LOW);}
      }
      else{'
        .output('AO1',$IO).
      '}
    
        String deviceStatus = "";
      if(AO1 == HIGH){deviceStatus = "on";}
      else if(AO1 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 7);
    }
    void analogOutput2(){
      if(ar[17] == "true"){
        if(ar[8] == "on"){analogWrite(AO2,HIGH);}
        else{analogWrite(AO2,LOW);}
      }
      else{'
        .output('AO2',$IO).
      '}
    
      String deviceStatus = "";
      if(AO2 == HIGH){deviceStatus = "on";}
      else if(AO2 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 8);
    }
    void analogOutput3(){
      if(ar[18] == "true"){
        if(ar[9] == "on"){analogWrite(AO3,HIGH);}
        else{analogWrite(AO3,LOW);}
      }
      else{'
        .output('AO3',$IO).
      '}
    
      String deviceStatus = "";
      if(AO3 == HIGH){deviceStatus = "on";}
      else if(AO3 == LOW){deviceStatus = "off";}
      readyToUpload(deviceStatus, 9);
    }*/
    
    
    
    void makeArray(String dt){
      int ln = dt.length();
      int dx = 1;
      String vl = "";
      for(int i = 0; i<ln; i++){
        if(dt[i] == \' \'){ar[dx] = vl; dx++; vl = ""; continue;}
        vl += dt[i];
      }
    }
    void getDataFromDatabase(){
      DB = Firebase.getString("IO/"+ROOT+"/arduino");
      makeArray(DB);
    }
    
    void uploaddata(){
      Firebase.setString("IO/"+ROOT+"/arduino", DB);
    }
    
    String spaceRemove(String s){
         int ln = s.length();
         for(int i=0; i<ln; i++){
            if(s[i]==\' \'){s[i] = \'$\';}
         }
         return s;
    }
    
    void readyToUpload(String s, int dx){
      int ln = DB.length();
      String cDB = "";
      int spc = 0;
      for(int i=0; i<ln; i++){
        if(DB[i] == \' \'){spc++;}
        if(spc == dx-1){continue;}
        if(spc == dx){cDB += s;}
        cDB += DB[i];
      }
      DB = cDB;
    }
    
    void display_I1(String s){
        s = spaceRemove(s);
        readyToUpload(s,19);
    }
    void display_I2(String s){
      s = spaceRemove(s);
       readyToUpload(s,20);
    }
    void display_I3(String s){
      s = spaceRemove(s);
      readyToUpload(s,21);
    }
    void display_I4(String s){
        s = spaceRemove(s);
      readyToUpload(s,22);
    }
    void display_I5(String s){
        s = spaceRemove(s);
      readyToUpload(s,23);
    }
    void display_I6(String s){
        s = spaceRemove(s);
      readyToUpload(s,24);
    }
    /*
    void display_AI1(String s){
          s = spaceRemove(s);
      readyToUpload(s,25);
    }
    void display_AI2(String s){
        s = spaceRemove(s);
        readyToUpload(s,26);
    }
    void display_AI3(String s){
      s = spaceRemove(s);
      readyToUpload(s,27);
    }*/
    
    void loop() {
        getDataFromDatabase();
        I1v = I1_valueCustomize( I1_read() );
        I2v = I2_valueCustomize( I2_read() );
        I3v = I3_valueCustomize( I3_read() );
        I4v = I4_valueCustomize( I4_read() );
        I5v = I5_valueCustomize( I5_read() );
        I6v = I6_valueCustomize( I6_read() );
        /*AI1v = AI1_valueCustomize( AI1_read() );
        AI2v = AI2_valueCustomize( AI2_read() );
        AI3v = AI3_valueCustomize( AI13_read() );*/
    
        output1();
        output2();
        output3();
        output4();
        output5();
        output6();
        /*analogOutput1();
        analogOutput2();
        analogOutput3();*/
    
        uploaddata();
    }';

    function readSensor($id,$IO){
      return $IO['input'][$id]['getValue'] != null?$IO['input'][$id]['getValue']:$IO['input'][$id]['deget'];
    }
    function customizeSensor($id,$IO){
        $val = $IO['input'][$id]['coustom'].'
        ';
        $val .= "display_$id(".$IO['input'][$id]['display'].")".';
        ';
        $val .= 'return '.($IO['input'][$id]['dreturn'] != null?$IO['input'][$id]['dreturn']:$IO['input'][$id]['return']).';
        ';
        return $val;
    }
    function output($id,$IO){
      return $IO['output'][$id]['setValue'] != null?$IO['output'][$id]['setValue']:$IO['output'][$id]['dset'];
    }
?>