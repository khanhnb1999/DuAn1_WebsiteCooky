$(document).ready(function () {
    $("#btn__open").click(function () {
        $("#myForm").slideToggle();
    });

    $(".btn__close").click(function () {
        $("#myForm").slideUp();
    });
});

var close = document.getElementById('myForm');
window.onclick = function (event) {
    if (event.target == close) {
        close.style.display = "none";
    }
}

$(document).ready(function () {
    $(".user-switch-form").click(function () {
        var tab = $(this).data('tab');
        $(".user-tab-body").removeClass("active");
        $("#" + tab).addClass("active");
        $(".user-switch-form").removeClass('d-none');
        $(this).addClass("d-none");
    });

    // end tab user login
    $("#cooky-cate").click(function () {
        $(".search__filter").slideToggle("slow");
    })

});

window.onload = function () {
    $("#slider").slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev btn-gray"><i class="fad fa-chevron-circle-left icon__click"></i></i></button>',
        nextArrow: '<button type="button" class="slick-next btn-gray"><i class="fad fa-chevron-circle-right icon__click"></i></button>',
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 2,
        draggable: true,
        fade: false,
        infinite: true
    });

    $("#slider-food").slick({
        autoplay: true,
        autoplaySpeed: 1900,
        prevArrow: '<button type="button" class="slick-prev btn-white"><i class="fad fa-chevron-circle-left icon__click"></i></i></button>',
        nextArrow: '<button type="button" class="slick-next btn-white"><i class="fad fa-chevron-circle-right icon__click"></i></button>',
        slidesToShow: 4,
        slidesToScroll: 2,
        draggable: true,
        fade: false,
        infinite: true
    });

}