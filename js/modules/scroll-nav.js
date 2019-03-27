'use strict'
export default function (staticHeaderHeight = 0) {
    document.addEventListener('scroll', function(){
        let yOffset = window.pageYOffset;
        let menu = document.getElementById('menu');
        let heightMenu = menu.offsetHeight;

        if(yOffset => heightMenu){
            menu.classList.add('scroll-nav');
        }
        
        if(yOffset < heightMenu){
            menu.classList.remove('scroll-nav');
        }
    } );
}