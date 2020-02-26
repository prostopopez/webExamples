/* Печать в хедере */
$("#pechat1").typeIt({
    strings: ["Соня - няша!", "Соня - лучшая кошка в мире!", "Голосуйте за Соню уже сегодня!"],
    html: true,
    cursor: true,
    breakLines: false,
    lifeLike: true,
    loop: true,
    startDelete: false,
    speed: 100,
    cursorSpeed: 1000,
    deleteDelay: 750,
    breakDelay: 750,
    startDelay: 250,
    loopDelay: 750
});
/* Карусель */
$(".carousel").carousel({
    interval: 1000,
    keyboard: true,
    wrap: true
});
/* Switch между слайдером и папкой*/
var gallery = document.getElementById("gallery");
var slider = document.getElementById("slider_photo");
function btn_gal() {
    gallery.style.display = "block";
    slider.style.display = "none";
}
function btn_slide() {
    slider.style.display = "block";
    gallery.style.display = "none";
}
/* Изменение checked переключателя в зависимости от окна браузера пользователя */
var razmer_monic = document.documentElement.clientWidth;
if (razmer_monic < 993) {
    document.getElementById("option-two").checked = "true";
}
else {
    document.getElementById("option-one").checked = "true";
}

/* Игра на js */
var images = [];
var lives = 5;
var score = 0;
var chislo = [];

document.getElementById("live").innerHTML="Жизни | "+lives;
document.getElementById("score").innerHTML="Счёт | 0";
// get images, place them in an array & randomize the order

function randIntExcep(min, max, exp) {
    var n,
        exp = Array.isArray(exp) ? exp : [(isNaN(exp) ? min-1 : exp)];
    while(true){
        n = Math.floor(Math.random() * (max - min + 1)) + min;
        if(exp.indexOf(n) < 0) return n;
    }
}

for (var i = 0; i < 8; i++) {
    var rand = randIntExcep(1, 8, chislo);
    var img = "../Img/cat_" + rand + ".png";
    images.push(img);
    images.push(img);
    chislo.push(rand);
}
randomizeImages();

// output images then hide them
var output = "<ol>";
for (var i = 0; i < 16; i++) {
    output += "<li>";
    output += "<img src = '" + images[i] + "'/>";
    output += "</li>";
}
output += "</ol>";
document.getElementById("containerr").innerHTML = output;
var imgs = document.getElementById("containerr").getElementsByTagName("img");
for(var b=0;b<16;b++) {
    imgs[b].style.display = "none";
}

var guess1 = "";
var guess2 = "";
var count = 0;

$("li").click(function() {
    if ((count < 2) &&  ($(this).children("img").hasClass("face-up")) === false) {
        // increment guess count, show image, mark it as face up
        count++;
        $(this).children("img").show();
        $(this).children("img").addClass("face-up");

        //guess #1
        if (count === 1 ) {
            guess1 = $(this).children("img").attr("src");
        }

        //guess #2
        else {
            guess2 = $(this).children("img").attr("src");

            // since it's the 2nd guess check for match
            if (guess1 === guess2) {
                score++;
                document.getElementById("score").innerHTML="Счёт | "+ score;
                console.log("match");
                $("li").children("img[src='" + guess2 + "']").addClass("match");
                if(score===8){
                    alert("Вы выиграли .о.");
                    document.location.reload();
                }
            }

            // else it's a miss
            else {
                console.log("miss");
                setTimeout(function() {
                    $("#containerr img").not(".match").hide();
                    $("#containerr img").not(".match").removeClass("face-up");
                    lives--;
                    if(!lives) {
                        alert("Вы проиграли :*");
                        document.location.reload();
                    }
                    else{
                        document.getElementById("live").innerHTML="Жизни | "+ lives;
                    }
                }, 300);
            }

            // reset
            count = 0;
            setTimeout(function() { console.clear(); }, 5000);
        }
    }
});

// randomize array of images
function randomizeImages() {
    Array.prototype.randomize = function () {
        var i = this.length, j, temp;
        while (--i) {
            j = Math.floor(Math.random() * (i - 1));
            temp = this[i];
            this[i] = this[j];
            this[j] = temp;
        }
    };

    images.randomize();
}