<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon EHPAD</title>

    <!-- Slider Rev header -->

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

    <!-- LOADING FONTS AND ICONS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A800%2C500%2C400" rel="stylesheet" property="stylesheet"
        type="text/css" media="all" />


    <link rel="stylesheet" type="text/css" href="assets/rev/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/rev/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/rev/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="assets/rev/revolution/css/layers.css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/rev/revolution/css/navigation.css">

    <!-- FONT AND STYLE FOR BASIC DOCUMENTS, NO NEED FOR FURTHER USAGE IN YOUR PROJECTS-->
    <!-- <link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet"
    type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/rev/assets/css/noneed.css"> -->

    <!-- Rev slider includes -->
    <!-- REVOLUTION JS FILES -->
    <!-- <script type="text/javascript" src="assets/rev/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/jquery.themepunch.revolution.min.js"></script> -->
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <!-- <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/rev/revolution/js/extensions/revolution.extension.video.min.js"></script> -->


    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto&display=swap" rel="stylesheet">
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/fontawesome-free/css/brands.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- PrettyPhoto -->
    <!-- <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" type="text/javascript"></script>
    <link rel="stylesheet" href="assets/prettyphoto/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <script src="assets/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>

    <?php include("nav.php"); ?>

    <main class="gallery container-xl">

        <div class="row">
        
        <?php
        
        $img_urls = array(
            "assets/img/gallery/01.jpg",
            "assets/img/gallery/02.jpg",
            "assets/img/gallery/03.jpg",
            "assets/img/gallery/04.jpg",
            "assets/img/gallery/05.jpg",
            "assets/img/gallery/06.jpg",
            "assets/img/gallery/07.jpg",
            "assets/img/gallery/08.jpg",
            "assets/img/gallery/09.jpg",
            "assets/img/gallery/10.jpg",
            "assets/img/gallery/11.jpg",
            "assets/img/gallery/12.jpg",
            "assets/img/gallery/13.jpg",
            "assets/img/gallery/14.jpg",
            "assets/img/gallery/15.jpg",
            "assets/img/gallery/16.jpg",
            "assets/img/gallery/17.jpg",
            "assets/img/gallery/18.jpg",
            "assets/img/gallery/19.jpg",
            // "assets/img/gallery/20.jpg",
            "assets/img/gallery/21.jpg",
            "assets/img/gallery/22.jpg",
            "assets/img/gallery/23.jpg",
            "assets/img/gallery/24.jpg",
            "assets/img/gallery/25.jpg",
        );
        $thumbs_urls = array(
            "assets/img/gallery/01_thumb.jpg",
            "assets/img/gallery/02_thumb.jpg",
            "assets/img/gallery/03_thumb.jpg",
            "assets/img/gallery/04_thumb.jpg",
            "assets/img/gallery/05_thumb.jpg",
            "assets/img/gallery/06_thumb.jpg",
            "assets/img/gallery/07_thumb.jpg",
            "assets/img/gallery/08_thumb.jpg",
            "assets/img/gallery/09_thumb.jpg",
            "assets/img/gallery/10_thumb.jpg",
            "assets/img/gallery/11_thumb.jpg",
            "assets/img/gallery/12_thumb.jpg",
            "assets/img/gallery/13_thumb.jpg",
            "assets/img/gallery/14_thumb.jpg",
            "assets/img/gallery/15_thumb.jpg",
            "assets/img/gallery/16_thumb.jpg",
            "assets/img/gallery/17_thumb.jpg",
            "assets/img/gallery/18_thumb.jpg",
            "assets/img/gallery/19_thumb.jpg",
            // "assets/img/gallery/20_thumb.jpg",
            "assets/img/gallery/21_thumb.jpg",
            "assets/img/gallery/22_thumb.jpg",
            "assets/img/gallery/23_thumb.jpg",
            "assets/img/gallery/24_thumb.jpg",
            "assets/img/gallery/25_thumb.jpg",
        );

        $descs = array(
            "Tournois de ping-pong intergénérationnels.",
            "Bâtiments designés par Frank Ghery.",
            "Bâtiments designés par Frank Ghery.",
            "Ping-pong triangulaire.",
            "Bâtiments designés par Frank Ghery.",
            "Bâtiments designés par Frank Ghery.",
            "Cantine sympa sponsorisée McDo.",
            "Coronavirus experts.",
            "Personnel mignon et sympa.",
            "Cantine sympa sponsorisée McDo.",
            "Harold approves !",
            "Harold approves very much !",
            "But Harold knows whent it's time to get serious.",
            "Superalculateurs de la NASA.",
            "Sponsorisé par le Massachusetts Institute of Technology.",
            "8G garantie à tous les étages.",
            "Simplon EHPAD ? Hell yeah !",
            "Quel petit blagueur le petit fils à Yohann !!!",
            "Résidents de profils variés pour une expérience riche.",
            // "assets/img/gallery/20_thumb.jpg",
            "Smudge approves !",
            "Ateliers artistiques sur la meme culture.",
            "Animateurs de qualité (Alice Cooper, 123 ans et toujours la patate).",
            "Parrain de Simplon EHPAD Charleville : Iggy Pop.",
            "Robert Smith passe faire un coucou de temps en temps, même si il n'a pas été invité.",
        );

        $i = 0;
        foreach ($img_urls as $img_url){

            echo '
            <div class="col-5 col-md-4 col-lg-3 my-2 mx-auto"><a rel="prettyPhoto[myGallery]" title="'.$descs[$i].'" href="'.$img_url.'">
                <img class="img-fluid" alt="'.$descs[$i].'" src="'.$thumbs_urls[$i].'">
            </a></div>';
            $i++;
        }

        
        ?>
        
        </div>
    
    </main>

    <?php include("footer.php"); ?>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto({social_tools:''});
        });
    </script>

</body>
</html>