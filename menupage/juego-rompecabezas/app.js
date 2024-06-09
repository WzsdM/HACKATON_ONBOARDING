// script.js
document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('grid');
    const congratulationsDiv = document.getElementById('congratulations');

    // Array con las posiciones correctas
    const correctOrder = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    let gameArray = shuffle([...correctOrder]);

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
        grid.innerHTML = '';
        gameArray.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('card_rompecabezas');
            card.draggable = true;
            card.dataset.item = item;
            
            const img = document.createElement('img');
            img.src = `/HACKATON_ONBOARDING/menupage/juego-rompecabezas/img/img${item}.jpg`; // Ruta de la imagen
            
            card.appendChild(img);
            grid.appendChild(card);
        });

        document.querySelectorAll('.card_rompecabezas').forEach(card => {
            card.addEventListener('dragstart', handleDragStart);
            card.addEventListener('dragover', handleDragOver);
            card.addEventListener('drop', handleDrop);
            card.addEventListener('dragend', handleDragEnd);
        });
    }

    createBoard();

    let draggedCard = null;
    let draggedCardIndex = null;

    function handleDragStart(e) {
        draggedCard = this;
        draggedCardIndex = Array.from(grid.children).indexOf(this);
        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
            e.preventDefault();
        }
        e.dataTransfer.dropEffect = 'move';
        return false;
    }

    function handleDrop(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }

        const targetCardIndex = Array.from(grid.children).indexOf(this);

        if (draggedCardIndex !== targetCardIndex) {
            gameArray[draggedCardIndex] = gameArray[targetCardIndex];
            gameArray[targetCardIndex] = parseInt(draggedCard.dataset.item);
            createBoard();
            checkWin();
        }

        return false;
    }

    function handleDragEnd() {
        draggedCard = null;
        draggedCardIndex = null;
    }

    function checkWin() {
        if (gameArray.join('') === correctOrder.join('')) {
            congratulationsDiv.style.display = 'block';
        } else {
            congratulationsDiv.style.display = 'none';
        }
    }
});
