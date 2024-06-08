<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/akar-icons-fonts"></script>
    <link rel="stylesheet" href="./css/style_modals.css">
</head>

<body>
    <!-- CANJEO COINS -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#coins">
        Coins
    </button>

    <div class="modal fade" id="coins" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/coins-modal/coins.php"); ?>
    </div>

    <!-- CANJEO COINS -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#information">
        Información
    </button>

    <div class="modal fade" id="information" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/information-modal/information.php"); ?>
    </div>

    <!-- AVISO - TIENDA -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#aviso">
        Aviso
    </button>

    <div class="modal fade" id="aviso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/aviso-modal/aviso.php"); ?>
    </div>

    <!-- POPOVER - CANJEAR -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#canjear">
        Canje
    </button>

    <div class="modal fade" id="canjear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/popover-canje/canjear.php"); ?>
    </div>

    <!-- POPOVER - CANCEL -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cancel">
        Cancelar
    </button>

    <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/popover-cancel/cerrar.php"); ?>
    </div>

    <!-- JUEGO - MEMORIA -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#juego">
        Juego Memoria
    </button>

    <div class="modal fade" id="juego" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/juego-memory/juego.php"); ?>
    </div>

    
</body>

</html>