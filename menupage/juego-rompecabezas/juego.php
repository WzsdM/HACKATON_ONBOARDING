<script src="../menupage/juego-rompecabezas/appr.js"></script>
<link rel="stylesheet" href="../menupage/juego-rompecabezas/styless.css">
<div class="modal-dialog modal-xl modal-dialog-centered" id="gameModal">
    <div class="container">
        <div class="modal-content " id="game">
            <div class="modal-juego d-flex w-100 align-items-center mb-3 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ai-cross"></i></button>
            </div>
            <div class="descripcion d-flex w-100">
                <div class="w-50 ps-5">
                    <h2><b>Nivel 1</b></h2>
                    <p class="fs-5 my-4">...</p>
                    <p><b>Recompensa: </b> <span class="px-2">300 </span> <img src="./juego-memory/img/UTP-COIN.png"></p>
                </div>
                <div class="game-container w-50">
                    <div class="grid_rompecabezas" id="grid"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Coins -->
<div class="modal fade" id="coins"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <?php include("/xampp/htdocs/HACKATON_ONBOARDING/componentes/coins.php"); ?>
</div>