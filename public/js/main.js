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
    let y = null;
    let deadline = null;
    let diff = null;
    let timerId = null;
    let pattern = null;

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
            /**
             * На данном этапе предположительно формирование искомой даты в формате YYYY/MM/DD
             * планируется для облегчения работы администратора указывать относительное время,
             * но реализация данного функционала не должна затронуть скрипт и будет менять только
             * исходные данные в конфигурационном файле
             */
            const count_array = count.split('/');
            y = Number(count_array[0].trim());
            var m = Number(count_array[1].trim());
            var d = Number(count_array[2].trim());
        }
        pattern = a.dataset.pattern;
        if (!pattern) pattern = "Шаблон вывода значения таймера не задан"
        a.innerHTML = count + "(" + y + ", " + m + ", " + d + ")    " + pattern;
        deadline = new Date(y, m, d);
        console.log("Сработала функция (основное тело)" + a)
    }

    function generate_a_result_string(diff, pattern) {
        let result_string = "";
        const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
        const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
        const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
        const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
        result_string = pattern.replace('%d', days).replace('%H', hours).replace('%M', minutes).replace('%S', seconds);
        return result_string;
    }

    function countdownTimer() {
        diff = deadline - new Date();
        a.innerHTML = generate_a_result_string(diff, pattern);
        if (diff <= 0) {
            clearInterval(timerId);
            console.log("Сработала функция countdownTimer() / Достигнут предел работы счетчика обратного отсчета / счетчик остановлен");
        }
        console.log("Сработала функция countdownTimer() / данные счетчика обновлены");
    }

    timerId = setInterval(countdownTimer, 1000);
})()