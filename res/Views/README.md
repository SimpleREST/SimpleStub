----------------------------
# SimpleStub

----------------------------
Данная директория предназначена для хранения 
пользовательских кастомизированных файлов представлений.

Представлений может быть сколько угодно, на разные случаи
 и события. Разные для каждого языка или региона, времени суток
и прочего, прочего.

Главное, что файлы представлений должны быть первоначально созданы 
при помощи соответствующей команды wizard (будет сформирован 
и зарегистрирован должным образом
шаблон со всеми необходимым связями) на базе предоставляемого фреймворком
базового view
Собственно кастомизация ничего сложного не представляет, стоит только
посмотреть как реализуется подстановка нужных ресурсов из системы в шаблон.

Соответствующая команда wizard дает возможность назначить нужный шаблон основным или по событию

Также рекомендуется удалять созданный вами шаблон при помощи соответствующей 
команды wizard, во избежание возможных конфликтов конфигурации.