
const navbarcontainer = document.querySelectorAll('.kiri-container button');

navbarcontainer.forEach(option => {
    option.addEventListener('click', () => {
        // alert('test');
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
    } )
})

