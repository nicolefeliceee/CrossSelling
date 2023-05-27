    // 'use strict';

const buttons = document.querySelectorAll('.option-display-box button');
const timebuttons = document.querySelectorAll('.time-option-box button');
const monthchoose = document.querySelector('#month');
const yearchoose = document.querySelector('#year');
const Allyearchoose = document.querySelector('#allyear');

const trymonth = document.querySelectorAll('.option-month');
const tryyear = document.querySelectorAll('.option-year');

const idallyear = document.getElementById('#allyear-button');

buttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active').classList.remove('active');
        option.classList.add('active');
    })
})

// Get the container element
var btnContainer2 = document.getElementById("time-option-box");

// Get all buttons with class="btn" inside the container
var btns2 = btnContainer2.getElementsByClassName("time-allyear");

// Loop through the buttons and add the active class to the current/clicked button
var test = 'awal';
var boom = 'akhir';
for (var i = 0; i < btns2.length; i++) {
    btns2[i].addEventListener("click", function() {
    var current2 = document.getElementsByClassName('time-month');
    var current3 = document.getElementsByClassName('time-year');
    if((current2[0].classList.contains('active-allyear') || current3[0].classList.contains('active-allyear') ) && test == 'dua' && boom != 'sat'){
        if(this.className == 'time-allyear'){
            var current1 = document.getElementsByClassName("time-month");
            current1[0].className = current1[0].className.replace(" active-allyear", "");
            var current4 = document.getElementsByClassName("time-year");
            current4[0].className = current4[0].className.replace(" active-allyear", "");
            this.className += " active-allyear";
            test = 'awal';
        }else{
            this.className += " active-allyear";
            test = 'satu';
        }
        // INI Buat 2-2 nya bisa nyala bareng
    } else if(test == 'satu' ){
        var current1 = document.getElementsByClassName("time-month");
        current1[0].className = current1[0].className.replace(" active-allyear", "");
        var current4 = document.getElementsByClassName("time-year");
        current4[0].className = current4[0].className.replace(" active-allyear", "");
        // alert(test+'jnck2');
        this.className += " active-allyear";
        test = 'awal';
        // INI KONDISI KLO 2-2 nya Nyala dan ngapus 2-2nya
    } else if(boom == 'sat' && test == 'dua'){
        var current1 = document.getElementsByClassName("time-month");
        current1[0].className = current1[0].className.replace(" active-allyear", "");
        var current4 = document.getElementsByClassName("time-year");
        current4[0].className = current4[0].className.replace(" active-allyear", "");
        var current5 = document.getElementsByClassName("time-allyear");
        current5[0].className = current5[0].className.replace(" active-allyear", "");
        // alert(test+'jnck4');
        this.className += " active-allyear";
        test = 'dua';
    }
    else{
        if(test == 'awal'){
            var current1 = document.getElementsByClassName("active-allyear");
            current1[0].className = current1[0].className.replace(" active-allyear", "");
            // alert(boom+'jnck3');
            this.className += " active-allyear";
            test = 'dua';
            if(current2[0].className == 'active-allyear' || current3[0].className == 'active-allyear' ){
                test = 'dua';
                boom = 'sat';

            }
        }
        // INI Buat Settingan Default
    }
  });
}
