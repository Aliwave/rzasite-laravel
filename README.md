
# Исходный код сайта информационной поддержки "Реальность. Задача. Алгоритм"

## Ссылка на архив с исходными файлами сайта и ядром:
    https://drive.google.com/file/d/1zXJkpgYqVLLgZvJuR5YuHoTzZFyAZjDm/view
    Необходима версия PHP 7.4
    
## Демо:
http://f0643734.xsph.ru/

## Используемые технологии:

- HTML
- CSS
- JavaScript
- [jQuery](https://jquery.com/)
- PHP
- [Laravel Framework](https://laravel.com/)
- [Bootstrap 4](https://getbootstrap.com/)
- [dompdf Laravel](https://github.com/barryvdh/laravel-dompdf)
- C#
- ZXing.Net


## Установка:

Помимо стандартной настройки файла .env для полноценной работы веб-сайта необходимы API ключи от VK API и Яндекс API и локальный ключ для POST запросов с мобильного приложения, в котором нужно поставить такой же ключ для проверки на соответствие. Их необходимо установить установить в файле .env в параметрах:

    VK_API_KEY=
    YANDEX_API_KEY=
    LOCAL_CONFIRM_KEY=

Для установки локального ключа в приложении (папка RzaolyScan) необходимо зайти в файл MainPage.xml и изменить параметр specifykey в конструкции

    Dictionary<string, string> req = new Dictionary<string, string>()
    {
        {"specifykey","//" }
    };

Ключи в параметрах LOCAL_CONFIRM_KEY и specifykey должны совпадать.

Для настройки учетной записи админа необходимо зайти в файл

    database/seeds/UserTableSeeder.php

установить свои данных для входа

    $admin->email = '\\';
    $admin->password = Hash::make('\\');

при настройке проекта использовать команду

    php artisan migrate --seed
