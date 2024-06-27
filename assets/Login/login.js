document.addEventListener('DOMContentLoaded', (event) => {
    const title = document.querySelector('.title h1');
    const message = document.querySelector('.welcome-message');

    const titleText = 'Welcome !';
    const messageText = 'Chào mừng đến với Shop Thể Thao Quang Huy Sport 11';

    let titleIndex = 0;
    let messageIndex = 0;
    const messageWords = messageText.split(' ');

    setInterval(() => {
        if (titleIndex < titleText.length) {
            title.textContent += titleText[titleIndex];
            titleIndex++;
        } else if (messageIndex < messageWords.length) {
            message.textContent += messageWords[messageIndex] + ' ';
            messageIndex++;
        } else {
            titleIndex = 0;
            messageIndex = 0;
            title.textContent = '';
            message.textContent = '';
        }
    }, 400);  // Thay đổi tốc độ ở đây, hiện tại là 200ms
});
// Thêm vào file login.js
document.getElementById('showRegisterForm').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.form_login').style.display = 'none';
    document.querySelector('.form_register').style.display = 'block';
});

document.getElementById('showLoginForm').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.form_register').style.display = 'none';
    document.querySelector('.form_login').style.display = 'block';
});
