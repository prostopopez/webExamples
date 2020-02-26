/*-------------------------------------------------
                 Добавление классов
---------------------------------------------------*/
$(".menu-item-object-page").addClass("h3");
$(".menu-item-object-custom").addClass("h3");
/*-------------------------------------------------
                 Завершение прелоадера
---------------------------------------------------*/
$(document).ready(function(){
    setTimeout(function(){
        preloader=$("#page-preloader");
        if(preloader.hasClass("done")){
            /* пустота */
        } else{
            preloader.addClass("done");
        }
    }, 1000)
});
/*-------------------------------------------------
                 Модальное окно
---------------------------------------------------*/
var modall = document.getElementById('exampleModal');
$(document).ready(function(){
    modall.modal('hide');
});

var liElem = document.getElementById('menu-item-19');
liElem.setAttribute('data-toggle', 'modal');
liElem.setAttribute('data-target', '#exampleModal');

$(liElem).onclick = function(){
    modall.modal('show');
};
/*-------------------------------------------------
                 Слайдер
---------------------------------------------------*/
$(".carousel").carousel({
    interval:3000000,
    keyboard:true,
    wrap:true
});