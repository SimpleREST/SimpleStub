<?php
/**
 * Ядро для консоли приложения
 * Класс технический (промежуточный) создан для организации клиентской части и фреймворка заглушки
 * в данном классе в основном происходит наследование класса ядра консоли из фреймворка
 * доработка данного класса в части добавления методов касающихся исключительно клиентской части оставлена
 * на будущее...
 *
 *
 */

namespace App\Console;

use Stub\Framework\Main\Application;

class Kernel extends \Stub\Framework\Main\Console\Kernel
{

    /**
     * @var
     */
    protected $app;

    /**
     * @param \Stub\Framework\Contracts\Main\Application $app
     */
    public function __construct(\Stub\Framework\Contracts\Main\Application $app)
    {
        $this->app = $app;
        echo "Создан класс Кернел, клиентской части.";
    }
}