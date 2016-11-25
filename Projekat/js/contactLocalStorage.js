function saveContact() {
    var poljeIme= document.getElementById('ime').value;
    localStorage.setItem('contactIme', poljeIme);

    var poljeEmail = document.getElementById('email').value;
    localStorage.setItem('contactEmail', poljeEmail);

    var poljePoruka = document.getElementById('poruka').value;
    localStorage.setItem('contactGlavniOpis', poljePoruka);
}

function loadContact() {
    var savedIme = localStorage.getItem('contactIme');
    var savedEmail = localStorage.getItem('contactEmail');
    var savedPoruka = localStorage.getItem('contactGlavniOpis');

    if(savedIme){
        document.getElementById('ime').value = savedIme;
    }

    if(savedEmail){
        document.getElementById('email').value = savedEmail;
    }

    if(savedPoruka){
        document.getElementById('poruka').value = savedPoruka;
    }

}
