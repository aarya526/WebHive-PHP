$(document).ready(function () {

    $('#sidebar-open').click(function () {
        $('.header-sidebar-section').toggleClass('active inactive');
        $('.main-body-backdrop').css('display', 'block');
    });

    $('#sidebar-close').click(function () {
        $('.header-sidebar-section').toggleClass('active inactive');
        $('.main-body-backdrop').css('display', 'none');
    });

    $('.main-body-backdrop').click(function () {
        $('.header-sidebar-section').toggleClass('active inactive');
        $('.main-body-backdrop').css('display', 'none');
    });
});

$(document).ready(function () {

    $(".slider-container").each(function () {
        let $slider = $(this).find(".slider-tracker");
        let $slides = $(this).find(".slide");
        let slideWidth = $slides.outerWidth(true);
        let currentIndex = 0;

        function moveSlide() {
            currentIndex++;
            if (currentIndex > $slides.length - 3) {
                currentIndex = 0;
            }
            // console.log((slideWidth + 70) * currentIndex);
            $slider.css("transform", `translateX(-${((slideWidth + 70) * currentIndex)}px)`);
        }
        setInterval(moveSlide, 3000);
    });

    // $(window).on("scroll", function () {
    //     let scrolled = $(window).scrollTop();
    //     console.log("You have scrolled: " + scrolled + "px");
    // });
});