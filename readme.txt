Психологический тест по книге Эми Бэнкс.


СКРИПТЫ ДЛЯ АВТОМАТИЧЕСКОГО ПРОХОЖДЕНИЯ

1. Заполнить поля для ввода имён:

var Click = new Event("click");
document.querySelectorAll("input[type='text']")[0].value = "Первый";
document.querySelectorAll("input[type='text']")[1].value = "Второй";
document.querySelectorAll("input[type='text']")[2].value = "Третья";
document.querySelectorAll("input[type='text']")[3].value = "Четвёртая";
document.querySelectorAll("input[type='text']")[4].value = "Пятый";
document.querySelector("#continue").dispatchEvent(Click);

2. Случайным образом заполнить форму:

for (let j=0; j<document.querySelectorAll("#choose_panel tr").length - 1; j++) {
		let num = Math.floor(Math.random() * 5);
		document.querySelectorAll("#choose_panel tr")[j+1].querySelectorAll("input[type='radio']")[num].checked = true;
}

4. От и до (сразу к случайным результатам):

var Click = new Event("click");
document.querySelectorAll("input[type='text']")[0].value = "Первый";
document.querySelectorAll("input[type='text']")[1].value = "Второй";
document.querySelectorAll("input[type='text']")[2].value = "Третья";
document.querySelectorAll("input[type='text']")[3].value = "Четвёртая";
document.querySelectorAll("input[type='text']")[4].value = "Пятый";
document.querySelector("#continue").dispatchEvent(Click);
for (let i=0; i<20; i++) {
	for (let j=0; j<document.querySelectorAll("#choose_panel tr").length - 1; j++) {
		let num = Math.floor(Math.random() * 5);
		document.querySelectorAll("#choose_panel tr")[j+1].querySelectorAll("input[type='radio']")[num].checked = true;
	}
	document.querySelector("#continue").dispatchEvent(Click);
}