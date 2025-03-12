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
// document.addEventListener("DOMContentLoaded", function () {
//     const registerForm = document.getElementById('registerForm');
//
//     registerForm.addEventListener('submit', (e) => {
//         e.preventDefault();
//
//         document.querySelectorAll(".error-message").forEach(el => el.innerHTML = "")
//         document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
//
//         const formData = new FormData(registerForm);
//
//         fetch('/register', {
//             method: 'POST',
//             body: formData,
//             headers: {
//                 "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
//             }
//         })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     modalRegist.classList.remove('active');
//                     modalAuth.classList.toggle('active');
//                 } else {
//                     for (let field in data.errors) {
//                         let errorDiv = document.getElementById("error-" + field);
//                         let inputField = document.getElementById(field);
//                         if (errorDiv) {
//                             errorDiv.innerHTML = data.errors[field][0]; // Показываем первую ошибку
//                         }
//                         if (inputField) {
//                             inputField.classList.add("input-error"); // Добавляем класс ошибки
//                         }
//                     }
//                 }
//             })
//     });
// });
//
// document.addEventListener("DOMContentLoaded", function () {
//     const loginForm = document.getElementById('loginForm');
//
//     loginForm.addEventListener('submit', (e) => {
//         e.preventDefault();
//
//         document.querySelectorAll(".error-message").forEach(el => el.innerHTML = "")
//         document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
//
//         const formData = new FormData(loginForm);
//
//         fetch('/login', {
//             method: 'POST',
//             body: formData,
//             headers: {
//                 "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
//             }
//         })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     window.location.href = '/profile';
//                 } else {
//                     for (let field in data.errors) {
//                         let errorDiv = document.getElementById("error-" + field);
//                         let inputField = document.getElementById(field);
//                         if (errorDiv) {
//                             errorDiv.innerHTML = data.errors[field][0]; // Показываем первую ошибку
//                         }
//                         if (inputField) {
//                             inputField.classList.add("input-error"); // Добавляем класс ошибки
//                         }
//                     }
//                 }
//             })
//     });
// });


document.addEventListener("DOMContentLoaded", function () {
    // Получаем все формы с классом .modal__form
    const forms = document.querySelectorAll('.modal__form');

    forms.forEach((form) => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Очищаем все сообщения об ошибках и классы ошибок в текущей форме
            form.querySelectorAll(".error-message").forEach(el => el.innerHTML = "");
            form.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));

            const formData = new FormData(form);

            fetch(form.action, { // Отправляем запрос на адрес формы (login или register)
                method: 'POST',
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        if (form.id === "registerForm") {
                            modalRegist.classList.remove('active');
                            modalAuth.classList.toggle('active');
                        } else {
                            window.location.href = "/profile";
                        }
                    } else {
                        for (let field in data.errors) {
                            // Формируем уникальные id для ошибок и полей
                            let errorDiv = form.querySelector(`#error-${form.id}_${field}`);
                            let inputField = form.querySelector(`#${form.id}_${field}`);
                            console.log(`#error-${form.id}_${field}`);


                            if (errorDiv) {
                                errorDiv.innerHTML = data.errors[field][0]; // Показываем первую ошибку
                            }

                            if (inputField) {
                                inputField.classList.add("input-error"); // Добавляем класс ошибки
                            }
                        }
                    }
                })
                .catch(err => console.error('Request failed', err));
        });
    });
});
