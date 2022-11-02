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

    function $(x) {
        const elem = document.querySelectorAll(x);
        document.writeln(elem.length.toString())
        return elem.item(0);

    }

    const a = $('.countdown-timer');
    if (a) {
        let count = a.dataset.count;
        if (!count) count = "Отсутствует финальное значение таймера обратного отсчета";
        let pattern = a.dataset.pattern;
        if (!pattern) pattern = "Шаблон вывода значения таймера не задан"
        a.innerHTML = count + "    " + pattern;
    }
})()