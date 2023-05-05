const ArrowButton = document.querySelector('#section5__button');
const ArrowImage = document.querySelector('#ArrowImage');
const ArrowImageClose = document.querySelector('#ArrowImageClose');
const HiddenBlock = document.querySelector('#hiddenBlock');
const BlackItem = document.querySelector('#blackItem');
const Circle = document.querySelector('#circle');
const CircleInner = document.querySelector('#circleInner');
const circleItem = document.querySelector('#circleItem');
const circleItemSub = document.querySelector("#circleItemSub");
const InnerText = document.querySelector('#innerText');


function openHiddenBlock() {
    ArrowImage.style.transition = ".2s linear";
    BlackItem.classList.toggle('border');
    ArrowImage.classList.toggle('active');
    HiddenBlock.classList.toggle('hidden');
}
function closeHiddenBlock() {
    HiddenBlock.classList.toggle('hidden');
    BlackItem.classList.toggle('border');
    ArrowImage.classList.toggle('active');
}


ArrowButton.addEventListener('click', openHiddenBlock )
ArrowImageClose.addEventListener('click',closeHiddenBlock )





// click the circle


const CircleRandomText = [

    'Сложно разобраться',
    'Мне не подходит', 
    'Могу сам настроить amoCRM...',
    'Уже используем другую CRM систему'

];


function clickTheCircle() {
    
    let randomIndex = Math.floor(Math.random() * CircleRandomText.length);
    
    CircleInner.style.background = "linear-gradient(180deg, #FFD84D 0%, #FFEDAC 100%)";
    InnerText.style.display = "none";

    setTimeout(() => {
       InnerText.style.display = "block";
       CircleInner.style.background = ""; 
       circleItem.textContent = CircleRandomText[randomIndex]; 
       circleItemSub.textContent = "У нас есть клиенты, которым 70 лет. И они разобрались. Тебе должно быть стыдно.";
       
            if(randomIndex == "2") {
                    circleItemSub.textContent = '...говорили они';

            }
            if(randomIndex == "1"){
                    circleItemSub.textContent = 'Твои конкуренты так не думают';
            }
            if( randomIndex == "3" ) {
                    circleItemSub.textContent = 'Тогда зачем ты смотришь этот сайт? Видимо есть проблемы.';
            }
 
    }, 2000);

}

Circle.addEventListener('click', clickTheCircle);