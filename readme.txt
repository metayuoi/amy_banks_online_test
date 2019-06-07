Психологический тест по книге Эми Бэнкс.


:: СКРИПТ ДЛЯ АВТОМАТИЧЕСКОГО ДЕМО-ПРОХОЖДЕНИЯ ::

var Click = new Event("click");
document.querySelectorAll("input[type='text']")[0].value = "Первый";
document.querySelectorAll("input[type='text']")[1].value = "Второй";
document.querySelectorAll("input[type='text']")[2].value = "Третья";
document.querySelectorAll("input[type='text']")[3].value = "Четвёртая";
document.querySelectorAll("input[type='text']")[4].value = "Пятый";
document.querySelector("#continue").dispatchEvent(Click);

var phase = 0;
var current = 0;

var goToNext = setInterval(function() {
  if (current >= questions.length - 1) {clearInterval(goToNext)}
	  else {
	  if (phase === 0) {
		for (let j=0; j<document.querySelectorAll("#choose_panel tr").length - 1; j++) {
			let num = Math.floor(Math.random() * 5);
			document.querySelectorAll("#choose_panel tr")[j+1].querySelectorAll("input[type='radio']")[num].checked = true;
		}
		phase = 1;
	  }
	  else if (phase === 1) {
		document.querySelector("#continue").dispatchEvent(Click);
		phase = 0;
		current++;
	  }
  }
}, 1000);