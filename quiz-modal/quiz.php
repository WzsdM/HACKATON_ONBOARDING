

 <!-- Inside this JavaScript file I've inserted Questions and Options only -->

<link rel="stylesheet" href="/HACKATON_ONBOARDING/quiz-modal/style.css">

<div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content  w-auto" id="quiz">
               
            
 <!-- start Quiz button -->
 <div class="start_btn"><button>Iniciar Quiz</button></div>

<!-- Info Box -->
<div class="info_box">
    <div class="info-title"><span>Algunas reglas de este cuestionario 📝</span></div>
    <div class="info-list">
        <div class="info">1. Tendrás solo <span>15 segundos ⏱️</span> por cada pregunta.</div>
        <div class="info">2. Una vez que selecciones tu respuesta, no se puede deshacer ❌.</div>
        <div class="info">3. No puedes seleccionar ninguna opción una vez que el tiempo se agote ⏳.</div>
        <div class="info">4. No puedes salir del cuestionario mientras estás jugando 🚫.</div>
        <div class="info">5. Obtendrás puntos en función de tus respuestas correctas ✔️.</div>
    </div>
    <div class="buttons">
        <button class="quit">Salir🚪</button>
        <button class="restart">Continuar▶</button>
    </div>
</div>

<!-- Quiz Box -->
<div class="quiz_box">
    <header>
        <div class="title">Utp Quiz App</div>
        <div class="timer">
            <div class="time_left_txt">Tiempo restante ⏱️</div>
            <div class="timer_sec">15</div>
        </div>
        <div class="time_line"></div>
    </header>
    <section>
        <div class="que_text">
            <!-- Here I've inserted question from JavaScript -->
        </div>
        <div class="option_list">
            <!-- Here I've inserted options from JavaScript -->
        </div>
    </section>

    <!-- footer of Quiz Box -->
    <footer>
        <div class="total_que">
            <!-- Here I've inserted Question Count Number from JavaScript -->
        </div>
        <button class="next_btn">Siguiente</button>
    </footer>
</div>

<!-- Result Box -->
<div class="result_box">
    <div class="icon">
        <i class="fas fa-crown"></i>
    </div>
    <div class="complete_text">¡Has completado el Quiz!</div>
    <div class="score_text">
        <!-- Here I've inserted Score Result from JavaScript -->
    </div>
    <div class="buttons">
        <button class="restart">Repetir Quiz</button>
        <button class="quit">Salir</button>
    </div>
</div>


<!-- Inside this JavaScript file I've coded all Quiz Codes -->
<script src="/HACKATON_ONBOARDING/quiz-modal/js/script.js"></script>
<script src="/HACKATON_ONBOARDING/quiz-modal/js/questions.js"></script>



        </div>
    </div>
