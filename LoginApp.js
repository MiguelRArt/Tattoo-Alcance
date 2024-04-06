const loginBTN = document.getElementById('LoginBTN');
const registerBTN = document.getElementById('RegisterBTN');

const login = document.querySelector('.Login');
const register = document.querySelector('.Register');

const closeLogin = document.querySelector('.closeLogin');
const closeRegister = document.querySelector('.closeRegister');

loginBTN.addEventListener('click', () => {
    login.classList.toggle('hidden');
});

closeLogin.addEventListener('click', () => {
    login.classList.toggle('hidden');
});


registerBTN.addEventListener('click', () => {
    register.classList.toggle('hidden');    
});

closeRegister.addEventListener('click', () => {
    register.classList.toggle('hidden');
});
