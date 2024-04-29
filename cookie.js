const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("signIn");
const logoutButton = document.getElementById("logout-dropdown");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.uname.value;
    const password = loginForm.psw.value;

    setCookie("Username", username, 265)
    window.location.href = "index.html"
})

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  let user = getCookie("Username");
  if (user == "") {
    document.getElementById("nav-login").style.display = "block";
    document.getElementById("nav-account").style.display = "none";
  } else if (user == "admin"){
    document.getElementById("nav-login").style.display = "none";
    document.getElementById("nav-account").style.display = "block";
    document.getElementById("logout-dropdown").style.display = "block";
    document.getElementById("admin-dropdown").style.display = "block";
  } else {
    document.getElementById("nav-login").style.display = "none";
    document.getElementById("nav-account").style.display = "block";
    document.getElementById("logout-dropdown").style.display = "block";
    document.getElementById("admin-dropdown").style.display = "none";
  }
}

function deleteCookie() {
  setCookie("Username", "username", 0)
}