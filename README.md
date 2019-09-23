# Board

Numeriukų švieslentė ir jos valdymas<br />
LIVE LINK: http://board.mygidas.lt/<br />
FRONT-END dalis (visi duomenys išsisaugo LocalStorage)<br /><br />

Susideda iš 5 puslapių:
* index.html - Švieslentė su numeriukais;
* newclient.html - Kliento registraciją;
* specialist.html - Aptarnaujančio specialisto tinklalapis;
* checkclient.html - Kliento galimos operacijos;
* calendar.html - Kalendorius su statistika;

Kiekvienas puslapis turi savo JS failiuką, kuris jį valdo.

## Installation

Ikeliati į serverį ir galima naudotis.

## Data

Kiekvienas numeriukas aprašomas JSON formato objektu:

{
    "numeris": 1,
    "vardas": "Lukas",
    "code": 123456,
    "specialistas": 1,
    "time": null,
    "finishTime": null,
    "done": false
  },

## Usage

### index.html - Švieslentė

Veikimas:
* Nuskaito duomenis iš "LocalStorage";
* Suskirsto duomenis pagal specialistą;
* Duomenys atvaizduojami pagal eiliškumą, kuo labiau į viršų tuo greičiau prieis eilę;
* Pirmas, atvaizduotas kita spalva yra dabar aptarnaujamas;
* Dešinėja pusėja apskaičiuojamas preleminarus laukimo laikas kiekvienam numeriui. Paimi visi duomenys istorijos duomenys kuriuos aptarnavimo specialistas ir suskaičiuojamas jų vidurkis ir dauginama iš eilės numerio pas specialistą, jeigu nėra duomenų nustatomas vidutinis laikas 6min;
