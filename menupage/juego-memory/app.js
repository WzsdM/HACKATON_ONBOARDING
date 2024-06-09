document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM fully loaded and parsed");

    const grid = document.querySelector('.grid');
    const scoreDisplay = document.getElementById('score');
    let score = 0;
    const totalPairs = 8; // Número total de pares

    // Modal de Bootstrap
    const coinsModalElement = document.getElementById('coins');
    const coinsModal = new bootstrap.Modal(coinsModalElement);
    
    const gameModalElement = document.getElementById('game');
    const gameModal = new bootstrap.Modal(gameModalElement);

    // Array con las rutas de las imágenes
    const elements = [
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/1.png', 
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/2.png', 
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/3.png',
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/4.png',
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/5.png',
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/6.png',
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/7.png',
        '/HACKATON_ONBOARDING/menupage/juego-memory/img/8.png'
    ];
    let gameArray = [...elements, ...elements];

    // Función para barajar las cartas
    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    // Crear el tablero de juego
    function createBoard() {
        shuffle(gameArray);
        gameArray.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('card');
            card.dataset.item = item;

            const cardInner = document.createElement('div');
            cardInner.classList.add('card-inner');

            const cardFront = document.createElement('div');
            cardFront.classList.add('card-front');

            const cardBack = document.createElement('div');
            cardBack.classList.add('card-back');
            const img = document.createElement('img');
            img.src = item;
            cardBack.appendChild(img);

            cardInner.appendChild(cardFront);
            cardInner.appendChild(cardBack);
            card.appendChild(cardInner);

            grid.appendChild(card);
        });
        console.log("Board created with cards:", document.querySelectorAll('.card'));
    }

    createBoard();

    let firstCard = null;
    let secondCard = null;
    let lockBoard = false;

    // Manejar el click en una carta
    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;

        this.classList.add('flipped');
        console.log("Card flipped:", this);

        if (!firstCard) {
            firstCard = this;
            return;
        }

        secondCard = this;
        checkForMatch();
    }

    // Comprobar si las cartas coinciden
    function checkForMatch() {
        if (firstCard.dataset.item === secondCard.dataset.item) {
            disableCards();
            updateScore();
            checkWin(); // Verificar si el juego ha terminado
        } else {
            unflipCards();
        }
    }

    // Deshabilitar cartas coincidentes
    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        console.log("Cards matched:", firstCard, secondCard);

        resetBoard();
    }

    // Voltear cartas no coincidentes
    function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('flipped');
            secondCard.classList.remove('flipped');
            resetBoard();
        }, 500);
    }

    // Resetear el tablero
    function resetBoard() {
        [firstCard, secondCard, lockBoard] = [null, null, false];
    }

    // Actualizar la puntuación
    function updateScore() {
        score++;
        scoreDisplay.innerText = ``;
        console.log("Score updated:", score);
    }

    // Verificar si el juego ha terminado
    function checkWin() {
        if (score === totalPairs) {
            console.log("Game completed!");
            gameModal.hide();
            coinsModal.show();
        }
    }

    // Añadir event listener a las cartas
    document.querySelectorAll('.card').forEach(card => card.addEventListener('click', flipCard));
    console.log("Event listeners added to cards");
});