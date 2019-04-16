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


// Galleria


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

var imgs = document.querySelectorAll(".grid-image");
var modalImg = document.getElementById("img");
var captionText = document.getElementById("caption");



for (var i = 0; i < imgs.length; i++) {  //iteracja dla każdej kolejnej klasy (ponieważ qSelector zwraca Arrey elementów!)
    var img = imgs[i];
    img.onclick = function () {

        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;

    }
}





// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
modal.onclick = function () {
    modal.style.display = "none";
}



