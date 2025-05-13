$(document).ready(function() {
    // Анимация при прокручивании страницы
/*    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#about').fadeIn();
        } else {
            $('#about').fadeOut();
        }
    });

    // Отправка формы обратной связи
    $('#contact form').submit(function(e) {
        e.preventDefault();
        var name = $('#contact form input[name="name"]').val();
        var email = $('#contact form input[name="email"]').val();
        var message = $('#contact form textarea').val();
        // Отправка формы на сервер
        $.ajax({
            type: 'POST',
            url: 'send.php',
            data: {name: name, email: email, message: message},
            success: function(data) {
                alert('Форма отправлена!');
            }
        });
    });*/

    // Плавная прокрутка с дополнительными эффектами
    function smoothScroll(target, duration) {
        const targetElement = document.querySelector(target);
        if (!targetElement) return;

        const headerHeight = document.querySelector('.header').offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = ease(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        // Функция плавности (ease-in-out)
        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }

// Применяем ко всем якорным ссылкам
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = this.getAttribute('href');
            if (target !== '#') {
                smoothScroll(target, 800); // 800ms - продолжительность анимации
            }
        });
    });
});