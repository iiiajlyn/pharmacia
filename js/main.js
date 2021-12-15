//map
let itemArr = document.querySelectorAll(".map-point__box-item p.sity");

for (let i = 0; i < itemArr.length; i++) {
    itemArr[i].addEventListener("click", mapClick)
}

function mapClick() {
    this.closest(".map-point__box-item").classList.toggle("activ");
    console.log(true)
}

//carusel
$('.owl-carousel').owlCarousel({
    loop: false,
    nav: false,
    merge: true,
    autoWidth: true,
}

) //wow js
new WOW().init();
//menu

$(window).scroll(function () {
    let height = $(window).scrollTop();

    if (height > 400) {
        $('.nav__ico').addClass('dark');
    }
    else {
        $('.nav__ico').removeClass('dark');
    }

}
);
let mapPoint = document.querySelectorAll(".map-point__box-item");
for (let elem of mapPoint) {
    if (parseInt(elem.style.left) > 50) {
        elem.classList.add("left")
    }
}
