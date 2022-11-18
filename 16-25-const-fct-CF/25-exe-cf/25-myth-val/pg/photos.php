<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <title>Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">

</head>
<body>
    <?php include 'include/inc.header.php'?>
 
<div class="container gallery-container">

    <h2 class="page-description text-center">Photos Gallery</h2>   
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/big_buddah.jpg">
                    <img src="img/big_buddah.jpg" alt="big_buddah" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/cambridge_church.jpg">
                    <img src="img/cambridge_church.jpg" alt="cambridge_church" width="350px"></a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="img/celtic_cross.jpg">
                    <img src="img/celtic_cross.jpg" alt="celtic_cross" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/passion_fatima.jpg">
                    <img src="img/passion_fatima.jpg" alt="passion_fatima" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/temple_koh_samui.jpg">
                    <img src="img/temple_koh_samui.jpg" alt="temple_koh_samui" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/9_mondes.jpg">
                    <img src="img/9_mondes.jpg" alt="9 mondes asgard" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/Yggdrasil.webp">
                    <img src="img/Yggdrasil.webp" alt="Yggdrasil" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/tarot.jpg">
                    <img src="img/tarot" alt="cartes tarot" width="350px"></a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/vienna_athena_landmark.jpg">
                    <img src="img/vienna_athena_landmark.jpg" alt="vienna_athena_landmark" width="350px"></a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<hr>
<br>
<?php include 'include/inc.footer.php'?>

</body>
</html>