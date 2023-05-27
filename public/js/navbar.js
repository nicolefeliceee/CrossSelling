
const navbarcontainer = document.querySelectorAll('.kiri-container button');

navbarcontainer.forEach(option => {
    option.addEventListener('click', () => {
        // alert('test');
        document.querySelector('button.active3').classList.remove('active3');
        option.classList.add('active3');
    } )
})


// if(window.location.href == '/showchart'){
//     alert('tes');
// } else if(window.location.href == 'http://127.0.0.1:8000/customerseg'){
//     alert('tessss');
// } else if()

// let url = window.document.URL;

// document.getElementById
