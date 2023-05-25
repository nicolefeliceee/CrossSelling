    // 'use strict';

const buttons = document.querySelectorAll('.option-display-box button');
const timebuttons = document.querySelectorAll('.time-option-box button');
const monthchoose = document.querySelector('#month');
const yearchoose = document.querySelector('#year');

buttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
        // alert('active');
    })
})

timebuttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
        // alert('active');
    })
})

monthchoose.addEventListener('change', () => {
    // alert('msg');
    document.querySelector('button.active');
    monthchoose.classList.add('monthyear');
})

yearchoose.addEventListener('change', () => {
    document.querySelector('button.active');
    yearchoose.classList.add('monthyear');
})

