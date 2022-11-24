'use strict'

const switcher = document.querySelector('.btn');

switcher.addEventListener('click', function() {
    document.body.classList.toggle('dark-theme')

    var className = document.body.className;
    if(className == "light-theme") {
        this.textContent = "Dark";
    }
    else {
        this.textContent = "Light";
    }

    console.log('current class name: ' + className);

});

window.onscroll = function(){
    if(document.documentElement.scrollTop > 100){
    document.querySelector(´.go-top-container´)
    .classList.add(´show´);
    }else{
        document.querySelector(´.go-top-container´)
        .classList.remove(´show´);    
    }
}