const feedbackForm = document.getElementById('feedbackForm');

feedbackForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const data = new FormData(feedbackForm);

    const message = await sendData(data);

    showAlertMessage(message);
});

async function sendData(data) {
    const response = await fetch('feedbackForm.php', {
        method: 'POST',
        'Content-Type': 'multipart/form-data',
        body: data,
    });

    if (response.ok) {
        return response.json();
    } else {
        return  {'danger': 'Запрос не был выполнен'};
    }
}

function showAlertMessage(message) {
    const alertMessage = document.querySelector('.alert');
    alertMessage.classList.add(`alert-${message.status}`, 'active');
    alertMessage.innerHTML = message.text;
    setTimeout(()=> {
        alertMessage.classList.remove('active', `alert-${message.status}`);
    }, 2000);
}
