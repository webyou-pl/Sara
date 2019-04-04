//** Moduły**/
// import scrollnav from './modules/scroll-nav';


///////** Skrypty ogólne **///////

// zmniejszanie nav
const menu = document.getElementById('menu');
const heightMenu = menu.offsetHeight;

document.addEventListener('scroll', function(){
    let yOffset = window.pageYOffset;

    if(yOffset >= heightMenu){
        menu.classList.add('scroll-nav');
    }
    
    if(yOffset < heightMenu){
        menu.classList.remove('scroll-nav');
    }
} );

// efekt liczb
if (document.querySelector('[data-counter]')) {
    setTimeout(() => {
        var counter = function (e, val, time) {
            var step = 200
            var intervalTime = time / step
            var i = 1
            var interval = setInterval(function () {
                e.innerHTML = parseInt(i / step * val)

                if (i === step) { clearInterval(interval) } else { i++ }
            }, intervalTime)
        }

        var data = document.querySelectorAll('[data-counter]')
        var element = data[0]
        var time = 2000
        var start = false
        if ((element.getBoundingClientRect().top / window.innerHeight) < 0.9 && !start) {
            for (var i = 0; i < data.length; i++) {
                start = true
                var o = data[i]
                counter(o, o.dataset.counter, time)
            }
        } else {
            window.addEventListener('scroll', function () {
                if ((element.getBoundingClientRect().top / window.innerHeight) < 0.9 && !start) {
                    start = true
                    for (var i = 0; i < data.length; i++) {
                        var o = data[i]
                        counter(o, o.dataset.counter, time)
                    }
                }
            })
        }
    }, 200)
}


// JS CENNIK



/* dzila
var plus = './images/cennik/plus.png';
var minus = "./images/cennik/minus.png";
var classElement = document.querySelector('.plusMinus');
var falTru = false;

classElement.addEventListener('click', function () {check()}
);

function check(){
    if(falTru==false){
    $('.plusMinus').attr('src', "./images/cennik/plus.png");
    falTru = true;}
    else {
        $('.plusMinus').attr('src', "./images/cennik/minus.png");
        falTru = false;}
};
*/

// LEPIEJ :)


var plus = './images/cennik/plus.png';
var minus = "./images/cennik/minus.png";

var falTru = false;


$("button").click(function ()  {
    if (falTru == false) {
        $('button img').attr('src', "./images/cennik/plus.png");
        falTru = true;
    }
    else {
        $('button img').attr('src', "./images/cennik/minus.png");
        falTru = false;
    }
});

