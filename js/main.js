const form = document.querySelector('.form__content');
const successText = document.querySelector('.success-text');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    successText.classList.replace(".success-text", ".success-text--show");
    setTimeout(() => form.submit(), 2000);
})