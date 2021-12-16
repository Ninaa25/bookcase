<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    
    <title>FASHION</title>

</head>
<body>

    <div id="stolica">
        <img src="../images/slika1.jpg" width="47%" alt="">
    </div>
    <div id="ruka">
        <img src="../images/slika3.jpg" width="48%" alt="">
    </div>
    <h1>FASHION</h1>
    
    <div id="bela" >
        <img src="../images/slika5.jpg" width="15%" alt="">
    </div>

     

    <div class="tekst">
        <p><span id="m">F</span>ashion je mesto koje prati sve aktuelne trendove i izdvaja najbolje i najoriginalnije komade koji se trenutno nalaze u svetu mode.
            Predstavljamo Vam širok asortiman odeće, obuće, kao i raznih aksesoara. 
            Ukoliko želite, možete se prijaviti na naš <a href="#newsletter">Newsletter</a>  kako bi Vam svakodnevno
            stizale informacije o novim komadima u našem raznovrsnom asortimanu. Ovo je mesto na kom možete ostavljati svoje komentare, 
            sugestije i ocene i na taj način nam pomoći da postanemo Vaše omiljeno mesto za kupovinu.

        </p>
    </div>    

    <div class="citati">
        <div class="row justify-content-around">
            <div class="col-3">
                <p>"Vaša odeća predstavlja način da se predstavite svetu,
                naročito sada, kada komunikacija postaje tako brza. Moda je instant jezik."</p> 
                <p>Miuccia Prada</p>
            </div>

            <div class="col-1"></div>
 
            <div class="col-3">
                <p>"Nikad se ne možeš previše brinuti o izboru svojih cipela. Neke žene misle da je to nebitno, no pravi dokaz njihove elegancije je na izboru cipela."</p> 
                <p>Christian Dior</p>  
            </div>
            <div class="col-1"></div>
            <div class="col-3">
                <p>"Obucite se otrcano i oni se sećaju haljine; obucite se besprekorno i oni će se sećati žene"</p>
                <p>Coco Chanel</p> 
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Odeća</h3>
                <a href="pages/odeca.php" target="_blank"><img src="../images/slika6.jpg" alt=""></a>
            </div>
            <div class="col-4">
                <h3>Obuća</h3>
                <a href="pages/obuca.php" target="_blank"><img src="../images/slika20.jpg" alt=""></a>
            </div>
            <div class="col-4">
                <h3>Aksesoari</h3>
                <a href="pages/aksesoari.php" target="_blank"><img src="../images/slika9.jpg" alt=""></a> 
            </div>
          </div>
    </div>

    <div id="newsletter">
        <p>Prijavite se za Newsletter i budite uvek u toku!</p>
        <form method="POST" action="" id="forma_news">
            <input type="text" placeholder="Ime" name="ime" id="ime">
            <br>
            <input type="text" placeholder="Email adresa" name="mail" id="mail">
            <br>
            <button type="submit" class="btn btn-dark" name="prijava" id="prijava">Prijavi se!</button>
        </form>
    </div>



</body>
</html>