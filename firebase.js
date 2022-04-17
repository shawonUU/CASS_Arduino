




  // Import the functions you need from the SDKs you need
  //import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
  //import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCQWPapGGvkeei6D5lzdwOanFJDQ0zbsR8",
    authDomain: "cass-arduino.firebaseapp.com",
    databaseURL: "https://cass-arduino-default-rtdb.firebaseio.com",
    projectId: "cass-arduino",
    storageBucket: "cass-arduino.appspot.com",
    messagingSenderId: "546099377172",
    appId: "1:546099377172:web:640867f9c17b693a66e301",
    measurementId: "G-Y7TS8FJPN4"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const auth = firebase.auth();


