"use strict";

const openModalAuth = document.getElementById('openModalAuth');
const closeModalAuth = document.getElementById('closeModalAuth');
const closeModalRegist = document.getElementById('closeModalRegist');
const modalAuth = document.getElementById('modalAuth');
const modalRegist = document.getElementById('modalRegist');
const goToLogin = document.getElementById('gotoLogin');
const goToRegist = document.getElementById('gotoRegist');

const body = document.body;
let scrollY;


openModalAuth.addEventListener('click', () => {
    modalAuth.classList.toggle('active');
    scrollY = window.scrollY;
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}px`;

});

closeModalAuth.addEventListener('click', () => {
    modalAuth.classList.remove('active');
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, scrollY);

});

modalAuth.addEventListener('click', (e) => {
    if (e.target === modalAuth) {
        modalAuth.classList.remove('active');
        body.style.position = '';
        body.style.top = '';
        window.scrollTo(0, scrollY);
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        modalAuth.classList.remove('active');
        body.style.position = '';
        body.style.top = '';
        window.scrollTo(0, scrollY);
    }
});

goToRegist.addEventListener('click', () => {
    modalAuth.classList.remove('active');
    modalRegist.classList.toggle('active');

});

goToLogin.addEventListener('click', () => {
    modalRegist.classList.remove('active');
    modalAuth.classList.toggle('active');

});

closeModalRegist.addEventListener('click', () => {
    modalRegist.classList.remove('active');
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, scrollY);

});

modalRegist.addEventListener('click', (e) => {
    if (e.target === modalRegist) {
        modalRegist.classList.remove('active');
        body.style.position = '';
        body.style.top = '';
        window.scrollTo(0, scrollY);
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        modalRegist.classList.remove('active');
        body.style.position = '';
        body.style.top = '';
        window.scrollTo(0, scrollY);
    }
});
