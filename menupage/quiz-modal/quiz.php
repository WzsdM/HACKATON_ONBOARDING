<script src="../menupage/quiz-modal/quizz.js"></script>
<link rel="stylesheet" href="../menupage/quiz-modal/style.css">

<div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="container">
        <div class="modal-content" id="game">
            <div class="modal-juego d-flex w-100 align-items-center mb-3 justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ai-cross"></i></button>
            </div>
            <div class="descripcion d-flex w-100">
                <div class="w-50 ps-5">
                    <h2 class="nivelito"><b>Nivel 3</b></h2>
                    <p class="fs-5 my-4">Juega y descubre cuáles son los beneficios que UTP tiene para tí</p>
                    <p><b>Recompensa: </b> <span class="px-2">300 </span> <img src="./juego-memory/img/UTP-COIN.png"> </p>
                </div>
                <div class="w-50">
                    <h1 class="titulo">Quizz</h1>
                    <div class="game-container " id="quiz-container">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="coins" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <?php include("/xampp/htdocs/HACKATON_ONBOARDING/componentes/coins.php"); ?>
</div>