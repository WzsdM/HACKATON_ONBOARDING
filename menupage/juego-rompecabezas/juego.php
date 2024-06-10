<script src="/HACKATON_ONBOARDING/menupage/juego-rompecabezas/app.js"></script>
<link rel="stylesheet" href="/HACKATON_ONBOARDING/menupage/juego-rompecabezas/styles.css">
<div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="container">
        <div class="modal-content  w-auto" id="game">
            <div class="modal-juego d-flex w-100 align-items-center mb-3 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ai-cross"></i></button>
            </div>
            <div class="descripcion d-flex w-100">
                <div class="w-50 ps-5 tittle">
                    <h2><b class="nivelito">Nivel 1</b></h2>
                    <p class="fs-5 my-4 cuerpo">Juega y descubre cuáles son los beneficios que UTP tiene para tí</p>
                    <p><b class="recomp">Recompensa: </b> <span class="px-2">300 </span> <img src="./juego-memory/img/UTP-COIN.png"> </p>
                </div>
                <div class="game-container w-50">
                    <div class="grid_rompecabezas" id="grid"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" data-bs-toggle="modal" data-bs-target="#coins" id="congratulations">
    <div class="modal fade" id="coins" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <?php include("/xampp/htdocs/HACKATON_ONBOARDING/MODALS/coins-modal/coins.php"); ?>
    </div>
</button>