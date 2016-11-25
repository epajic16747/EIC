function saveEvent() {
    var poljeNazivEventa = document.getElementById('nazivEventa').value;
    localStorage.setItem('naziv', poljeNazivEventa);

    var poljeDatumEventa = document.getElementById('datum').value;
    localStorage.setItem('datumEventa', poljeDatumEventa);

    var poljeMainEventInfo = document.getElementById('mainEventInfo').value;
    localStorage.setItem('glavniOpis', poljeMainEventInfo);

    var poljeEventInfo = document.getElementById('eventInfo').value;
    localStorage.setItem('detaljniOpis', poljeEventInfo);

    var poljeEventImage = document.getElementById('eventImage').value;
    localStorage.setItem('slika', poljeEventImage);

}


function loadEvent() {
    var savedNazivEventa = localStorage.getItem('naziv');
    var savedDatumEventa = localStorage.getItem('datumEventa');
    var savedMainInfoEventa = localStorage.getItem('glavniOpis');
    var savedInfoEventa = localStorage.getItem('detaljniOpis');
    var savedSlikaEventa = localStorage.getItem('slika');

    if(savedNazivEventa){
        document.getElementById('nazivEventa').value = savedNazivEventa;
    }

    if(savedDatumEventa){
        document.getElementById('datum').value = savedDatumEventa;
    }

    if(savedMainInfoEventa){
        document.getElementById('mainEventInfo').value = savedMainInfoEventa;
    }

    if(savedInfoEventa ){
        document.getElementById('eventInfo').value = savedInfoEventa;
    }

    if(savedSlikaEventa){
        document.getElementById('eventImage').value = savedSlikaEventa;
    }


}
