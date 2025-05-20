document.addEventListener('DOMContentLoaded', function() {
    // Создаем дополнительные частицы
    const createParticles = () => {
        const particlesContainer = document.body;
        const particlesCount = 15;
        
        for (let i = 0; i < particlesCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('error-particle');
            
            // Для страницы 500 добавляем специальный класс
            if (window.location.pathname.includes('500')) {
                particle.classList.add('error-particle-500');
            }
            
            // Случайные параметры
            const size = Math.random() * 15 + 5;
            const posX = Math.random() * window.innerWidth;
            const delay = Math.random() * 5;
            const duration = Math.random() * 20 + 10;
            
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${posX}px`;
            particle.style.bottom = `-${size}px`;
            particle.style.animationDelay = `${delay}s`;
            particle.style.animationDuration = `${duration}s`;
            particle.style.setProperty('--i', i+1);
            
            particlesContainer.appendChild(particle);
        }
    };
    
    // Инициализация
    createParticles();
    
    // Эффект при наведении на кнопки
    const buttons = document.querySelectorAll('.btn-error, .btn-error-outline');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.transform = 'translateY(-3px)';
            button.style.boxShadow = '0 10px 20px rgba(108, 99, 255, 0.3)';
        });
        
        button.addEventListener('mouseleave', () => {
            button.style.transform = '';
            button.style.boxShadow = '';
        });
    });
});