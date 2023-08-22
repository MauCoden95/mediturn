const btnClose = document.querySelector('.btn_close');
const btnAdd = document.querySelector('.btn_add');
const formCreate = document.querySelector('#form_create');


if(btnClose){
    btnClose.addEventListener('click', () => {
        formCreate.style.top = '-100rem';
    });
}

if(btnAdd){
    btnAdd.addEventListener('click', () => {
        formCreate.style.top = '0';
    });
}
