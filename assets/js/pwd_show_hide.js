const pwd_filed = document.querySelector('.form .field input[type="password"]'),
    toggol_btn = document.querySelector('.form .field i');


toggol_btn.onclick = () => {
    if (pwd_filed.type == 'password') {
        pwd_filed.type = 'text';
        toggol_btn.classList.add('active');
    } else {
        pwd_filed.type = 'password';
        toggol_btn.classList.remove('active');
    }
}