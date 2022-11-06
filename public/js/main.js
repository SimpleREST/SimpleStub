/**
 * Основной файл JS для заглушки: SimplePlug v.0.0.1
 * URL: https://github.com/SimpleREST/SimpleStub
 * License: https://github.com/SimpleREST/SimpleStub/blob/master/LICENSE
 *
 * содержит только уникальные скрипты предназначенные для конкретной заглушки (нет смысла в отдельную
 * зависимость запихивать... пока.
 */
(function () {
    'use strict';
    let deadline = null;
    let diff = null;
    let timerId = null;

    function $(x) {
        const elem = document.querySelectorAll(x);
        document.writeln(elem.length.toString())
        return elem.item(0);

    }

    const a = $('.countdown-timer');

    if (a) {
        let count = a.dataset.count;
        if (!count) count = "Отсутствует финальное значение таймера обратного отсчета";
        else {
            const count_array = count.split('/');
            var y = Number(count_array[0].trim());
            var m = Number(count_array[1].trim());
            var d = Number(count_array[2].trim());
        }
        let pattern = a.dataset.pattern;
        if (!pattern) pattern = "Шаблон вывода значения таймера не задан"
        a.innerHTML = count + "(" + y + ", " + m + ", " + d + ")    " + pattern;
        deadline = new Date(y, m, d);
    }

    function countdownTimer() {
        diff = deadline - new Date();
        a.innerHTML = diff;
        if (diff <= 0) {
            // останавливаем таймер timerId
            clearInterval(timerId);
        }
    }

    timerId = setInterval(countdownTimer, 1000);
})()