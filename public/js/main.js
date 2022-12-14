/**
 * Основной файл JS для заглушки: SimplePlug v.0.0.1
 * URL: https://github.com/SimpleREST/SimpleStub
 * License: https://github.com/SimpleREST/SimpleStub/blob/master/LICENSE
 *
 * содержит только уникальные скрипты предназначенные для конкретной заглушки (нет смысла в отдельную
 * зависимость запихивать... пока).
 */
(function () {
    'use strict';
    let deadline;
    let diff = null;
    let timerId = null;
    let pattern = "";

    function $(x) {
        const elem = document.querySelectorAll(x);
        return elem.item(0);
    }

    const a = $('.countdown-timer');

    if (a) {
        let count = a.dataset.deadline;
        deadline = new Date(Date.parse(count));
        if (isNaN(deadline)) {
            console.log("Ой Ой Ой!!! Неверный формат даты дедлайна!" + deadline);
            deadline = new Date(0);
        }
        pattern = a.dataset.pattern;
        if (!pattern) pattern = "Шаблон вывода значения таймера не задан"
        countdownTimer();
        console.log("Сработала функция (основное тело)" + a)
    }

    /**
     * Функция генерирует результирующую строку из передаваемого в качестве аргумента
     * шаблона и временной разницы
     * @param diff - разниц во времени в миллисекундах
     * @param pattern - созданный по определенным правилам шаблон строки результата
     * @return String
     */
    function generate_a_result_string(diff = 0, pattern = "") {
        let result_string;
        const weeks = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24 / 7) : 0;
        const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) % 7 : 0;
        const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
        const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
        const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
        result_string = pattern
            .replace('%w', weeks.toString())
            .replace('%d', days.toString())
            .replace('%H', hours.toString())
            .replace('%M', minutes.toString())
            .replace('%S', seconds.toString());
        return result_string;
    }

    function countdownTimer() {
        diff = deadline - Date.now();
        a.innerHTML = generate_a_result_string(diff, pattern);
        if (diff <= 0) {
            clearInterval(timerId);
            console.log("Сработала функция countdownTimer() / Достигнут предел работы счетчика обратного отсчета / счетчик остановлен");
        }
        console.log("Сработала функция countdownTimer() / данные счетчика обновлены");
    }


    $("a.scrollto").addEventListener('click', function (e) {
        console.log("Сработала функция плавного перемещения");
        e.preventDefault();
        let href = this.getAttribute("href").substring(1);
        const scrollTarget = document.getElementById(href);
        const topOffset = document.querySelector(".scrollto").offsetHeight;
        // const topOffset = 0; // если не нужен отступ сверху
        const elementPosition = scrollTarget.getBoundingClientRect().top;
        const offsetPosition = elementPosition - topOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: "smooth"
        });
    });

    timerId = setInterval(countdownTimer, 1000);
})()