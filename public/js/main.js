/**
 * Основной файл Js для заглушки: SimplePlug v.0.0.0
 * URL: https://github.com/SimpleREST/SimpleStub
 * License: https://github.com/SimpleREST/SimpleStub/blob/master/LICENSE
 *
 * содержит только уникальные скрипты предназначенные для конкретной заглушки (нет смысла в отдельную
 * зависимость запихивать... пока.
 */
(function() {
    'use strict';

    if ($('.countdown').length) {
        var count = $('.countdown').data('count');
        var template = $('.countdown').data('template');
        var asssa = document.getElementById("asssa");
        asssa.innerHTML = count + "    " + template;
    }
})()