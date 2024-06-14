<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/akar-icons-fonts"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'topBar.php'; ?>

    <div class="levelsDispos">
        <div class="section0">
            <div class="level01 levelgame level completelevel" type="button" data-bs-toggle="modal" data-bs-target="#level1"></div>
            <img src="./recursos/curve.png" class="curve lvl1to2 completecurve" />
            <div class="level02 levelgame level completelevel">
                <div class="level02 level completelevel" type="button" data-bs-toggle="modal" data-bs-target="#level2"></div>
            </div>

        </div>
        <div class="section1 ">
            <img src="./recursos/curve.png" class="curve lvl2to3" />
            <div class="level03 levelsede level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl3to4" />
            <div class="level04 levelgame level">
                <div class=" levelgame level completelevel" type="button" data-bs-toggle="modal" data-bs-target="#level4"></div>
            </div>
            <div class="level04 levelgame level completelevel" type="button" data-bs-toggle="modal" data-bs-target="#level4"></div>
            <img src="./recursos/curve.png" class="curve lvl4to5 completecurve" />
            <div class="level05 levelavion level">

            </div>
        </div>
        <div class="section2 sede2">
            <img src="./recursos/curve.png" class="curve lvl5to6" />
            <div class="level06 levelsede level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl6to7" />
            <div class="level07 levelgame level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl7to8" />
            <div class="level08 levelavion level">

            </div>
        </div>
        <div class="section3 sede3">
            <img src="./recursos/curve.png" class="curve lvl8to9" />
            <div class="level09 levelsede level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl9to10" />
            <div class="level10 levelgame level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl10to11" />
            <div class="level11 levelavion level">

            </div>
        </div>
        <div class="section4">
            <img src="./recursos/curve.png" class="curve lvl11to12" />
            <div class="level12 levelfinish level">

            </div>
            <img src="./recursos/curve.png" class="curve lvl12tofinal" />
        </div>
    </div>
    <div class="bodyMenu">
    </div>


    <div class="modal fade" id="level1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/menupage/juego-rompecabezas/juego.php"); ?>
    </div>

    <div class="modal fade" id="level2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/menupage/quiz-modal/quiz.php"); ?>
    </div>
    <div class="modal fade" id="level4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/menupage/juego-memory/juego.php"); ?>
    </div>



    <script src="menu.js"></script>
</body>

</html>