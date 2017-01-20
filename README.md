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
          
          
          
          
          
##Spirala II :
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


     
##Spirala III:
         I)Uradjeno:
          -Serializacija svih podataka u XML fajl
          -Omogucen je unos i prikaz unesenih podataka
          -Za brisanje ima samo php file, ali nije jos uvezano
          -validacije ima malo, ali treba jos da se doradi
          -Obradjen XSS
          -Postoji admin korisnik
          -Moze se skinut csv file
          -Moze se skinut pdf file
          -Ima opcija za pretragu 
          -Deployment(cekam jos na mail)
     II)Nije uradjeno:
          -Brisanje i izmjena podataka
          -Froma contact je ostala ista kao na prethodnoj spirali u modifikaciju js validacije
     IV) (Bug-ovi koje ste primijetili ali ne znate rješenje):
          -Kada se skida csv file mogu samo skinuti sa dvije kolone(zakomentarisani su dijelovi zbog kojih ne moze vise kolona    da          bude, tj. moze ,ali onda samo ima jedan red sa podacima)
     V) Novi folderi:
          Folder fpdf za fpdf biblioteku
          Folder images ima novi podfolder za eventImages gdje su slike koje se unose preko forme
          Folder js: -login.js -preko kojeg se pojavljuje forma za login
                     -ajaxSearch -za pretragu eventova
          Folder pages :-sve stare html stranice su sada php
                        -deleteEventPage.php-podstranica za brisanje podataka
                        -editEvent.php -podstranica za editovanje podataka
                        -AllEvents.xml -sadrzi u xml-u podatke o eventima
                        -downloads.php -podstranica za skidaje podataka(PDF i CSV files)
                        -user.xml -user name i pw od admina
                        -login.php -php kod za login admina
                        -logout.php -php kod za logout admina
                        -search.php -za pretragu podataka koji se nalaze u AllEvents.xml
                        -deleteEvent.php - php kod za brisanje podataka iz AllEvents.xml
                        -downloadAllEventsCSV.php -za download CSV podataka(zakomentarisani su dijelovi zbog kojih ne moze vise kolona                da bude, tj. moze ,ali onda samo ima jedan red sa podacima)
                        -downloadAllEventsFullInfoPDF.php -za download PDF podataka
          Folder html : -stare html stranice
          
          Deployment : http://eic16747-tesla23.44fs.preview.openshiftapps.com/pages
                        
                        

##Spirala IV:
         I)Uradjeno:
          -Sql baza 4 tabele od kojih su 3 povezane
          -Dodane su 2 nove forme 
          -Postoji link koji prebacuje sve XML fajlove na bazu 
          -Podaci za event-ove se cuvaju i kupe iz baze
          -Deployment
          -Rest metoda
          -Izvjestaj

     II)Nije uradjeno:
         

     IV) (Bug-ovi koje ste primijetili ali ne znate rješenje):
        Ne radi baza nikako na openshiftu :
        a)Kad pokusam sa uputama kao na c2 dobijem sljedeci error : http://prntscr.com/dwktyq
        b)Preko openshifta kada napravim ne mogu se logovati na myPhpAdmin : http://prntscr.com/dwkw5a
        c) I ovo se zna desiti : http://prntscr.com/dwkz92
     V) Novi folderi:
          Folder phpMyAdmin za bazu

                     
          Folder pages :-registration.php
                        -EventRates.xml(zbog dodavanja nove forme)
                        -rate.php
                        -xmlTODB.php
                        -AllUsers.xml(zbog nove forme)
                        -webServisRest.php(rest metoda za web servis)
          eic.sql (baza)
          IzvjestajPOSTMAN.pdf(Testirali samo 3 razicina nacina upotrebe web servisa koristeci POSTMAN)
          
          Deployment : http://eic16747-zadnjiputsamovdedruze12.44fs.preview.openshiftapps.com/pages/
          
          Nakon OpenShift update-a : http://eic16747-eventinfocenter23.44fs.preview.openshiftapps.com/pages/

     
