var ime= false;
var email = false;
var poruka = false;

function  validirajIme() {

    var poljeIme = document.getElementById('ime').value;
    var regexIme = new  RegExp(/^[A-Z][a-z]{2,24}$/);
    if(!regexIme.test(poljeIme)){
        ime = false;
        document.getElementById('1').style.display='block';
    }
    else{
        ime = true;
        document.getElementById('1').style.display='none';
    }
}

function  validirajEmail() {

    var poljeEmail = document.getElementById('email').value;
    var regexEmail = new  RegExp(/^[a-zA-Z0-9_.]{3,20}@gmail.com$/);
    if(!regexEmail.test(poljeEmail)){
        email = false;
        document.getElementById('2').style.display='block';
    }
    else{
        email = true;
        document.getElementById('2').style.display='none';
    }
}

function  validirajKomentar() {

    var poljeKomentar = document.getElementById('poruka').value;
    var regexKomentar = new RegExp(/^[a-zA-Z0-9_]*$/);
    if(!regexKomentar.test(poljeKomentar)){
        poruka= false;
        document.getElementById('3').style.display='block';
    }
    else{
        poruka = true;
        document.getElementById('3').style.display='none';
    }
}



function  konacnaValidacijaContact() {
    if(ime && email && poruka){
        document.getElementById('sendDugme').disabled = false;
    }
    else {
        document.getElementById('sendDugme').disabled = true;
    }

}
