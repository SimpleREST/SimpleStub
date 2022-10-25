<?php
/**----------------------------------------------------------------------------------------
 * Файл основных настроек заглушки (основной)
 * ---------------------------------------------------------------------------------------
 *
 * Значения устанавливаемые в данном файле принимаются системой как значения по умолчанию
 *
 * ----------------------------------------------------------------------------------------*/

return [
    'base_lang' => 'ru',
    'base_charset' => 'utf-8',
    'base_description' => 'SimpleStub - Сайт находится в стадии разработки',
    'base_keywords' => 'SimpleStub - Website in development',

    /**
     * Секция управления блоком обратного отсчета
     */

    'countdown_date' => '2022/12/30',
    'countdown_note' => 'до старта сайта <BR> %w недель %d дней <br> %H:%M:%S',

    /**
     * Секция управления блоком основного контента заглушки
     */
    'base_title' => 'Website in development',
    'base_note' => 'The service is under development. Soon we will open it to everyone.',

    /**
     * Секция управления блоком отображения контактной информации заглушки
     */
    'contact-address' => 'Россия, Санкт-Петербург. Проспект Энтузиастов д.30',
    'contact_phone_to_script' => '+79119411234',
    'contact-phone_to_display' => '+7 (911) 941 -- --',
    'contact-email_to_script' => 'info@simplerest.ru',
    'contact-email_to_display' => 'info@simplerest.ru',

    /**
     * Секция управления блоком обратной связи
     */
    'form-name-minimum-length' => 4,
    'form-name-placeholder' => 'Ваше Имя',
    'form-name-minimum-length-error-msg' => 'Пожалуйста укажите правильный адрес электронной почты',
    'form-email-placeholder' => 'Ваш Email',
    'form-email-validate-error-msg' => 'Пожалуйста укажите правильный адрес электронной почты',
    'form-subject-minimum-length' => 4,
    'form-subject-placeholder' => 'Тема или предмет сообщения',
    'form-subject-minimum-length-error-msg' => 'Пожалуйста определите тему своего обращения',
    'form-message-rows-count' => 5,
    'form-message-placeholder' => 'Текст сообщения',
    'form-message-minimum-length-error-msg' => 'Пожалуйста напишите что-нибудь в этом поле',
    'form-action-msg-loading' => 'Загрузка',
    'form-action-msg-success' => 'Ваше сообщение отправлено. Спасибо!',
    'form-action-msg-error' => 'Ошибка! Ваше сообщение НЕ отправлено. Повторите ввод корректных данных',
    'form-button-submit-text' => 'Отправить сообщение',
];