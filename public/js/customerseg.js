

const buttons = document.querySelectorAll('.option-display-box button');
const plotdisplay = document.querySelectorAll('.plot-display-box button');
const timebuttons = document.querySelectorAll('.time-option-box button');

buttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
    })
})

plotdisplay.forEach(option => {
    option.addEventListener('click', () => {
        // alert('test');
        document.querySelector('button.active-2').classList.remove('active-2');
        option.classList.add('active-2');
    })
})

timebuttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
    })
})
