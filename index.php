<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            max-width: 1000px;
            margin: auto;
            font-family: sans-serif;
        }

        .diagram {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;

        }
    </style>
</head>
<body>
    <h1>Hotel Berlin</h1>

    <h2>Descriere:</h2><br>
    <p>Hotel Berlin este un lanț hotelier ce conține mai multe hoteluri în Europa, iar acesta este site-ul pe
        care un client ar veni pentru a alfa informații despre hotel și a face rezervări.
    </p>
    <br><br>

    <h2>Funcționalități:</h2>
    <ul>
        <li>Un utilizator își poate crea un cont prin email, cont în care are opțiunea de a introduce date personale
            pentru a face mai rapidă crearea unei rezervări.
        </li>
        <li>Utilizatorii sunt de 3 tipuri: clienți (au dreptul de a face rezervări sau a le anula, precum și dreptul de a scrie recenzii),
            angajați (au dreptul de a actualiza pagini cu date despre hotel, cum ar fi paginile cu poze ale facilităților hotelului, dar și 
            de a crea rezervări, în cazul în care acestea au fost făcute de către client prin alt intermediu decât site-ul acesta),
            și administratorii (au toate drepturile de mai sus, plus acces la datele utilizatorilor cu excepția parolelor).
        </li>
        <li>Baza de date a aplicației stochează informații despre facilitățile fizice ale hotelului precum și rezervările făcute, putând astfel
            să ofere date despre disponibilitatea unui anumit hotel pentru un anume interval de timp.
        </li>
        <li>Când un utilizator vrea să facă o rezervare, mai întâi trebuie să selecteze un hotel și un interval de timp în care va avea loc sejurul.
            După aceea aplicația va verifica în baza de date dacă este disponibil acel interval orar. Dacă nu, utilizatorul va fi pus să aleagă alt interval,
            altfel, va fi trimis la o altă fereastră în care va trebui să selecteze tipul de cameră și să ofere informații suplimentare.
        </li>
        <li>Pe profilul unui utilizator pot fi văzute recenziile scrise de acesta, ce contin o notă de la 1 la 10 și textul propriu zis, 
            maximum o singură recenzie per sejur este permisă.
        </li>
        <li>
            Utilizatorii trebuie să își confirme adresa de mail într-un anume interval de timp.
        </li>
        
    </ul>
    <br><br>

    <a href="https://github.com/StefanBerlinschi/Hotel-Berlin">Link GitHub</a><br><br>
    <img src="Diagrama.png" class="diagram">
    
</body>
</html>
