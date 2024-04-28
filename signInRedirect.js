const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("signIn");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.uname.value;
    const password = loginForm.psw.value;

    if (username == "admin" && password == "admin") {
        alert("Successful Log In Attempt");
        window.location.href = "admin.html"
    }
    else {
      alert("Failed Log In Attempt");
    }
})