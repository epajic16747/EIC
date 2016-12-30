/*var addButton = document.getElementById('addDugme');
var nazivButton = document.getElementById('A');
var datumButton = document.getElementById('B');
var mainInfoButton = document.getElementById('C');
var infoButton = document.getElementById('D');//Ovo gore obrisat/*/
var naziv = false;
var datum = false;
var mainInfo = false;
var info = false;
var lokacija = false;
var tip = false;

function  validirajNazivEventa() {

    var poljeNazivEventa = document.getElementById('nazivEventa').value;
    var regexNaziv = new  RegExp(/^^\w{3,20}\s{0,1}\w{0,20}\s{0,1}\w{0,20}$/);
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

function  validirajLokacijuEventa() {

    var poljeLokacijaEventa = document.getElementById('lokacijaEventa').value;
    var regexLokacija = new  RegExp(/^\w{3,20}\s{0,1}\w{0,20}\s{0,1}\w{0,20}$/);
    if(!regexLokacija.test(poljeLokacijaEventa)){
        lokacija = false;
        document.getElementById('E').style.display='block';
    }
    else{
        lokacija = true;
        document.getElementById('E').style.display='none';
    }
}

function  validirajTipEventa() {

    var poljeTipEventa = document.getElementById('tipEventa').value;
    var regexTip = new  RegExp(/^\w{3,20}\s{0,1}\w{0,20}$/);
    if(!regexTip.test(poljeTipEventa)){
        tip = false;
        document.getElementById('F').style.display='block';
    }
    else{
        tip = true;
        document.getElementById('F').style.display='none';
    }
}

function  validirajMainEventInfo() {

    var poljeMainEventInfo = document.getElementById('mainEventInfo').value;
    var regexMainEventInfo = new RegExp(/^[\s \w]{3,100}$/);

    if(!regexMainEventInfo.test(poljeMainEventInfo)){
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
    var regexEventInfo = new RegExp(/^[\s \w \.]{3,1000}$/);
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
    console.log(naziv);
    console.log(info);
    console.log(datum);
    console.log(mainInfo);
    console.log(lokacija);
    console.log(tip);
    if(naziv && info && datum && mainInfo && lokacija && tip){
        document.getElementById('addDugme').disabled = false;
    }
    else {
        document.getElementById('addDugme').disabled = false;
    }

}/*
function validirajSve(){
    validirajNazivEventa();
    validirajDatum();
    validirajLokacijuEventa();
    validirajTipEventa();
    validirajMainEventInfo();
    validirajEventInfo();
        console.log(naziv);
    console.log(info);
    console.log(datum);
    console.log(mainInfo);
    console.log(lokacija);
    console.log(tip);
}*/