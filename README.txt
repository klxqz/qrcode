Плагин "Бар-код" для Shop-Script 5
--------------------------
Разработчик Коробов Николай wa-plugins.ru <support@wa-plugins.ru>

Плагин для генерации Бар-кода
--------------------------
Установка:

   1) Скопируйте в каталог wa-apps/shop/plugins/ папку qrcode/
    2) Добавьте запись в конфигурационный файл фреймворка wa-config/apps/shop/plugins.php:
          'qrcode' => true
          Пример содержимого файла plugins.php:
            return array (
                'qrcode' => true
            );
--------------------------
Использование:

1) Для того, чтобы начать пользоваться плагином, Вам необходимо сбросить кэш.
Войдите в "Инсталлер"->"Настройки"->"Очистить кэш".
2) Перейдите в "Магазин" раздел "Плагины".