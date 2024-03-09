<!-- made with love by Khalil at coderteam -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- <script type="module" src="node_modules/@vanillawc/wc-marquee/index.js"></script> -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/vanillawc/wc-marquee@1/index.js"></script>
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
Verification: 3d557f2f28787461
    <button class="menuButton" onclick="press()">+</button>
    <header id="shMenu" class="menuHide">
        <div class="container"> <!-- определяем заднего фона -->
            <!-- в контакт входить такие компоненты как work-time, social, contact и читать дальще -->
            <div class="contacts">
                <div class="contacts__work-time">
                    <?php get_template_part("templates/contacts/work-time"); ?>
                </div>
                <div class="contacts__social">
                    <?php get_template_part("templates/contacts/social"); ?>
                </div>
                <div class="contacts__contact">
                    <?php get_template_part("templates/contacts/contact"); ?>
                </div>
            </div>
            <div class="header">
                <div class="header__logo"> <!-- надо поменять размер фото -->
                    <?php get_template_part("templates/contacts/logo"); ?>
                </div>
                <div class="header__menu">
                    <?php wp_nav_menu(['theme_location'  => 'header',]); ?>
                </div>
            </div>
    </header>
    <!-- тело страницы -->



    <script>
        var re = document.querySelector(".menuButton");
        var header = document.querySelector(".menuHide");
        let defaultInner = re.innerHTML;
        // console.log();

        function press() {
            header.classList.toggle("menuShow");
            if (re.innerHTML == "x") {
                re.innerHTML = defaultInner;
            } else {
                re.innerHTML = "x";
            }
        }
    </script>