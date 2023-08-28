# Školska web stranica



## Opis aplikacije

Škola za superjunake je web stranica koja služi svim učenicima škole da saznaju nešto više o školi koju pohađaju/će pohađati, prate obavijesti, događanja i drugo. Web stranica omogućuje svim korisnicima mogućnost pregledavanja sadržaja na stranicama, ali i prijavu/registraciju korisnika.

Web stranica omogućuje svim učenicima bez prijave, pa tako i onima koju nisu dio škole da testiraju svoje znanje kroz kratki kviz.

Svaki novi član/učenik koji želi da podijeli svoju povijest podrijetla može napisati svoju priču i spremiti je pod svojim imenom. Prilikom prijave mogu glasovati za vođu tima na posebnoj stranici od ponuđenih učenika koji su trenutno odabrani za sudjelovanje u školskim igrama.

Web stranica ima tri vrste korisnika: Admine, korisnike i anonimne korisnike. Admini imaju pristup pregledu broja glasova, phpMyAdmin bazi podataka, te imaju uvid u korisnike. Također mogu uređivati svoj profil, mijenjajući username, ime, prezime, sliku profila i mogu promijeniti lozinku. Korisnici su registrirani na web stranicu kroz sučelje za registraciju i imaju mogućnost prijave kako bi mogli glasovati za izbor vođe određenog tima. Anonimni korisnici imaju mogućnost registracije, pregled sadržaja i rješavanje kviza.

Web stranica se sastoji od 5 stranica. Na početnoj stranici se nalaze obavijesti i događanja. Na drugoj stranici/na stranici „O školi“ piše ukratko o povijesti škole, kontakti, adresa škole, te dio za popunjavanje, gdje se može svaki korisnik upisati sa svojom pričom povijesti i podrijetlu, te se nalazi na dnu i galerija slika. Na trećoj stranici/na stranici „Kategorije“ nalazi se svaka kategorija u koju se opredjeljuju učenici prilikom upisa u školu, opis svake kategorije i na dnu se nalazi kratki kviz o super junacima i moćima. Na četvrtoj stranici/na stranici „Predmeti“ nalazi se popis svih predmeta škole. Na petoj stranici/na stranici „Tjedan igre“ opis svake pojedine igre, popis učenika izabranih za grupe, te rezultati i nagrade natjecanja.

Na svakoj stranici se nalazi logo škole koji klikom na njega vodi na početnu stranicu.

Svaki korisnik može urediti svoj profil kroz sučelje za to i dodati osobne podatke, kao i postaviti profilnu sliku.

NAPOMENA: Škola za superjunake nije prava, izmišljena je i služi samo za primjer kako bi izgledala neka školska stranica.

## Ograničenja

- Anonimni korisnici (ne ulogirani) imaju samo read-only pristup svakoj stranici. Ne mogu glasati, ali mogu rješavati kviz i pisati priče.
- Registrirani korisnici imaju sve privilegije kao što je već i opisano gore.
- Admini mogu provjeravati bazu podataka, imaju pregled svih glasova i broj glasova. Mogu uređivati sve korisnike, te imaju pregled svih napisanih priča. Registracija Admina se vrši jednako kao i registracija korisnika.

## Persone

Persone podrazumijevaju tipove korisnika iz perspektive dizajna sučelja. Ovisno koji je cilj određene persone i na kojem dijelu aplikacije se nalaze, mijenjaju se njihove ovlasti i motivi.

- Admini: Korisnički računi s admin privilegijama. Ima pravo pristupa u Dashboard i mogu mijenjati stvari na razini baze. Ima jednake mogućnosti kao i anonimni korisnici i registrirani korisnici. Može pregledavati glasove, mijenjati, uređivati korisnike i priče. 
- Anoniman korisnik: Korisnik koji posjećuje web stranicu bez da je prijavljen te ima samo read-only pristup, bez nekih drugih mogućnosti (osim kod rješavanja kviza) sve dok se ne prijavi ili registrira. Može samo pregledavati stranice, riješiti kviz i dodati priču.
- Registrirani korisnik/korisnik: Korisnik koji je registriran na stranici tj. ima kreiran korisnički račun. Nakon što je registriran svakim idućim pristupu stranici korisnik se prijavljuje s usernameom i lozinkom koji su pohranjeni u bazi podataka. Korisnik može pregledavati sadržaj na stranicama, rješavati kviz, dodati priču i glasati za vođu tima. Također može i uređivati svoj profil.

Svaki je korisnik pohranjen u bazu podataka te im je dodijeljena uloga u tablici korisnici. Admini imaju postavljene privilegije unutar sučelja Dashboard gdje upravlja korisnicima i pričama. Navedene persone nisu odvojeni modeli niti odvojeni zapisi u bazi, već se isključivo promatraju kao semantički objekti iz perspektive posjetitelja aplikacija.

## Stranice

Osnovne stranice koje se koriste kroz projekt. Određene stranice će biti potrebne za implementaciju određenih funkcionalnosti, ali nisu ovdje eksplicitno navedene jer se podrazumijevaju. Primjer: iako stranica za upisivanje emaila i passworda za registraciju novog korisnika nije navedena, podrazumijeva se njeno postojanje kako bi se moglo omogućiti registriranje novog korisnika. Isto vrijedi i za login stranicu i ostale slične stranice.

Svaka stranica je podstranica u cijelom projektu. Svaka podstranica je zasebna. Na svakoj stranici se nalazi navigacijska traka sa stranicama, logom škole i ikone za prijavu/registraciju.

- POČETNA stranica - početna stranica projekta. Sadrži navigacijsku traku koja se sastoji od dolje navedenih stranica i ikone za prijavu/registraciju korisnika. Stranica sadrži carousel s više izmjeničnih obavijesti, događanja i kalendara školskih aktivnost. Na dnu stranice se nalazi footer s korisnim linkovima i kontaktima. 
- O ŠKOLI stranica - Stranica koja sadrži povijest škole, kontakt informacije, sučelje za popuniti/dodati vlastitu priču i galerija slika.
- KATEGORIJE stranica - Stranica koja sadrži popis svih kategorija u koje su podijeljeni učenici i opis svake kategorija. Na dnu se nalazi kviz koji je anoniman i kojim učenici mogu provjeriti koliko znaju o pojedinom superjunaku, čarobnim bićima, moćima i drugo. Na kraju dobije rezultat s brojem točnih i netočnih odgovora.
- PREDMETI stranica - Stranica koja sadrži popis svih predmeta u školi.
- TJEDAN IGRE stranica - Stranica koja sadrži popis igara i upute za svaku igru, tablicu s učenicima koji su izabrani za igre. U svakoj grupi je po pet učenika iz svake kategorije, gdje kasnije učenici glasaju za vođu grupe. Na dnu stranice se nalaze rezultati i nagrade natjecanja.
- PROFIL stranica - Stranica u kojoj pojedini korisnik uređuje svoje korisničke podatke.
- DASHBOARD stranica - Stranica koja je vidljiva samo Adminu, koja sadrži sučelje za upravljanje korisnicima (brisati/uređivati/dodati) i pregled broja glasova, priča te profil admina kojeg može uređivati.

Svaka stranica koja je navedena smije sadržavati i više funkcionalnosti od navedenih, ako je dizajn aplikacije zamišljen tako da se određene funkcionalnosti obavljaju s te stranice. Naravno, ako ostatak specifikacije ne određuje drugačije.

# User stories

Svaki Epic user story podijeljen je u više user storyja, kojima su definirane funkcionalnost aplikacije iz perspektive pojedine persone. Svaki user story ima definirane acceptance criteria koji potvrđuje ispunjavanja tog User storyja. Epic user story je ispunjen kada su ispunjeni svi acceptance kriteriji svih storyja tog Epica.

NAPOMENA: Neki user storiji imaju i polje Need. U tom polju su eksplicitno navedeni zahtjevi za funkcionalnost koji se ne mogu zaključiti iz teksta storyja. Tamo gdje nema polja Need, potrebni resursi za ispunjenje storyja mogu se zdravo-razumski zaključiti.

## Epic 1: Anonimni korisnik se može registrirati i prijaviti i urediti svoje podatke

- S1-1 Kao anoniman korisnik koji pristupa POČETNOJ stranici, mogu se registrirati kao novi korisnik ili se prijaviti kao postojeći, nakon čega me sustav redirecta nazad na POČETNU stranicu
  
  Need: username, firstname, lastname, password

  Acceptance criteria:

  - Anoniman korisnik vidi link na funkcionalnost registracije
  - Anoniman korisnik može kreirati novi korisnički račun
  - Anoniman korisnik je redirectan nazad na POČETNU stranici, nakon registracije

- S1-2 Kao anoniman korisnik koji pristupa POČETNOJ stranici, mogu se prijaviti na stranicu, nakon čega me sustav redirecta na USER_PAGE stranicu

  Need: ispravan username, password

  Acceptance criteria:

  - Anoniman korisnik vidi link na funkcionalnost prijave
  - Anoniman korisnik se može prijaviti na stranicu
  - Anoniman korisnik je redirectan na USER_PAGE stranicu

- S1-3 Kao Korisnik kada sam prijavljen mogu pristupiti EDIT_STUDENT stranici i urediti svoje korisničke podatke 

  Acceptance criteria:

  - Link na EDIT_STUDENT vidljiv je u navbaru stranice
  - Klik na link otvara EDIT_STUDENT stranicu
  - Korisnik može promijeniti svoje podatke upisane pri registraciji
  - Korisnik ne može pristupiti podacima drugog Korisnika
  - Korisnik ne može promijeniti podatke drugog Korisnika

- S1-4 Kao Korisnik, kada pristupim EDIT_STUDENT stranici, mogu postaviti svoju profilnu (avatar)

  Acceptance criteria:

  - Korisnik može učitati svoju profilnu sliku s računala
  - Nakon spremanja, profilna je vidljiva na EDIT_STUDENT stranici

## Epic 2: Anonimni korisnik može dodati priču

- S2-1 Kao anoniman korisnik bez prijave na stranicu mogu dodati priču o svom porijetlu

  Acceptance criteria:

  - Aniniman korisnik vidi sučelje za popunjavanje priče
  - Anoniman korisnik upisuje svoje ime i prezime, te piše svoju priču
  - Aniniman korisnik sprema svoju priču u bazu klikom na gumb "Postavi priču" 
  - Priča je vidljiva samo adminu

## Epic 3: Korisnik može glasati za vođu grupe

- S3-1 Kao korisnik prilikom prijave na stranicu mogu pristupiti stranici za glasanje

  Need: ispravan username, password

  Acceptance criteria:

  - Samo ulogirani korisnici mogu pristupiti stranici za glasanje
  - Korisnik može glasati anonimno za koga hoće
  - Korisnik može više puta glasati 

## Epic 4: Admin može uređivati pojedine dijelove preko sučelja Dashboard

- S4-1 Kao Admin vidim broj glasova kada pristupim Dashboard stranici

  Acceptance criteria:

  - Admin klikom na gumb „Rezultati“ otvara mu se tablica s glasovima
  - Admin vidi naziv(kategoriju) tablice
  - Admin vidi Ime učenika i broj glasova

- S4-2 Kao Admin, kada pristupim Dashboard stranici mogu uređivati korisnike

  Acceptance criteria:

  - Prilikom prijavljivanja u sustav Adminu se otvara Dashboard stranica
  - Admin vidi popis svih korisnika
  - Admin vidi ID, ime, prezime, username, ulogu i opcije
  - Admin može kreirati novog admina ili novog korisnika klikom na gumb „Dodaj učenika“ gdje se otvara pop-up prozor sa sučeljem za popunjavanje
  - Admin može obrisati svakog korisnika klikom na gumb „Obriši“ ispod „Opcije“
  - Admin može uređivati podatke svakog korisnika, uključujući i druge Admine klikom na gumb „Uredi“ ispod „Opcije“ bude preusmjeren na stranicu za uređivanje korisnika STUDENT_EDIT
  - Admin se klikom na gumb „Nazad“ na stranici STUDENT_EDIT vraća na stranicu Dashboard
  - Admin može dodati ili ukolinti korisniku Admin privilegije bez brisanja korisnika

- S4-3 Kao Admin vidim priče korisnika na Dashboard stranici

  Acceptance criteria:

  - Admin vidi popis svih priča
  - Admin vidi ID, Ime i prezime korisnika, priču i opcije
  - Admin može obrisati svaku priču klikom na gumb „Obriši“ ispod „Opcije“

## Epic 5: Svi posjetitelji web stranice mogu riješavati kviz

- S5-1 Svi korisnici mogu rješiti kviz bez prijave na stranicu

  Acceptance criteria:

  - Svi korisnici mogu pristupiti kvizu
  - Klikom na „Pokreni kviz“ otvara se sučelje s pitanjima
  - Na kraju kviza korisnik dobiva tablicu s podacima o riješenosti kviza 
  - Na kraju kviza korisniku su ponuđene dvije opcije s gumbima „Pokušaj ponovno“ ili „Idi na početak“

## Epic 6: Preglad sadržaja u *footeru* 

- S6-1 Svi korisnici (Anonimni, Registrirani i Admin) imaju mogućnost pregledavati sadržaj u „footeru“

  Acceptance criteria:

  - Svi korisnici mogu vidjeti sadržaj u „footeru“
  - Svi korisnici klikom na korisne linkove „Izbor za vođu“ budu preusmjereni na stranicu „Tjedan igre“ gdje mogu vidjeti popis sudionika za igre
  - Svi korisnici klikom na link „Kviz“ budu preusmjereni na stranicu „Kategorije“ gdje na dnu stranice mogu pronaći kviz
  - Svi korisnici klikom na link „Vaša priča“ budu preusmjereni na stranicu „O školi“ gdje mogu dodati svoju priču
  - Svi korisnici mogu vidjeti kontakt podatke o školi (email, telefon, adresu)



Za admina
  Korisničko ime: admin
  Lozinka: admin

Za usera:
  Korisničko ime: ana
  Lozinka: 123456