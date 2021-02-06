
//Slide-in sidebar on mobile screens

function openSlideMenu(){
    document.querySelector('#side-menu').style.width = '250px';
}

function closeSlideMenu(){
    document.querySelector('#side-menu').style.width = '0';
}

//FAQ section animation

let acc = document.querySelectorAll('.accordion');
let i;
let len = acc.length;

for(i = 0; i < len; i++){
    acc[i].addEventListener('click', function(){
        this.classList.toggle('active');
        let panel = this.nextElementSibling;
        if(panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + 'px'
        }
    })
}


//Sticky navbar on scroll

window.onscroll = function() {myFunction()};

let navbar = document.querySelector("#navbar");

let sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
