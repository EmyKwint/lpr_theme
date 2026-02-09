const userBtn = document.querySelector('#user__btn');
const userConnect = document.querySelector('#user__connect');
let isBtnActive = false;

if (userBtn) {
    userBtn.addEventListener('click', () => {
        if (!userConnect) {
            console.warn('Élément #user__connect introuvable.');
            return;
        }
        isBtnActive = !isBtnActive;
        userConnect.style.display = isBtnActive ? 'flex' : 'none';
    });
} else {
    console.warn('Élément #user__btn introuvable.');
}