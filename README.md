### Запуск
1. Установить Docker(https://docs.docker.com/get-started/) и Docker Compose(https://docs.docker.com/compose/install/)
2. Скопировать .env.example в .env
3. Заполнить .env
4. При 1 запуске временно убрать location = /wp-admin/install.php { deny all; }, чтобы установщие был доступен, после установки wordpress вернуть обратно
5. Выполнить:
```
 docker-compose up
```
6. Выполнить
```
sudo chmod -R 777 wordpress/
```
7. Если не используйте wordpress папку из репы, то есть забавная штука. В docker контейнере изменены пути до папок в wordpress. 
Но при 1 старте папки создаются с именами по умолчанию. Приходится вручную переименовывать папки
   1. wp-content -> customization
   2. wp-content/plugins -> customization/wp-plugins 
   3. wp-content/uploads -> customization/multimedia (этой папки может не быть)

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

### Залезть внутрь контейнера
```
docker ps
docker exec -it <container name> /bin/bash
```
Для nginx /bin/sh

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
5. Переопределен урл входа.
```
урл входа: /edit-content
```

6. Установлен плагин Security 
7. Настроены права на файлы
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

## Как работаю права
После 1 запуска и создания всех папок права устроены следующим образом:
В папке wordpress у корневой системы права на папки 755, а на файлы 644.
Файлы и папки принадлежат пользователю 82

В папке _db у корневой системы права на папки 750, 
а на файлы 640 600 и 644 в зависимости от файла. 
Файлы и папки принадлежат пользователю systemd-coredump

В docker контейнере:
В контейнере wordpress права такие-же как и в корневой системе, но принадлежат файлы пользователю www-data
В контейнере nginx права такие-же как и в корневой системе, но принадлежат файлы пользователю 82 с доступом для www-data

Если поменять права:
```
sudo chmod -R 777 wordpress/
```
то права в корневой системе синхронизируются с docker контейнерами, то есть внутри контейнеров тоже будет 777.

После установки всё настроено сразу как надо, но вот нам для нужд разработки нужны полные права на wordpress, 
чтобы писать код. Поэтому на develop машине нужно дать полные права на папку wordpress командой выше.
Плагины безопасности будут ругаться, но для dev режима это ок.

Как ограничить права
```
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;
```

Проверить на проде:
1. файлы должны быть с правами 644 или 640
2. wp-config.php должен быть 440 или 400
3. каталоги должны обладать правами 755 или 750

### Посмотреть права в виде чисел
```
ls -l | awk '{k=0;for(i=0;i<=8;i++)k+=((substr($1,i+2,1)~/[rwx]/) \
             *2^(8-i));if(k)printf("%0o ",k);print}'
```

## Плагины
1. Ленивая загрузка картинок, видео, iframes и тд. - a3 Lazy Load
2. Минификация и склеивание JS,CSS, HTML - Autoptimize
3. Кэш - WP Super Cache
4. Безопасность - iThemes Security
5. SEO - All in One SEO
6. Отключение комментов - Отключить комментарии
7. Статистика - WP Statistics
8. Встраивание PDF - PDF Embedder
9. Настройки SSL сертификата - Really Simple SSL
10. Миграция, бэкапы и восстановление - All-in-One WP Migration
11. Отключение неиспользуемого REST API - Отключить REST API
12. Спрятать страницу входа - WPS Hide Login

## Особенности
1. Для загрузки больших файлов используется кастомный uploads.ini
2. Иногда надо руками чистить журнал безопасности. Инструменты/ITSec Log Cleaner

## Как деплоить с Docker.
1. Самый простой путь:
Положить wordpress, _db папки и docker-compose.yaml, uploads.ini, .env на прод. 
Выполнить:
```
 docker-compose up
``` 

### Что хочу от SEO
robots.txt
sitemap
Предпросмотр как будет выглядеть пост в поисках и соц сетях
Настройку мета тегов

## Как деплоить без Docker.
1. Положить пуcтой wordpress на прод с настройками как в docker.
2. Используя плагин All-in-One WP Migration сделать дамп из develop машины
3. Импортировать дамп на прод через админку, раздел All-in-One WP Migration

Ещё можно попробовать после 1 шага просто положить папку customization на прод, 
а записи страницы и метрики перенести с помощью 
стандартной тулзы wordpress.(Инструменты/Импорт). Но тут успех под вопросом.

### Урл базовых настроек темы 
`/wp-admin/customize.php`

## Открытые вопросы
Кнопки пошарить
Кнопка to top
Задеплоить на временный хост.
