var addButton = document.getElementById('addDugme');
var nazivButton = document.getElementById('A');
var datumButton = document.getElementById('B');
var mainInfoButton = document.getElementById('C');
var infoButton = document.getElementById('D');//Ovo gore obrisat
var naziv = false;
var datum = false;
var mainInfo = false;
var info = false;

function  validirajNazivEventa() {

    var poljeNazivEventa = document.getElementById('nazivEventa').value;
    var regexNaziv = new  RegExp(/^[A-Z][a-z]{2,24}$/);
    if(!regexNaziv.test(poljeNazivEventa)){
        naziv = false;
        document.getElementById('A').style.display='block';
    }
    else{
        naziv = true;
        document.getElementById('A').style.display='none';
    }
}
function  validirajDatum() {
    var poljeDatumEventa = document.getElementById('datum').value;
    var todayDate = new Date();
        todayDate.getDate();

    if(todayDate >= poljeDatumEventa ){
        datum = false;
        document.getElementById('B').style.display='block';
    }
    else{
        datum = true;
        document.getElementById('B').style.display='none';
    }

}

function  validirajMainEventInfo() {

    var poljeMainEventInfo = document.getElementById('mainEventInfo').value;
    var regexEventInfo = new RegExp(/^[a-zA-Z0-9_]*$/);

    if(!regexEventInfo.test(poljeMainEventInfo)){
        mainInfo = false;
        document.getElementById('C').style.display = 'block';
    }
    else{
        mainInfo = true;
        document.getElementById('C').style.display = 'none';
    }

}

function  validirajEventInfo() {

    var poljeEventInfo = document.getElementById('eventInfo').value;
    var regexEventInfo = new RegExp(/^[a-zA-Z0-9_]*$/);
    if(!regexEventInfo.test(poljeEventInfo )){
       info = false;
        document.getElementById('D').style.display = 'block';
    }
    else{
        document.getElementById('D').style.display = 'none';
        info = true;
    }

}
function  konacnaValidacija() {
    if(naziv && info && datum && mainInfo){
        document.getElementById('addDugme').disabled = false;
    }
    else {
        document.getElementById('addDugme').disabled = true;
    }

}

