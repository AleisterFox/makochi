const nextActivity = document.getElementById('activity_next');
const prevActivity = document.getElementById('activity_prev');
const dance = document.querySelector('.baile');
const art = document.querySelector('.arte');



nextActivity.addEventListener('click', () => {
    dance.style.animation = 'fadeOut 1s linear';
    setTimeout(() => {
        dance.classList.add('hide');
        art.classList.remove('hide');
        art.style.animation = 'fadeIn 1s linear';
    }, 990);

});


prevActivity.addEventListener('click', () => {
    art.style.animation = 'fadeOut 1s linear';
    setTimeout(() => {
        art.classList.add('hide');
        dance.classList.remove('hide');
        dance.style.animation = 'fadeIn 1s linear';
    }, 990);

});
