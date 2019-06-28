<?php include 'page-partials/head.php'; ?>

<body>
    <div id="scrolltop"></div>
    <?php include 'page-partials/navbar.php'; ?>

    <div class="tickets-page">
        <div class="hero-wrapper">
            <div class="container c1">
                <div class="row text-center justify-content-center">
                    <div class="col-10">
                        <h1>Koop uw kaarten hier online</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card card1">
                            <div class="card-image ci2"></div>
                            <div class="card-content">
                                <h2 class="card-title">Jongeren vanaf 16 t/m 65 jaar</h2>
                                <hr>
                                <p class="card-desc">€22.00</p>
                                <button>KOOP NU</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card2">
                            <div class="card-image ci2"></div>
                            <div class="card-content">
                                <h2 class="card-title">Volwassenen vanaf 16 t/m 65 jaar</h2>
                                <hr>
                                <p class="card-desc">€22.00</p>
                                <button>KOOP NU</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card3">
                            <div class="card-image ci3"></div>
                            <div class="card-content">
                                <h2 class="card-title">ouderen vanaf 65 jaar en ouder</h2>
                                <hr>
                                <p class="card-desc">€22.00</p>
                                <button>KOOP NU</button>
                            </div>
                        </div>
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
        <?php include 'page-partials/footer.php'; ?>
</body>

</html>