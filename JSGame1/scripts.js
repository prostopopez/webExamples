/*
1. Запуск игры
2. Скрипт размещает корабль
3. Начало боя
4. Цикл:
    а. Запрос у пользователя координат;
    б. Сравнение их с положением корабля.
5. Игра окончена, вывод оценки.
*/
/*
ПСЕВДОКОД.
ЦИКЛ: пока корабль не потоплен
    ПОЛУЧИТЬ координаты выстрела от пользователя
    СРАВНИТЬ введённые данные с диапазоном корректных значений
    ЕСЛИ введённые данные некорректны,
        ВЫВЕСТИ сообщение с предложением ввести новые значения
    ИНАЧЕ
        ПРИБАВИТЬ один к guesses
        ЕСЛИ выстрел попал в корабль
            ПРИБАВИТЬ 1 к кол-ву попаданий
            ЕСЛИ кол-во попаданий больше 2
                ПРИСВОИТЬ isSunk = true
                ВЫВЕСТИ сообщение "Корабль потоплен!"
            КОНЕЦ ЕСЛИ
        КОНЕЦ ЕСЛИ
    КОНЕЦ ИНАЧЕ
КОНЕЦ ЦИКЛА
ВЫВОД статистики
 */

let location1; let location2; let location3;
location1 = [Math.floor(Math.random() * 10) + 1, Math.floor(Math.random() * 10) + 1];
if(location1[0] < 9 && location1[1] < 9){
    if(location1[0] > 2 && location1[1] > 2) {
        location2 = [location1[0], location1[1] - 1];
        location3 = [location2[0], location2[1] - 1];
    } else{
        location2 = [location1[0]+1,location1[1]];
        location3 = [location2[0]+1, location2[1]];
    }
} else{
    location1[0] = Math.floor(Math.random() * 8) + 3; location1[1] = Math.floor(Math.random() * 8) + 3;
    location2 = [location1[0]-1, location1[1]];
    location3 = [location2[0]-1, location2[1]];
}

let guess1; let guess2;
let hits = 0; let guesses = 0;
let isSunk = false;

let startbtn = document.getElementById("btn");
let colorbtn = document.getElementById("color");
let shipcolor; shipcolor = "#f8ffe8";
function changecolor(){
    document.querySelector(`.row-${location1[0]} .col-${location1[1]}`).style.background = shipcolor;
    document.querySelector(`.row-${location2[0]} .col-${location2[1]}`).style.background = shipcolor;
    document.querySelector(`.row-${location3[0]} .col-${location3[1]}`).style.background = shipcolor;
}
changecolor(shipcolor);

colorbtn.innerHTML = 'Перейти в режим \"Проверка\"';
colorbtn.onclick = function (){
    if(colorbtn.innerHTML === 'Перейти в режим \"Челлендж\"'){
        shipcolor =  "#f8ffe8";
        colorbtn.innerHTML = 'Перейти в режим \"Проверка\"';
    } else{
        shipcolor =  "#000000";
        colorbtn.innerHTML = 'Перейти в режим \"Челлендж\"';
    }
    changecolor(shipcolor);
};

startbtn.onclick = function(){
        while (!isSunk) {
            guess1 = prompt("Введите x координату для выстрела", "");
            guess2 = prompt("Введите y координату для выстрела", "");
            if (guess1 > 10 || guess2 > 10 || guess1 < 1 || guess2 < 1) {
                alert("Введённые значения некорректны, повторите ввод");
            } else {
                guesses += 1;
                switch (guess1 + "|" + guess2) {
                    case (location1[0] + "|" + location1[1]):
                        hits += 1;
                        document.querySelector(`.row-${location1[0]} .col-${location1[1]}`).style.background = "#f8ffe8";
                        location1 = [-1, -1];
                        alert("Вы попали!");
                        break;
                    case (location2[0] + "|" + location2[1]):
                        hits += 1;
                        document.querySelector(`.row-${location2[0]} .col-${location2[1]}`).style.background = "#f8ffe8";
                        location2 = [-1, -1];
                        alert("Вы попали!");
                        break;
                    case (location3[0] + "|" + location3[1]):
                        hits += 1;
                        document.querySelector(`.row-${location3[0]} .col-${location3[1]}`).style.background = "#f8ffe8";
                        location3 = [-1, -1];
                        alert("Вы попали!");
                        break;
                    default:
                        alert("Вы промахнулись!");
                        break;
                }
                if (hits > 2) {
                    isSunk = true;
                    alert("Корабль потоплен!");
                }
            }
        }
        alert(`Статистика: \n Выстрелы: ${guesses} \n Точность: ` + (hits / guesses) * 100 + "%");
};

document.getElementById("restart").addEventListener("click", restart);
function restart() {
    location.reload()
}

