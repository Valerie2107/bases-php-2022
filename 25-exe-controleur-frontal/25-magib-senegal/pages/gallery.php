<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Galerie</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="baniere">
        <img class="imge" src="img/senegal.jpg" alt="img">
        <div class="text">
            <h1>Voyage au Sénégal</h1>
        </div>
        <?php
        include "menu.php";
        ?>
        <div class="gal">
            <h1 class="titre">Bienvenue sur la Galeries</h1>
            <img src="" alt="">
        </div>

        <table>
            <tr>
                <td><a href="img/casamance-1024x555-1.webp" data-lightbox="mes_photos"><img alt="Photo1" src="img/casamance-1024x555-1.webp"></a></td>
                <td><a href="img/lac rose.png" data-lightbox="mes_photos"><img alt="Photo2" src="img/lac rose.png"></a></td>
                <td><a href="img/cult.jpg" data-lightbox="mes_photos"><img alt="Photo2" src="img/cult.jpg"></a></td>
            </tr>
            <tr>
                <td><a href="img/lutte.jpg" data-lightbox="mes_photos"></a><img alt="Photo3" src="img/lutte.jpg"></a></td>
                <td><a href="img/Lompoul.jpg" data-lightbox="mes_photos"></a><img alt="Photo4" src="img/Lompoul.jpg"></a></td>
                <td><a href="img/sine_saloum.jpg" data-lightbox="mes_photos"><img alt="Photo2" src="img/sine_saloum.jpg"></a></td>
            </tr>
        </table>
        <script src="lightbox/lightbox-plus-jquery.min.js"></script>

</body>

</html>