# Event Information Center(EIC)
### Enis Pajic(16747)
#### Stranica sa informacijama o događajima različitog sadržaja.

I) Urađeno:
     -mockup(nema za mobitel)
     -6 podstranica(1 nije uvezana, jer ce se login radit na drugi nacin, tj. bice u skolopu stranice)
     -3 forme(login, forma za kontakt, forma za dodavanje eventa)
     -podstranice su medjusobno uvezane(osim login podstranice) preko menija
     -izgled konzistentan i nema glitcheva(bar na neresponzitivnoj varijanti, mozda nesto sitno oko poravnavanja)
     
II) Nije urađeno :
     -media query-e 
     -responzivnu varijantu treba zavrsit
     
III)  Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)
     -upravo u responzitivnoj varijanti ima dosta bugova
     -potrebno je samo konstantne velicine(px) prebacit u em ili % sto sam kreno da radim 
     
V)   Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi
     Folder Spirala I:
     
        Folder CSS:
          style.css -Css file sa stilovima za sve html dokumente
        
        Folder images:
          -slike koje koriste na podstranicama(pozadina i sl)
          
        Folder pages: 
          -about.html  -podstranica sa informacijama o stranici
          -addEvent.html -podstranica gdje se dodaje event putem forme
          -allEvents.html -podstranica koja sadrzi sve evente
          -contact.html - podstranica za kontakt informacije
          -index.html -pocetna stranica koja sadrzi najnovije dogadjaje
          -logIn.html -podstranica za login
          
          
          
          
          
Spirala II :
     I)Uradjeno:
          -validacija svih polja(onemogućava se submit ako sva polja nisu validirana i ispod svakog polja koje nije validno se 
                                 pojavljuje dugme koje ukazuje na gresku)
          - Carousel(imaju dvije strelice koje saltaju slike na klik)
          - localstorage(spasava sva polja nakon klika na dugme, ali prilikom ucitavanja ima bug)
          - podstranice se ucitavaju bez reloada-a
     II)Nije uradjeno:
          -Dropdown meni 
          -Meni u vidu stabla 
          -Galerija slika
     IV) (Bug-ovi koje ste primijetili ali ne znate rješenje):
          -Prilikom ucitavanja iz localstoraga-a ima bug jer elementi na koje je potrebno upisati vrijednosti ne postoje jer se nalaze 
           na drugoj podstranici koja u tom trenutku nije aktivna
          -Carousel iz nekih razloga ne radi na mozili 
     V) Novi folderi:
          Folder js: 
               -addEventLocalStorage.js -spasava i ucitava zadnji unos na formi addEvent podstranici
               -ajaxPageLoad.js -ucitava podstranice bez realod-a, tj. unutar "siteContent"-a mijenja trenutni content sa contentom 
                                 druge podstranice
               -contactLocalStorage.js -spasava i ucitava zadnji unos na formi contact podstranici
               -contactValidacijaForme.js -validira formu na contact podstranici
               -slider.js -Carousel nista posebno
               -validacijaAddEvent.js validira formu na addEvent podstranici


     
