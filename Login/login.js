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