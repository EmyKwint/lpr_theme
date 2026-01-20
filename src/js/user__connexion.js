const userBtn = document.querySelector('#user__btn');
const userConnect = document.querySelector('#user__connect');
let   isBtnActive = false;

userBtn.addEventListener('click', () => {
    if (!isBtnActive) {
        userConnect.style.display = 'flex';
        isBtnActive = true;
    } else {
        userConnect.style.display = 'none';
        isBtnActive = false;
    }});