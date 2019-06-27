<?php include 'page-partials/head.php'; ?>

<body>
    <div id="scrolltop"></div>
    <?php include 'page-partials/navbar.php'; ?>

    <div class="home-page">
        <div class="hero-wrapper">
            <div class="container c1">
                <div class="row text-center justify-content-center">
                    <div class="col-10">
                        <h1>TIJDELIJKE TENTOONSTELLING: <br> DE SLAG OM NORMANDIE</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-two">
            <div class="container c2">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card tickets-card">
                            <div class="card-image ci1"></div>
                            <div class="card-content">
                                <h2 class="card-title">Koop Kaarten</h2>
                                <hr>
                                <p class="card-desc">Kaarten kopen kan nu ook via onze site! Kom en ontdek de 2de wereldoorlog in ons museum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card contact-card">
                            <div class="card-image ci2"></div>
                            <div class="card-content">
                                <h2 class="card-title">Contact</h2>
                                <hr>
                                <p class="card-desc">Heeft u nog vragen voor ons? Geen probleem! Klik hier en stel uw vraag via ons contact formulier. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card normandy-card">
                            <div class="card-image ci3"></div>
                            <div class="card-content">
                                <h2 class="card-title">Slag Om Normandie</h2>
                                <hr>
                                <p class="card-desc">Hier vind u meer informatie over onse tijdelijke tentoonsteling: De slag om Normandie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Over ons</h1>
                        <br>
                        <p class="about-us-desc">Wij zijn het Nationaal Oorlogs Museum. In ons museum vind je alles over de tweede wereldoorlog. Kom eens een kijkje nemen bij de voertuigen en wapens die gebruikt zijn tijdens s'werelds grootste conflict. Voor maar 22 euro ervaart u de geschiedenis als nooit tevoren!</p>
                    </div>
                    <div class="col-md-6 col-grid">
                        <img src="assets/images/overloon.jpg" alt="">
                        <img src="assets/images/overloon2.jpg" alt="">
                        <img src="assets/images/overloon3.jpg" alt="">
                        <img src="assets/images/overloon4.jpg" alt="">
                        <img src="assets/images/overloon5.jpg" alt="">
                        <img src="assets/images/overloon6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <h1>Contact</h1>
                        <br>
                        <h4>Locatie: Contactweg 36 Amsterdam, Noord-Holland</h4>
                        <h4>E-mail: info@nom.nl</h4>
                        <h4>Tel: 06123456789</h4>
                    </div>
                    <div class="col-md-6 ">
                        <label for="name">Naam</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" required>
                        <label for="tel">Telefoonnummer</label>
                        <input type="text" id="tel" name="tel" required>
                        <label for="message">Type hier uw vraag</label>
                        <input type="textarea" rows="4" cols="100" id="message" name="message" required>
                        <input type="submit" value="verstuur">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'page-partials/footer.php'; ?>
</body>

</html>