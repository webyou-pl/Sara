//** Moduły**/
// import scrollnav from './modules/scroll-nav';


//** Skrypty ogólne **/

// zmniejszanie nav
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