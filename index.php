<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>VIP Aviation Berlin</title>
    <meta name="description" content="Executive Aircraft Service">

    <!-- <link rel="stylesheet" type="text/css" href="./vendor/skeleton/normalize.css">
        <link rel="stylesheet" type="text/css" href="./vendor/skeleton/skeleton.css"> -->

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap"
        rel="stylesheet" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              rel="stylesheet"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
              crossorigin="anonymous"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script> -->
</head>

<body>

    <?php require(__DIR__ . "/inc/header_old.php"); ?>
    <!--?php require(__DIR__ . "/inc/header_anim.php"); ?-->
    <?php require(__DIR__ . "/inc/service.php"); ?>
    <?php require(__DIR__ . "/inc/features.php"); ?>
    <!--?php require(__DIR__ . "/inc/clients.php"); ?-->
    <?php require(__DIR__ . "/inc/map.php"); ?>
    <!--?php require(__DIR__ . "/inc/team.php"); ?-->
    <?php require(__DIR__ . "/inc/contact.php"); ?>
    <?php require(__DIR__ . "/inc/footer.php"); ?>

    <!--SCRIPTS-->
    <script type="text/javascript" src="./vendor/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="./vendor/jpanelmenu/jquery.jpanelmenu.js"></script>
    <script type="text/javascript" src="./vendor/modernizr/modernizr-custom.js"></script>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var jPM = $.jPanelMenu({
            menu: '.side-menu',
            trigger: '#side-menu-trigger',
            direction: 'right'

        });
        jPM.on();
        console.log("PanelClick Open");
        $(".side-menu a").click(function() {
            jPM.close();
            console.log("PanelClick Close");
        });
    });
    </script>

    <!--- WORKING ANIMATION FOR HEADER OLD ---
    <script type="text/javascript">
    gsap.from(".box", {
        opacity: 0,
        y: -100,
        duration: 2
    });
    </script>

    <script type="text/javascript">
    gsap.from(".box2", {
        opacity: 0,
        x: -800,
        duration: 3
    });
    </script>
  END  ---->

    <!-- <script type="text/javascript">
    //  const slogan = document.getElementById('slogan')
    //  const tl = gsap.timeline({
    //      defaults: {
    //          ease: "power2.inOut",
    //          duration: 1.5
    //      }
    //  });

    //  tl.from('slogan-top', {
    //      opacity: 0,
    //      x: '-20%',
    //      duration: 1
    //  });

    </script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
        integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
        crossorigin="anonymous"></script>

    <!--<script src="./app.js"></script>-->

</body>

</html>