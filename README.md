### Запуск
1. Установить Docker
2. Скопировать .env.example в .env
3. Заполнить .env
4. Выполнить:
```
 docker-compose up
```

### Остановка
```
 docker-compose down
```

### Переустановка и удаление всего(сделай бэкап)
```
docker-compose down
docker rm $(docker ps -a -q)
docker rmi -f $(docker images -q)
sudo chmod -R 777 wordpress/
sudo chmod -R 777 _db/
sudo rm -rf _db
sudo rm -rf wordpress/
docker-compose up --force-recreate --remove-orphans
```

### Показать все запущенные контейнеры
```
docker ps -a
```

### Остановить все запущенные контейнеры
```
docker stop $(docker ps -a -q)
```

### Удалить все контейнеры
```
docker rm $(docker ps -a -q)
```

### Удалить все images
```
docker rmi $(docker images -q)
```

### Залесть внутрь контейнера
```
docker ps
docker exec -it <container name> /bin/bash
```

## Что вообще тут есть?
1. MySQL 8
2. PHP 7.4
3. PHPMyAdmin 5.1 - 10.227.22.3 (Содержит свой веб-сервер, костыльно настраивать чтобы поднимался из под nginx )
4. WordPress 5.9
5. NGINX 1.21 - 10.227.22.5 или 0.0.0.0

## Структура катологов

### Nginx
В папке nginx лежат кофиги nginx. Сейчас там лежит 1 основной конфиг который используется внутри docker-compose.

### WordPress

wp-includes - файлы самого wordpress, не трогать никогда. Меняются только после обновления Wordpress.

wp-admin - файлы админки, не трогать без крайней необходимости, и только понимая что делаешь.

customization (wp-content) - код самого проекта. Тут вся нужная кодовая база.

```
- .env - переменные окружения
- docker-compose.yml - конфиг докера
- wordpress
    - customization:
        - multimedia (uploads) - папка с загружаемыми из админки файлами. внутри разбивка по году и номеру месяца загрузки
        
        - themes - папка с загруженными или написанными темами.
            - fipn - разрабатываемая тема
        
        - upgrade - создается WordPress автоматически при обновлении WordPress. 
        Эта папка используется для хранения новой версии WordPress, скачанной с WordPress.org. 
        Перед обновлением, WordPress скачивает архив и извлекает его содержимое в эту папку. 
        Чтобы процесс автоматического обновления протекал успешно, рекомендуется не трогать эту папку. 
        Если данная директория удалена, WordPress создаст её при следующем обновлении.
        
        - wp-plugins (plugins) - папка с установленнми или написанными плагинами
        
        - index.php - нужен чтобы веб-сервер не показывал структуру каталогов. Файл не трогать.
        Должен содержать <?php // Silence is golden. 
```

## Переменные окружения
1. MYSQL_ROOT_PASSWORD - пароль для root суперюзера. Нужно делать сложный, использоваться нигде не будет
2. MYSQL_USER - имя пользователя для основного пользователя, имеет рут права
3. MYSQL_PASSWORD - пароль для основного пользователя, имеет рут права
4. MYSQL_DATABASE - имя базы
5. WORDPRESS_TABLE_PREFIX - префикс для всех таблиц в бд. Используется для для повышения безопасности, так так у баз wordpress типовая структура
6. WORDPRESS_AUTH_KEY WORDPRESS_SECURE_AUTH_KEY WORDPRESS_LOGGED_IN_KEY WORDPRESS_NONCE_KEY WORDPRESS_AUTH_SALT 
WORDPRESS_SECURE_AUTH_SALT WORDPRESS_LOGGED_IN_SALT WORDPRESS_NONCE_SALT - ключи безопасности, генерятся автоматически или вручную тут https://api.wordpress.org/secret-key/1.1/salt/

WORDPRESS переменные соответствуют переменным wp-config.
Подробнее:
```
https://codex.wordpress.org/%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_wp-config.php
```
```
https://github.com/docker-library/wordpress/blob/master/wp-config-docker.php
```

### Безопасность
1. Измено имя wp-content на customization 
2. Добавлен префикс к таблица 
3. Изменено имя uploads на multimedia 
4. Изменено имя plugins на wp-plugins 
5. Переопределены урлы входа и регистрации.
```
урл входа: /edit-content
урл регистрации: /start-manage-system
```

6. Установлен плагин Security 
7. Настроена права на файлы
8. В nginx конфиге убран доступ к файлам плагинов и файлам конфигурации 
9. В админке отключен редактор файлов 
10. Настроены бэкапы бд 
11. Отключено php для загружаемых файлов, тем, плагинов 
12. Запрещен правами свободный доступ к важным файлам конфигурации wp-config и тд. 
13. Ограничено кол-во попыток входа 
14. Включены обязательные сложные пароли 
15. Скрыто получение версии wordpress в теме в functions.php
```
function wp_version_remove_version() {
  return '';
}
add_filter('the_generator', 'wp_version_remove_version');
```

### TODO
Настроить:
```
Content-Security Policy
X-XSS-Protection
Strict-Transport-Security
X-Frame-Options
Public-Key-Pins
X-Content-Type
```

Проверить:
1. файлы должны быть с правами 644 или 640
2. wp-config.php должен быть 440 или 400
3. каталоги должны обладать правами 755 или 750

## Плагины
Ленивая загрузка картинок, видео, iframes и тд. - a3 Lazy Load
Минификация и склеивание JS,CSS, HTML - Autoptimize
Кэш - WP Super Cache
Безопасность - iThemes Security
SEO - Yoast SEO
Отключение комментов - Отключить комментарии
Статистика - WP Statistics
Встраивание PDF - PDF Embedder
Настройки SSL сертификата - Really Simple SSL

## Откртытые вопросы
Как деплоить docker wordpress без docker окружения?
После деплоя на прод проверить права на файлы и папки 
Кнопки пошарить
Кнопка to top
Задеплоить на временный хост.
накатить бд в докер контейнер
