document.addEventListener('DOMContentLoaded', function () {
    // Фильтрация кейсов (остается как было)
    const categoryButtons = document.querySelectorAll('.category-btn');
    const caseCards = document.querySelectorAll('.case-card');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filterCategory = this.dataset.category;

            caseCards.forEach(card => {
                if (filterCategory === 'all' || card.dataset.category === filterCategory) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    document.getElementById('category_filter_' + button.dataset.category).classList.add('active')
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Модальное окно кейса
    const modal = document.getElementById('case-modal');
    const modalTitle = document.getElementById('modal-case-title');
    //const modalDate = document.getElementById('modal-case-date');
    const modalDuration = document.getElementById('modal-case-duration');
    const modalCategory = document.getElementById('modal-case-category');
    const modalDescription = document.getElementById('modal-case-description');
    const modalTech = document.getElementById('modal-case-tech');
    const modalResults = document.getElementById('modal-case-results');
    const modalVisitBtn = document.getElementById('case-visit-btn');
    const modalImage = document.getElementById('modal-case-image');
    const thumbnailsContainer = document.getElementById('case-thumbnails');
    const closeModal = document.querySelector('.close-modal');

    // Функция закрытия модального окна
    function closeModalBtn() {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    }

    // Обработчики для кнопок "Подробнее"
    document.querySelectorAll('.case-read-more').forEach(button => {
        button.addEventListener('click', function () {
            const caseId = this.closest('.case-card').dataset.case;
            loadCaseData(caseId);
        });
    });

    // Функция загрузки данных кейса через AJAX
    function loadCaseData(caseId) {
        // Показываем прелоадер
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        modal.querySelector('.modal-content').innerHTML = `
            <div class="loader">
                <div class="loader-spinner"></div>
                <p>Загрузка данных кейса...</p>
            </div>
        `;

        // AJAX-запрос
        fetch(`/local/templates/main/ajax/case_ajax.php?id=${caseId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Заполняем модальное окно полученными данными
                renderCaseModal(data);
            })
            .catch(error => {
                console.error('Error loading case data:', error);
                modal.querySelector('.modal-content').innerHTML = `
                    <span class="close-modal">&times;</span>
                    <div class="error-message">
                        <i class="fas fa-exclamation-triangle"></i>
                        <p>Произошла ошибка при загрузке данных. Пожалуйста, попробуйте позже.</p>
                    </div>
                `;
                document.querySelector('.close-modal').addEventListener('click', closeModalBtn);
            });
    }

    // Функция отрисовки модального окна с данными
    function renderCaseModal(data) {
        modal.querySelector('.modal-content').innerHTML = `
            <span class="close-modal">&times;</span>
            <div class="modal-case-content">
                <div class="case-slider">
                    <img src="${data.images[0].SRC}" alt="${data.title}" class="active-slide" id="modal-case-image">
                    <div class="case-thumbnails" id="case-thumbnails"></div>
                </div>
                <div class="case-details">
                    <h2 id="modal-case-title">${data.title}</h2>
                    <div class="case-meta-modal">
                        ${data.duration}
                        <span id="modal-case-category">${data.category}</span>
                    </div>
                    <div class="case-description" id="modal-case-description">${data.description}</div>

                    <div class="case-results">
                        <h3>Результаты:</h3>
                        <span id="modal-case-results"></span>
                    </div>

                    <div class="case-tech">
                        <h3>Использованные технологии:</h3>
                        <div class="tech-tags" id="modal-case-tech"></div>
                    </div>

                    <span id="case-link">
                    </span>
                </div>
            </div>
        `;

        // Ссылка
        const linkContainer = document.getElementById('case-link');
        if (data.url.link) {
            linkContainer.innerHTML = `<a href="${data.url.link}" class="btn" id="case-visit-btn" target="_blank">
            ${data.url.description}
            </a>`
        }

        // Заполняем технологии
        const techContainer = document.getElementById('modal-case-tech');

        if (data.tech) {
            data.tech.forEach(tech => {
                const tag = document.createElement('span');
                tag.textContent = tech.UF_NAME;
                techContainer.appendChild(tag);
            });
        } else {
            document.querySelector('.case-tech').style.display = 'none';
        }

        // Заполняем результаты
        const resultsContainer = document.getElementById('modal-case-results');
        if (data.results) {
            resultsContainer.innerHTML = data.results
        } else {
            document.querySelector('.case-results').style.display = 'none';
        }

        // Заполняем галерею изображений
        const thumbnailsContainer = document.getElementById('case-thumbnails');

        if (data.images) {

            data.images.forEach((img, index) => {
                const thumb = document.createElement('img');
                thumb.src = img.SRC;
                thumb.alt = img.DESCRIPTION;
                if (index === 0) thumb.classList.add('active');
                thumb.addEventListener('click', () => {
                    document.getElementById('modal-case-image').src = img.SRC;
                    document.querySelectorAll('.case-thumbnails img').forEach(t => t.classList.remove('active'));
                    thumb.classList.add('active');
                });
                thumbnailsContainer.appendChild(thumb);
            });
        }

        // Добавляем обработчик закрытия
        document.querySelector('.close-modal').addEventListener('click', closeModalBtn);
    }

    // Закрытие по клику вне окна
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModalBtn();
        }
    });

    // Закрытие по ESC
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.style.display === 'block') {
            closeModalBtn();
        }
    });

    // Инициализация фильтра (показываем все кейсы)
    categoryButtons[0].click();
});
