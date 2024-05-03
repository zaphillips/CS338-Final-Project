//Account Cookie Functions & Variables
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("signIn");

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
    if(getCookie(cart) == ""){
      setCookie(cart, "0|0|0|0|0|0", 265);
    }

    window.location.href = "index.php";
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
    document.getElementById("greeting-dropdown").innerHTML="Welcome, " + user + "!";
  } else {
    document.getElementById("nav-login").style.display = "none";
    document.getElementById("nav-account").style.display = "block";
    document.getElementById("logout-dropdown").style.display = "block";
    document.getElementById("admin-dropdown").style.display = "none";
    document.getElementById("greeting-dropdown").innerHTML="Welcome, " + user + "!";
  }
}

function deleteCookie() {
  setCookie("Username", getCookie("Username"), 0);
}

//Cart Cookie Functions and Variables
const prices = [0, 10, 60, 19, 60, 70];
var cartCookie;
var cartCookieName;

function purchase(){
    cartCookie = quantities.join('|');
    cartCookieName = "Cart:" + getCookie("Username");
    setCookie(cartCookieName, cartCookie, 0);
}

function baldursGate(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }
      quantities[0] = quantities[0] + parseInt(document.forms["baldurs-amount-form"]["baldurs-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function forza(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }
      quantities[1] = quantities[1] + parseInt(document.forms["forza-amount-form"]["forza-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function mario(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }
      quantities[2] = quantities[2] + parseInt(document.forms["mario-amount-form"]["mario-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function minecraft(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }
      quantities[3] = quantities[3] + parseInt(document.forms["minecraft-amount-form"]["minecraft-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function ssbu(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }

      quantities[4] = quantities[4] + parseInt(document.forms["ssbu-amount-form"]["ssbu-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function totk(){
    if(getCookie("Username") == ""){
        alert("Login to Add Items to The Cart");
        window.location.href = "sign-in.html";
    }else{
      if(getCookie("Cart:" + getCookie("Username")) != ""){
        quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
      }else{
        var quantities = [0, 0, 0, 0, 0, 0];
      }

      quantities[5] = quantities[5] + parseInt(document.forms["totk-amount-form"]["totk-amount"].value, 10);
      cartCookie = quantities.join('|');
      cartCookieName = "Cart:" + getCookie("Username");
      setCookie(cartCookieName, cartCookie, 265);
      alert("Successfully Added to the Cart");
    }
}

function updateSubtotals(){
  if(getCookie("Cart:" + getCookie("Username")) != ""){
    quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
  }else{
    var quantities = [0, 0, 0, 0, 0, 0];
  }

    quantities[0] = parseInt(document.forms["baldurs-form"]["baldurs-qty"].value, 10);
    quantities[1] = parseInt(document.forms["forza-form"]["forza-qty"].value, 10);
    quantities[2] = parseInt(document.forms["mario-form"]["mario-qty"].value, 10);
    quantities[3] = parseInt(document.forms["minecraft-form"]["minecraft-qty"].value, 10);  
    quantities[4] = parseInt(document.forms["ssbu-form"]["ssbu-qty"].value, 10);
    quantities[5] = parseInt(document.forms["zelda-form"]["zelda-qty"].value, 10);

    cartCookie = quantities.join('|');
    cartCookieName = "Cart:" + getCookie("Username");
    setCookie(cartCookieName, cartCookie, 265);

    if((quantities.reduce((partialSum, a) => partialSum + a, 0)) == 0 ){
        document.getElementById("cart-grid").style.display = "none";
        document.getElementById("empty-message").style.display = "block";
    }else{
        document.getElementById("empty-message").style.display = "none";
        if(quantities[0] == 0) {document.getElementById("baldurs").style.display = "none";}
        if(quantities[1] == 0) {document.getElementById("forza").style.display = "none";}
        if(quantities[2] == 0) {document.getElementById("mario").style.display = "none";}
        if(quantities[3] == 0) {document.getElementById("minecraft").style.display = "none";}
        if(quantities[4] == 0) {document.getElementById("ssbu").style.display = "none";}
        if(quantities[5] == 0) {document.getElementById("totk").style.display = "none";}
    }

    document.getElementById("baldurs-subtotal").innerHTML="$" + (quantities[0] * prices[0]);
    document.getElementById("forza-subtotal").innerHTML="$" + (quantities[1] * prices[1]);
    document.getElementById("mario-subtotal").innerHTML="$" + (quantities[2] * prices[2]);
    document.getElementById("minecraft-subtotal").innerHTML="$" + (quantities[3] * prices[3]);
    document.getElementById("ssbu-subtotal").innerHTML="$" + (quantities[4] * prices[4]);
    document.getElementById("zelda-subtotal").innerHTML="$" + (quantities[5] * prices[5]);
}

function setQuantities(){
  if(getCookie("Cart:" + getCookie("Username")) != ""){
    quantities = getCookie("Cart:" + getCookie("Username")).split('|').map(Number);
  }else{
    var quantities = [0, 0, 0, 0, 0, 0];
  }

  if((quantities.reduce((partialSum, a) => partialSum + a, 0)) == 0 ){
      document.getElementById("cart-grid").style.display = "none";
      document.getElementById("empty-message").style.display = "block";
  }

    document.forms["baldurs-form"]["baldurs-qty"].value = toString(quantities[0]);
    document.forms["forza-form"]["forza-qty"].value = toString(quantities[1]);
    document.forms["mario-form"]["mario-qty"].value = toString(quantities[2]);
    document.forms["minecraft-form"]["minecraft-qty"].value = toString(quantities[3]);    
    document.forms["ssbu-form"]["ssbu-qty"].value = toString(quantities[4]);
    document.forms["zelda-form"]["zelda-qty"].value = toString(quantities[5]);

    document.getElementById("baldurs-subtotal").innerHTML="$" + (quantities[0] * prices[0]);
    document.getElementById("forza-subtotal").innerHTML="$" + (quantities[1] * prices[1]);
    document.getElementById("mario-subtotal").innerHTML="$" + (quantities[2] * prices[2]);
    document.getElementById("minecraft-subtotal").innerHTML="$" + (quantities[3] * prices[3]);
    document.getElementById("ssbu-subtotal").innerHTML="$" + (quantities[4] * prices[4]);
    document.getElementById("zelda-subtotal").innerHTML="$" + (quantities[5] * prices[5]);
}