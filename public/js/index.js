const menu = document.querySelector('.menu');
const menuList = document.querySelector('.nav-list');
const mainContent = document.querySelector('.main-content');
const deleteButton = document.querySelector('.delete-button');
const popUp = document.querySelector('.popup');
const choiceYes = document.querySelector('.yes');
const choiceCancel = document.querySelector('.cancel');
const choiceBgModal = document.querySelector('.bg-modal');

const like = document.querySelector('.like');

Drawer = () => {
    menu.addEventListener('click',(event) => {
        event.stopPropagation();
        menuList.classList.toggle('active');
    });

    mainContent.addEventListener('click', (event) => {
        event.stopPropagation();
        menuList.classList.remove('active');
    });
}
Like = () => {
    like.addEventListener('click', (event) => {
        event.preventDefault();
        if(like.innerHTML = 'Like') {
            like.innerHTML = 'Dislike';
        } else {
            like.innerHTML = 'Like';
        };
    });
}

Drawer();