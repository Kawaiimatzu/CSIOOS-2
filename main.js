import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-app.js";
import { getAuth ,GoogleAuthProvider ,signInWithPopup } from "https://www.gstatic.com/firebasejs/10.7.2/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyBPGneqsL1Ogc_D9WOtPXL6UcBmXfFSU3E",
    authDomain: "login-8b9a3.firebaseapp.com",
    projectId: "login-8b9a3",
    storageBucket: "login-8b9a3.appspot.com",
    messagingSenderId: "628019602385",
    appId: "1:628019602385:web:e74019889545ca0f03f6f0"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  auth.languageCode = 'en';
  const provider = new GoogleAuthProvider();


  const googleLogin = document.getElementById("google-login-btn");
  googleLogin.addEventListener("click", function(){

    signInWithPopup(auth, provider)
  .then((result) => {

    const credential = GoogleAuthProvider.credentialFromResult(result);
    const user = result.user;
    console.log(user);
    window.location.href = "index.php";

  }).catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
  });
    
  })
