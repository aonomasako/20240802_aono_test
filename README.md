お問い合わせフォーム

DOCKERビルド

1.git@github.com:aonomasako/contact-form.git
2.Docker-compose up -d -build

*MySQLは、OSによって起動しないことがありますのでdocker-compose.ymlファイルの編集をしてください。

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3..envexampleファイルから.envを作成して、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

使用技術
・php  8.3.4
・laravel  8.83.26
・MySQL  8.0.26

URL
・開発環境:http://localhost/
・phpMyAdmin:http://localhost:8080

ER図
![2024-08-01](https://github.com/user-attachments/assets/0e237eed-d71a-41b5-a896-260573384cb7)
