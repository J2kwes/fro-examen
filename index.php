<?php include 'page-partials/head.php'; ?>

<body>
    <div id="scrolltop"></div>
    <?php include 'page-partials/navbar.php'; ?>

    <div class="home-page">
        <div class="hero-wrapper">
            <div class="container c1">
                <div class="row text-center  justify-content-center">
                    <div class="col-10">
                        <h1>TIJDELIJK TENTOONSTELLING: <br> DE SLAG OM NORMANDIE</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-two">
            <div class="container c2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image ci1"></div>
                            <div class="card-content">
                                <h2 class="card-title">Neem Contact Op</h2>
                                <hr>
                                <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem animi magnam dolores neque necessitatibus atque cupiditate alias corporis facilis? Illum, saepe doloribus! Et modi, debitis perferendis neque ipsa architecto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image ci2"></div>
                            <div class="card-content">
                                <h2 class="card-title">Koop Kaarten</h2>
                                <hr>
                                <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem animi magnam dolores neque necessitatibus atque cupiditate alias corporis facilis? Illum, saepe doloribus! Et modi, debitis perferendis neque ipsa architecto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image ci3"></div>
                            <div class="card-content">
                                <h2 class="card-title">Slag Om Normandie</h2>
                                <hr>
                                <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus dolorem animi magnam dolores neque necessitatibus atque cupiditate alias corporis facilis? Illum, saepe doloribus! Et modi, debitis perferendis neque ipsa architecto.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="Material-contact-section section-padding section-dark">
            <div class="container">
                <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                        <h1 class="section-title">Contact</h1>
                    </div>
                </div>
                <div class="row">
                    <!-- Section Titile -->
                    <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                        <p>Heeft u nog onbeantwoorde vragen? Neem dan gerust contact met ons op!</p>

                        <div class="find-widget">
                            Company: <a href="https://hostriver.ro">HostRiver</a>
                        </div>
                        <div class="find-widget">
                            Address: <a href="#">4435 Berkshire Circle Knoxville</a>
                        </div>
                        <div class="find-widget">
                            Phone: <a href="#">+ 879-890-9767</a>
                        </div>

                        <div class="find-widget">
                            Website: <a href="https://uny.ro">www.uny.ro</a>
                        </div>
                        <div class="find-widget">
                            Program: <a href="#">Mon to Sat: 09:30 AM - 10.30 PM</a>
                        </div>
                    </div>
                    <!-- contact form -->
                    <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                        <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                            <!-- Name -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- email -->
                            <div class="form-group label-floating">
                                <label class="control-label" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Subject -->
                            <div class="form-group label-floating">
                                <label class="control-label">Subject</label>
                                <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Message -->
                            <div class="form-group label-floating">
                                <label for="message" class="control-label">Message</label>
                                <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <!-- Form Submit -->
                            <div class="form-submit mt-5">
                                <button class="btn btn-common" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>