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

    /*Если сделали скролл на 100px задаём новый класс для header*/
    if (height > 400) {
        $('.nav__ico').addClass('dark');
    }

    else {
        /*Если меньше 100px удаляем класс для header*/
        $('.nav__ico').removeClass('dark');
    }

}

);
