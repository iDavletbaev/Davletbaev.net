document.addEventListener('DOMContentLoaded', function() {



// Закрытие по клику вне окна
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal')) {
            const openModals = document.querySelectorAll('.modal[style="display: block;"]');
            openModals.forEach(modal => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            });
        }
    });

// Закрытие по ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const openModals = document.querySelectorAll('.modal[style="display: block;"]');
            openModals.forEach(modal => {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            });
        }
    });
});
