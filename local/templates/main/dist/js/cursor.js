document.addEventListener('DOMContentLoaded', function() {
  const cursor = document.querySelector('.cursor');
  const cursorFollower = document.querySelector('.cursor-follower');

  // Основное движение курсора
  document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';

    // Задержка для follower
    setTimeout(() => {
      cursorFollower.style.left = e.clientX + 'px';
      cursorFollower.style.top = e.clientY + 'px';
    }, 100);
  });

  // Эффекты при наведении
  const hoverElements = document.querySelectorAll('a, button, [data-cursor-hover]');

  hoverElements.forEach(el => {
    el.addEventListener('mouseenter', () => {
      cursor.classList.add('cursor-hover');
      cursorFollower.classList.add('cursor-follower-hover');
    });

    el.addEventListener('mouseleave', () => {
      cursor.classList.remove('cursor-hover');
      cursorFollower.classList.remove('cursor-follower-hover');
    });
  });

  // Клик-эффект
  document.addEventListener('mousedown', () => {
    cursor.style.transform = 'translate(-50%, -50%) scale(0.8)';
  });

  document.addEventListener('mouseup', () => {
    cursor.style.transform = 'translate(-50%, -50%) scale(1)';
  });

    // Определение элементов, где нужно скрыть кастомный курсор
    const textInputs = document.querySelectorAll(
        'input[type="text"], input[type="email"], input[type="password"], textarea, [contenteditable="true"], select'
    );

    // Обработка текстовых полей
    textInputs.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.style.display = 'none';
            cursorFollower.style.display = 'none';
            document.documentElement.style.cursor = 'text';
        });

        el.addEventListener('mouseleave', () => {
            cursor.style.display = 'block';
            cursorFollower.style.display = 'block';
            document.documentElement.style.cursor = 'none';
        });
    });

    // Обработка кнопок
    const buttons = document.querySelectorAll('button, input[type="button"], input[type="submit"], input[type="reset"]');

    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            cursor.style.display = 'block';
            cursorFollower.style.display = 'block';
            document.documentElement.style.cursor = 'none';
        });
    });
});
