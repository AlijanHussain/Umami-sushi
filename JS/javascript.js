

const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav_links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});


let username;
let email;
let telefoon;
let aantal;
let tijd;
let soort;
let bijzonder;


document.getElementById("knopReserveer").onclick=function(){

    username = document.getElementById("namen").value;
    email = document.getElementById("email").value;
    telefoon = document.getElementById("phone").value;
    aantal = document.getElementById("aantal").value;
    tijd = document.getElementById("tijd").value;
    soort = document.getElementById("soort").value;
    bijzonder = document.getElementById("bijzonder").value;

    alert("Fijn dat je bij ons hebt besteld " + username  + " om " + tijd  + " we hopen je dan te zien! " );

    document.getElementById("namen").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("aantal").value = "";
    document.getElementById("tijd").value = "";
    document.getElementById("soort").value = "";
    document.getElementById("bijzonder").value = "";

    console.log(username);
    console.log(email);
    console.log(telefoon);
    console.log(aantal);
    console.log(tijd);
    console.log(soort);
    console.log(bijzonder);

    
}


