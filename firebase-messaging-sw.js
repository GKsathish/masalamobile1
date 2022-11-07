importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

const firebaseConfig = {
    apiKey: "AIzaSyDl1BNMw6BaBEAXQEtTDIddOgj8TlD4ZUc",
    authDomain: "fir-testing-89579.firebaseapp.com",
    projectId: "fir-testing-89579",
    storageBucket: "fir-testing-89579.appspot.com",
    messagingSenderId: "833792043931",
    appId: "1:833792043931:web:ec917a948a2cae90424f3e",
    measurementId: "G-J9K8FM9EVG"
  };

firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log(payload);
    const notification=JSON.parse(payload);
    const notificationOption={
        body:notification.body,
        icon:notification.icon
    };
    return self.registration.showNotification(payload.notification.title,notificationOption);
});