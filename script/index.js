
$(function() {
    AOS.init();

    

    $(".nav-bar div:nth-child(2) a").removeClass("secondary-color-bg");
    $(".nav-bar div:last-child a").removeClass("secondary-color-bg");
    $(".nav-bar div:first-child a").removeClass("secondary-color-bg");
    $(".nav-bar div:first-child a").addClass("secondary-color-bg");

    // showSlides(firstSlideIndex, 1);
    // showSlides(secondSlideIndex, 2);

    // $(".first-carousel").on("click", function() {
    //     showSlides(firstSlideIndex += 1, 1);
    // });

    // $(".second-carousel").on("click", function() {
    //     showSlides(secondSlideIndex += 1, 2);
    // })

    // function currentSlide(n, order) {
    //     if (order == 1) {
    //         showSlides(firstSlideIndex = n, order);
    //     }
    //     else if (order == 2) {
    //         showSlides(secondSlideIndex = n, order);
    //     }
    // }



    // function showSlides(n, order) {
    //     if (order == 1) {
    //         if (n > $(".first-slide").length) {firstSlideIndex = 1;}
    //         if (n < 1) {firstSlideIndex = $(".first-slide").length}

    
    //         $(".first-slide").css("display", "none");
            
    //         $(".first-dot").removeClass("active");
            
    //         $($(".first-slide")[firstSlideIndex - 1]).css("display", "block");
    //         $($(".first-dot")[firstSlideIndex - 1]).addClass("active");
    //     }
    //     else if (order == 2) {
    //         if (n > $(".second-slide").length) {secondSlideIndex = 1;}
    //         if (n < 1) {secondSlideIndex = $(".second-slide").length}

    
    //         $(".second-slide").css("display", "none");
            
    //         $(".second-dot").removeClass("active");
            
    //         $($(".second-slide")[secondSlideIndex - 1]).css("display", "block");
    //         $($(".second-dot")[secondSlideIndex - 1]).addClass("active");
    //     }
    // }

    /* 
        Automatic Slideshow
    */
    let firstSlideIndex = 1;
    let secondSlideIndex = 1;

    var slides = document.getElementsByClassName("first-slide");
    var secondSlides = document.getElementsByClassName("second-slide");
    firstSlide();
    secondSlide();
    // showSlides(secondSlides, secondSlideIndex);

    function firstSlide() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        firstSlideIndex++;
        if (firstSlideIndex > slides.length) {firstSlideIndex = 1}    
        slides[firstSlideIndex-1].style.display = "block";  

        setTimeout(firstSlide, 3500); // Change image every 2 seconds
    }

    function secondSlide() {
        for (let i = 0; i < secondSlides.length; i++) {
            secondSlides[i].style.display = "none";  
        }
        secondSlideIndex++;
        if (secondSlideIndex > secondSlides.length) {secondSlideIndex = 1}    
        secondSlides[secondSlideIndex-1].style.display = "block";  

        setTimeout(secondSlide, 4000); // Change image every 2 seconds
    }
});



/* 
    Value calculation
*/
var collectedMoney = document.getElementById("collected-money").innerHTML;
var targetedMoney = document.getElementById("targeted-money").innerHTML;

collectedMoney = collectedMoney.replace(/\./g, '');
targetedMoney = targetedMoney.replace(/\./g, '');

var percentage = (collectedMoney / targetedMoney) * 100;

if(collectedMoney > targetedMoney){
    percentage = 100;
}

/* 
    Progress bar 
*/
const progress = document.querySelector(".filled-bar");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            progress.style.width = percentage + '%';
            progress.style.opacity = 1;
            progress.innerHTML = percentage + '%';
        } else {
            progress.style.width = 0;
            progress.style.opacity = 0;
        }
    })
})

observer.observe(progress);



/*
    Modal / Dialog box
*/
var modal = document.getElementById("modal");
var button = document.getElementById("donate-button");
var exitSign = document.getElementById("x-sign");

button.onclick = function(){
    modal.style.opacity = 1;
    modal.style.visibility = "visible";
    
}

exitSign.onclick = function(){
    modal.style.opacity = 0;
    modal.style.visibility = "hidden";
}

window.onclick = function(event){
    if (event.target == modal){
        modal.style.opacity = 0;
        modal.style.visibility = "hidden";
    }
}
