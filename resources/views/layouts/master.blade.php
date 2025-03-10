<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>

    <div class="marquee-container">
        <div class="marquee">
            SERVIZIO IRREGOLARE SU TUTTE LE LINEE A CAUSA DI GUASTO TECNICO.
            SI INVITANO I PASSEGGERI A CONSULTARE GLI SCHERMI IN STAZIONE PER MAGGIORI INFORMAZIONI.
            GRAZIE PER LA COLLABORAZIONE, CI SCUSIAMO PER IL DISAGIO. PER QUALSIASI LAMENTELA CONTATTARE IL SIG. MATTEO
            SALVINI. P.S. FATE ATTENZIONE AI BORSEGGIATORI ED ALLA LINEA GIALLA.
        </div>
    </div>

    <div class="container pb-5">
        @yield('contenuto')
    </div>

</body>

</html>
