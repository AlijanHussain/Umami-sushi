<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Duncan">
    <title>Umami Sushi</title>
    <script src="JS/javascript.js" defer></script>
    <link rel="stylesheet" href="CSS/style_duncan.css">
</head>
<body>
  <?php
  include "header.php";

  ?>
  
    <hr class="line2TL">
    <hr class="line1">

    <main>

        <h1 class="welkom">Reserveren</h1>

    <article class="reserveren">
        Naam:
        <input id="namen" type='text' name='name' class="reserveer_functie"><br>
        E-mail:
        <input id="email" type='text' name='email' class="reserveer_functie"><br>
        Telefoonnummer:
        <input id="phone" type='text' name='phone' class="reserveer_functie"><br>
        Aantal personen:
        <input id="aantal" type="number"  min="1" max="20" class="reserveer_functie"><br>
        Datum/tijd:
        <select id="tijd"  class="reserveer_functie">
            <option></option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>
        </select><br>
        Type reservering:
        <input id="soort" type='text' name='reservation_type' class="reserveer_functie"><br>
        Bijzonderheden:
        <input id="bijzonder" type='text' name='special_requests' class="reserveer_functie"><br>

        <p class="beschrijving ">Wil je verzekerd zijn van een tafel? Volg dan deze eenvoudige stappen om te reserveren:<br><br> 1. Bedenk op welke dag en hoe laat je wilt komen eten. Houd rekening met drukke dagen zoals in het weekend of op feestdagen.<br><br> 2. Laat weten met hoeveel personen je komt. Zo kunnen wij een passende tafel voor je klaarzetten.<br><br> 3. Na je reservering ontvang je een bevestiging. Controleer goed of alle gegevens kloppen.<br><br> 4. Kun je toch niet komen? Laat het ons dan zo snel mogelijk weten. Zo kunnen wij de tafel aan iemand anders geven.</p>


    </article>

    <button type="button" id="knopReserveer" class="knop_reserveer"><h3>Reserveren Nu!</h3></button>

    <img src="img/plankje_sushi.png" alt="Sushi" class="sushiplankje">
    <img src="img/ingang.png" alt="foto van ingang" class="ingang">


          
    <hr class="line4">  
    <hr class="line2TL">
    </main>

  <?php
  include "footer.php";

  ?>
        






        

        


