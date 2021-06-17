<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <link rel="canonical" href="https://iroshandezilva.com"/>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title><?php if (isset($title)) echo "$title -" ?> Iroshan De Zilva - User Interface and Experience Designer</title>
    <meta name="title" content="Iroshan De Zilva - User Interface and Experience Designer">
    <meta name="description"
          content="User Interface & User Experience designer creating thoughtful experiences with the combination of design.">
    <meta name="keywords"
          content="UI UX designer Sri Lanka, ui ux designer resume, ui ux designer work, ui ux designer work, UI designer, UX designer, mobile UI design, graphic designer, web developer, front-end developer, Figma, freelancer, web development">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://iroshandezilva.com/">
    <meta property="og:title" content="Iroshan De Zilva - User Interface and Experience Designer">
    <meta property="og:description"
          content="User Interface & User Experience designer creating thoughtful experiences with the combination of design.">
    <meta property="og:image" content="https://iroshandezilva.com/assets/img/iroshandezilva-meta.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://iroshandezilva.com/">
    <meta property="twitter:title" content="Iroshan De Zilva - User Interface and Experience Designer">
    <meta property="twitter:description"
          content="User Interface & User Experience designer creating thoughtful experiences with the combination of design.">
    <meta property="twitter:image" content="https://iroshandezilva.com/assets/img/iroshandezilva-meta.png">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--inter font link-->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="preload" as="font">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link rel="stylesheet" href="assets/css/cursor.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Hotjar Tracking Code for iroshandezilva.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 2285000, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144371888-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-144371888-1');
    </script>


</head>
<?php
$link_exp = explode("/", $actual_link);
$final_key = $link_exp[count($link_exp) - 1]
?>

<body>

<header>

    <nav class="fixed w-full top-0 left-0 z-50 bg-white backdrop-filter backdrop-blur-xl main-navigation-wrapper lg:bg-transparent ">
        <div class="container">
            <div class="main-navigation flex justify-between content-center items-center flex-wrap py-4">
                <div class="logo w-28">
                    <a href="/">
                        <img src="assets/img/iroshandezilva-logo.svg" alt="Iroshan De Zilva UI UX Designer">
                    </a>
                </div>
                <button class="navbar-toggler menu ripplemenu block lg:hidden">
                    <svg viewBox="0 0 64 48">
                        <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                        <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                        <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                    </svg>
                </button>
                <div class="navigation-wrapper flex content-center flex-wrap hidden lg:block">
                    <div class="navigation">
                        <div class="menu-wrapper flex">
                            <div class="menu-item <?php echo ($final_key == "" || $final_key == "index.php") ? 'active' : null ?>">
                                <a class="k-hover2" href="index.php">Home</a></div>
                            <div class="menu-item <?php echo ($final_key == "about-me" || $final_key == "about-me.php") ? 'active' : null ?>">
                                <a class="k-hover3 " href="about-me.php"> About Me</a></div>
                            <div class="menu-item"><a target="_blank"
                                                      href="https://dribbble.com/iroshandezilva">Portfolio</a></div>
                            <div class="menu-item
                        <?php echo ($final_key == "contact-me" || $final_key == "contact-me.php") ? 'active' : null?>"><a href="contact-me.php">Contact Me</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="mobilenav-overlay ">
        <div class="mobilenav-content container">
            <div class="mobilenav-wrapper">
                <div class="mobile-menu flex">
                    <div class="mobile-menu-item"><a href="index.php">Home</a></div>
                    <div class="mobile-menu-item"><a href="about-me.php"> About Me</a></div>
                    <div class="mobile-menu-item"><a href="portfolio.php">Portfolio</a></div>
                    <div class="mobile-menu-item"><a href="contact-me.php">Contact Me</a></div>
                </div>
            </div>
            <div class="mobilenav-social text-center">
                <a class="btn " href="mailto:hello@iroshandezilva.com">hello@iroshandezilva.com</a>
                <div class="flex justify-center mt-5">

                    <div class="social-item mx-1">
                        <a href="https://www.facebook.com/iroshandezilva/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="social-item  mx-1">
                        <a href="https://www.instagram.com/iroshandezilva/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="social-item mx-1">
                        <a href="https://www.linkedin.com/in/iroshandezilva/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="social-item  mx-1">
                        <a href="https://dribbble.com/iroshandezilva"><i class="fab fa-dribbble"></i></a>
                    </div>
                    <div class="social-item  mx-1">
                        <a href="https://www.behance.net/iroshandezilva"><i class="fab fa-behance"></i></a>
                    </div>
                    <div class="social-item  mx-1">
                        <a href="https://iroshandezilva.medium.com/"><i class="fab fa-medium-m"></i></a>
                    </div>
                    <div class="social-item  mx-1">
                        <a href="https://github.com/iroshandezilva/"><i class="fab fa-github-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Pre Loader -->
<!--<section class="loading_overlay">-->
<!--    <div class="loader_logo">-->
<!--        <img class="logo" src="assets/img/iroshandezilva-logo.svg" />-->
<!--    </div>-->
<!--</section>-->
