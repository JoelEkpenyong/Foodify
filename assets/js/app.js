// loader
window.addEventListener('load', function(){
    setTimeout( function(){
        document.querySelector('#loader-container').classList.add('hidden')
        document.querySelector('.loader').classList.add('hidden')
    }, 1000)

    document.querySelector('#hero-text').classList.add('animate__animated', 'animate__fadeIn', 'animate__delay-3s')
    document.querySelector('#hero-img').classList.add('animate__animated', 'animate__slideInDown', 'animate__slower')
    
})

// countdown timer

//sets the countdown date
var countdownDate = new Date("August 23, 2020 00:00:00").getTime()
//shortcut to get elements 
var el = function(element){
    if(element.charAt(0)==='#'){
        return document.querySelector(element);
    }
}

//runs code every 1s
var timeFunction = setInterval(function(){
    //calculates the time left
    var now = new Date().getTime();
    var remainingTime = countdownDate - now;

    var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
    var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

    //displays the values of the calculated time
    el('#days').innerHTML = days + "<br> <span> days <span>";
    el('#hours').innerHTML = hours + "<br> <span> hours <span>";
    el('#minutes').innerHTML = minutes  + "<br> <span> minutes <span>";
    el('#seconds').innerHTML = seconds + "<br> <span> seconds <span>";

    //when countdown ends, stops excuting the timing function and displays the time as 0
    if(remainingTime < 0){
        clearInterval(timeFunction); 
        el('#days').innerHTML = '0';
        el('#hours').innerHTML = '0';
        el('#minutes').innerHTML = '0';
        el('#seconds').innerHTML = '0';
        // el('#wrapper').classList.add('animate__animated', 'animate__fadeOutUp')
        // el('#wrapper').addEventListener('animationend', () => {
        //     el('#wrapper').classList.add('remove')
        //     el('#text').innerHTML = 'TIME UP!';
        // });
    }
}, 1000)

// animate on scroll 

AOS.init({
    delay: 500,
});

