<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moii's Portfolio</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/onepage-scroll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <header id="header" class="">
        <div>
            <!-- <a href="" title="">
                <img src="assets/img/user-logo.png" alt="Logo" class="header-logo">
            </a> -->
        </div>
        <div class="menu-toggle">
            <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
            <label for="menu-icon"></label>
            <nav class="nav">       
                <ul class="pt-5">
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Plugins</a></li>
                    <li><a href="#">Hire Us</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="main">
        <section class="main-wrapper">
            <div class="section-1">
                <div>
                    <img src="assets/img/user-logo.png" alt="Logo" class="img-logo">
                    <div class="social-wrapper">
                        <a href="" title="" target="_blank">
                            <lottie-player id="firstLottie" src="assets/img/linkedin/linkedin.json" style="filter: invert(1);width:50px; height: 50px;" hover></lottie-player>
                        </a>
                        <a href="" title="" target="_blank">
                            <lottie-player id="firstLottie" src="assets/img/instagram/instagram.json" style="filter: invert(1);width:50px; height: 50px;" hover></lottie-player>
                        </a>
                        <!-- <a href="" title="" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
                        <a href="mailto:franciscodagamac@gmail.com" title="" target="_blank">
                            <lottie-player id="firstLottie" src="assets/img/mail/mail.json" style="filter: invert(1);width:50px; height: 50px;" hover></lottie-player>
                        </a>
                    </div>
                </div>
                <div>
                    <h1>We're Presta Boys</h1>
                    
                    <?php
                        for ($i=0; $i < 20; $i++) { 
                            echo "<div>" . $i . "</div>";
                        }
                    ?>


                    <p>We are an independent web developers specialized in <a href="" title="">Prestashop</a>, <a href="" title="">Laravel</a>, <a href="" title="">Wordpress</a> and many more. On our spare times, we used to code mostly on Prestashop modules,
                        themes, Wordpress customization and back end (Laravel, Codeigniter) as well. We used to work with both small and big companies from around the world as a full-time developer and freelance for the last 4 years that helps us polished
                        our skills in development.</p>
                    <p>We're always open to work, contact us anytime you want.</p>
                </div>
            </div>
        </section>
        <section class="d-flex section-work-wrapper">
            
            <div>
                <div class="background-one">
                    <div class="link-container">
                        <a class="link-one" href="https://jhancock532.github.io/link-hover-effects/">Prestashop</a>
                    </div>
                </div>
                <div class="background-two link-container">
                    <a class="link-two" href="https://jhancock532.github.io/link-hover-effects/">Laravel</a>
                </div>
                <div class="background-three link-container">
                    <a class="link-three" href="https://jhancock532.github.io/link-hover-effects/">Wordpress</a>
                </div>
            </div>

        </section>
        <section class="d-flex">
            <h1>Plugins section</h1>
        </section>
        <section class="d-flex">
            <h1>Hire Us section</h1>
        </section>
    </div>



    <script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>

    <!-- <script src="https://unpkg.com/feather-icons"></script> -->

    <script src="assets/js/jquery.onepage-scroll.min.js" type="text/javascript"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
</body>

</html>