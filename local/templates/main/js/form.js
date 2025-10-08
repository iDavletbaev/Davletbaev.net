document.addEventListener('DOMContentLoaded', function() {
    const feedbackForm = document.getElementById('feedback-form');
    if (feedbackForm) {
        feedbackForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            console.debug('formData', formData)

            fetch('/local/templates/main/ajax/contact_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Сообщение успешно отправлено!');
                    feedbackForm.reset();
                } else {
                    alert(data.message || 'Произошла ошибка при отправке формы');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при отправке формы');
            });
        });
    }
});
