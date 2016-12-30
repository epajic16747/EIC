
//Dobavljamo prozor, odnosno div gdje cemo nam biti login forma
var popupWindow = document.getElementById('popupWindowID');

// Dobavljemo dugme koje otvara login formu
var login = document.getElementById("loginImage");

// Exit
var span = document.getElementsByClassName("close")[0];

// Kada korisnik klikne na login otvara se forma
login.onclick = function() {
    popupWindow.style.display = "block";
}

//Kada korisnik klikne na x zatvara se forma
span.onclick = function() {
    popupWindow.style.display = "none";
}

// Kada se klikne bilo gdje izvan forme opet se zatvara forma
window.onclick = function(event) {
    if (event.target == popupWindow) {
        popupWindow.style.display = "none";
    }
}