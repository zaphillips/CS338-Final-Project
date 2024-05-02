const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("signIn");
const logoutButton = document.getElementById("logout-dropdown");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.uname.value;
    const password = loginForm.psw.value;

      if (username == ""){
      document.getElementById("warning-message").innerHTML="Invalid Username";
      return;
    }

    if (password.length < 5){
      document.getElementById("warning-message").innerHTML="Password Must Be At Least 5 Characters";
      return;
    }

    setCookie("Username", username, 265);
    let cart = "Cart:" + getCookie("Username");
    if(!checkCookie(cart)){
      setCookie(cart, "0|0|0|0|0|0", 265);
    }

    window.location.href = "index.php";
})

export function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

export function getCookie(cname) {
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

export function checkCookie(cname) {
  if(cname == "Username"){
    let user = getCookie("Username");
    if (user == "") {
      document.getElementById("nav-login").style.display = "block";
      document.getElementById("nav-account").style.display = "none";
      return false;
    } else if (user == "admin"){
      document.getElementById("nav-login").style.display = "none";
      document.getElementById("nav-account").style.display = "block";
      document.getElementById("logout-dropdown").style.display = "block";
      document.getElementById("admin-dropdown").style.display = "block";
      document.getElementById("greeting-dropdown").innerHTML="Welcome, " + user + "!";
    } else {
      document.getElementById("nav-login").style.display = "none";
      document.getElementById("nav-account").style.display = "block";
      document.getElementById("logout-dropdown").style.display = "block";
      document.getElementById("admin-dropdown").style.display = "none";
      document.getElementById("greeting-dropdown").innerHTML="Welcome, " + user + "!";
    }
    return true;
  } else{
    let cart = "Cart:" + getCookie("Username");

    if (cart == ""){
      return false;
    }else{
      return true;
    }
  }
}

export function deleteCookie(cname) {
  if (cname == "Username"){
    setCookie(cname, getCookie(cname), 0);
  } else{
    let cart = "Cart:" + getCookie("Username");
    setCookie(cart, getCookie(cart), 0);
  }
}