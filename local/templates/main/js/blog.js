document.addEventListener('DOMContentLoaded', function() {
    // Элементы фильтрации
    const categoryButtons = document.querySelectorAll('.category-btn');
    const blogCards = document.querySelectorAll('.blog-card');
    
    // Обработчики для кнопок категорий
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Удаляем активный класс у всех кнопок
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            // Добавляем активный класс текущей кнопке
            this.classList.add('active');
            
            const filterCategory = this.dataset.category;
            
            // Фильтрация статей
            blogCards.forEach(card => {
                if (filterCategory === 'all' || card.dataset.category === filterCategory) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Инициализация - показываем все статьи при загрузке
    categoryButtons[0].click();
});