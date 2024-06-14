// quizz.js
document.addEventListener('DOMContentLoaded', () => {
    const quizContainer = document.getElementById('quiz-container');
    const quizForm = document.createElement('form');
    quizForm.id = 'quiz-form';
    const coinsModalElement = document.getElementById('coins');
    const coinsModal = new bootstrap.Modal(coinsModalElement);

    const gameModalElement = document.getElementById('game');
    const gameModal = new bootstrap.Modal(gameModalElement);

    const questions = [
        {
            question: '¿Cuál es la capital de Francia?',
            options: ['París', 'Madrid', 'Londres', 'Berlín'],
            correctAnswer: 'París'
        },
        {
            question: '¿Cuántos planetas hay en nuestro sistema solar?',
            type: 'number',
            correctAnswer: '8'
        },
        {
            question: '¿Cuál es el río más largo del mundo?',
            options: ['Amazonas', 'Nilo', 'Yangtsé', 'Misisipi'],
            correctAnswer: 'Amazonas'
        }
    ];

    let currentQuestion = 0;
    let correctAnswers = 0;

    showQuestion(currentQuestion); // Mostrar la primera pregunta al cargar la página

    quizForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const currentAnswer = getCurrentAnswer();
        const correctAnswer = questions[currentQuestion].correctAnswer;

        if (currentAnswer === correctAnswer) {
            correctAnswers++;
            displayMessage('Respuesta correcta.', 'success');
        } else {
            displayMessage('Respuesta incorrecta.', 'error');
        }

        currentQuestion++;

        if (currentQuestion < questions.length) {
            showQuestion(currentQuestion); // Mostrar la siguiente pregunta
        } else {
            displayResults();
        }
    });

    function showQuestion(index) {
        quizContainer.innerHTML = ''; // Limpiar el contenedor del quiz

        const questionData = questions[index];
        const questionElement = document.createElement('div');
        questionElement.classList.add('question');

        if (questionData.type === 'number') {
            questionElement.innerHTML = `
                <label for="q${index + 1}">${questionData.question}</label><br>
                <input type="number" id="q${index + 1}" name="q${index + 1}" min="0">
            `;
        } else {
            const options = questionData.options.map(option => `
                <input type="radio" id="q${index + 1}-${option}" name="q${index + 1}" value="${option}">
                <label for="q${index + 1}-${option}">${option}</label><br>
            `).join('');

            questionElement.innerHTML = `
                <label>${questionData.question}</label><br>
                ${options}
            `;
        }

        const submitButton = document.createElement('button');
        submitButton.type = 'submit';
        submitButton.textContent = 'Enviar respuesta';
        quizForm.innerHTML = ''; // Limpiar formulario antes de agregar nueva pregunta
        quizForm.appendChild(questionElement);
        quizForm.appendChild(submitButton);
        quizContainer.appendChild(quizForm);
    }

    function getCurrentAnswer() {
        if (questions[currentQuestion].type === 'number') {
            return document.getElementById(`q${currentQuestion + 1}`).value.trim();
        } else {
            const selectedOption = quizForm.querySelector(`input[name=q${currentQuestion + 1}]:checked`);
            return selectedOption ? selectedOption.value : '';
        }
    }

    function displayMessage(message, type) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        messageElement.classList.add(type);
        messageElement.textContent = message;
        quizContainer.appendChild(messageElement);
    }

    function displayResults() {
        const resultMessage = document.createElement('div');
        resultMessage.classList.add('message');
        if (correctAnswers === questions.length) {
            quizForm.style.display = 'none';
            // Aquí puedes añadir el código para mostrar alguna recompensa o mensaje adicional
        } else {
            resultMessage.textContent = `Has completado el quiz. Tuviste ${correctAnswers} respuestas correctas de ${questions.length}.`;
            const retryButton = document.createElement('button');
            retryButton.textContent = 'Intentar de nuevo';
            retryButton.addEventListener('click', () => {
                currentQuestion = 0;
                correctAnswers = 0;
                quizContainer.innerHTML = '';
                showQuestion(currentQuestion);
                resultMessage.textContent = '';
            });
            resultMessage.appendChild(retryButton);
        }
        quizContainer.appendChild(resultMessage);

        quizForm.style.display = 'none'; // Ocultar el formulario al completar el quiz
    }
});
