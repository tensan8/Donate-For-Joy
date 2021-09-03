
$(function() {
    $(".nav-bar div:nth-child(2) a").removeClass("secondary-color-bg");
    $(".nav-bar div:last-child a").removeClass("secondary-color-bg");
    $(".nav-bar div:first-child a").removeClass("secondary-color-bg");
    $(".nav-bar div:first-child a").addClass("secondary-color-bg");


    let firstSlideIndex = 1;
    let secondSlideIndex = 1;


    showSlides(firstSlideIndex, 1);
    showSlides(secondSlideIndex, 2);

    $(".first-carousel").on("click", function() {
        showSlides(firstSlideIndex += 1, 1);
    });

    $(".second-carousel").on("click", function() {
        showSlides(secondSlideIndex += 1, 2);
    })

    function currentSlide(n, order) {
        if (order == 1) {
            showSlides(firstSlideIndex = n, order);
        }
        else if (order == 2) {
            showSlides(secondSlideIndex = n, order);
        }
    }



    function showSlides(n, order) {
        if (order == 1) {
            if (n > $(".first-slide").length) {firstSlideIndex = 1;}
            if (n < 1) {firstSlideIndex = $(".first-slide").length}

    
            $(".first-slide").css("display", "none");
            
            $(".first-dot").removeClass("active");
            
            $($(".first-slide")[firstSlideIndex - 1]).css("display", "block");
            $($(".first-dot")[firstSlideIndex - 1]).addClass("active");
        }
        else if (order == 2) {
            if (n > $(".second-slide").length) {secondSlideIndex = 1;}
            if (n < 1) {secondSlideIndex = $(".second-slide").length}

    
            $(".second-slide").css("display", "none");
            
            $(".second-dot").removeClass("active");
            
            $($(".second-slide")[secondSlideIndex - 1]).css("display", "block");
            $($(".second-dot")[secondSlideIndex - 1]).addClass("active");
        }
    }
});

/* 
    Progress bar 
*/
const progress = document.querySelector(".filled-bar");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            progress.style.width = progress.getAttribute('data-done') + '%';
            progress.style.opacity = 1;
        } else {
            progress.style.width = 0;
            progress.style.opacity = 0;
        }
    })
})

observer.observe(progress);


