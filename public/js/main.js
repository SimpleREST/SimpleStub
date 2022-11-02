/**
 * Основной файл Js для заглушки: SimplePlug v.0.0.0
 * URL: https://github.com/SimpleREST/SimpleStub
 * License: https://github.com/SimpleREST/SimpleStub/blob/master/LICENSE
 *
 * содержит только уникальные скрипты предназначенные для конкретной заглушки (нет смысла в отдельную
 * зависимость запихивать... пока.
 */
(function () {
    'use strict';

    function $(x) {
        return document.getElementById(x);
    }

    var a = $('countdown');
    if (a) {
        var count = a.getAttribute('data-count')
        var pattern = a.getAttribute('data-pattern')
        a.innerHTML = count + "    " + pattern;
    }
    // a.innerHTML = "<p>Привет!</p>";
})()