// profile dropdown menu

const pro_btn = document.querySelector('.users_page .profile'),
    toggle_menu = document.querySelector('.prof_drop_menu');


pro_btn.onclick = () => {
    toggle_menu.classList.toggle('active');
}


// chat search option 

const search_inp = document.querySelector('.sidebar_wrapper .search input'),
    search_btn = document.querySelector('.sidebar_wrapper .search button');


search_btn.onclick = () => {
    search_inp.classList.toggle('active');
    search_inp.focus();
    search_btn.classList.toggle('active');
}