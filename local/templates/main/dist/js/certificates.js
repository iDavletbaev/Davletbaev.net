document.addEventListener('DOMContentLoaded', function() {
    // Фильтрация сертификатов
    const filterButtons = document.querySelectorAll('.filter-btn');
    const certificateCards = document.querySelectorAll('.certificate-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Удаляем активный класс у всех кнопок
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Добавляем активный класс текущей кнопке
            this.classList.add('active');

            const filterValue = this.dataset.filter;

            certificateCards.forEach(card => {
                if (filterValue === 'all') {
                    card.style.display = 'block';
                } else {
                    if (card.dataset.category === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });

    // Модальное окно для просмотра сертификатов
    const modal = document.getElementById('certificate-modal');
    const modalImg = document.getElementById('modal-cert-image');
    const modalTitle = document.getElementById('modal-cert-title');
    const modalDate = document.querySelector('#modal-cert-date');
    const modalIssuer = document.querySelector('#modal-cert-issuer');
    const downloadBtn = document.getElementById('download-cert');
    const closeModal = document.querySelector('.close-modal');

    // Обработчики для кнопок просмотра
    document.querySelectorAll('.view-btn').forEach(button => {
        button.addEventListener('click', function() {
            const certCard = this.closest('.certificate-card');
            const certImg = certCard.querySelector('img').src;
            const certTitle = certCard.querySelector('h3').textContent;
            const certMeta = certCard.querySelectorAll('.certificate-meta span');

            modalImg.src = certImg;
            modalImg.alt = certTitle;
            modalTitle.textContent = certTitle;
            modalDate.textContent = certMeta[0].textContent;
            modalIssuer.textContent = certMeta[1].textContent;

            // Устанавливаем ссылку для скачивания
            const imgPath = certImg.split('/').pop();
            downloadBtn.href = certImg;
            downloadBtn.download = `certificate_${certTitle.replace(/\s+/g, '_')}.jpg`;

            // Показываем модальное окно
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    });

    // Закрытие модального окна
    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
        document.body.style.overflow = '';
    });

    // Закрытие по клику вне окна
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });

    // Закрытие по клавише ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.style.display === 'block') {
            modal.style.display = 'none';
            document.body.style.overflow = '';
        }
    });

    // Инициализация фильтра (показываем все сертификаты при загрузке)
    filterButtons[0].click();
});
