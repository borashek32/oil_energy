Чтобы развернуть приложение на локальном сервере:

1. `git clone https://github.com/borashek32/oil_energy.git`
2. `cd oil_energy`
3. `composer install`
4. `npm install`
5. Переименовать `.env.example` в `.env`, отредактировать файл в соответствии с вашими настройками сервера и бд (у меня MAMP pro, создаю хост на сервере и бд в PhpMyAdmin ручками и заполяю `.env`, для MacOs нужно прописать сокет `DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock`)
6. `php artisan migrate --seed` (для заполнения бд данными по отделам и контрагентам)
7. `php artisan serv`
