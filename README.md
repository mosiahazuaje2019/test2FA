## Pasos para su utilizacion

Descarga del repo
```shell
$ https://github.com/mosiahazuaje2019/test2FA
```

Instala las dependencias de Laravel.
```shell
$ composer install
```

Genera un key, configura un archivo `.env` y luego hacer la migracion
```shell

# Laravel Key
$ php artisan key:generate

# Corre las migraciones
$ php artisan migrate

# Corre Seeders
$ php artisan db:seed --class="RoleSeeder"
$ php artisan db:seed --class="PermissionSeeder"
$ php artisan db:seed --class="PermissionRoleSeeder"

# Recuerde que debe configurar en el .env su conexion a una base de datos y tambien configurar un correo para realizar pruebas y para que el sistema de notificaciones pueda enviar de manera correcta los emails

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=""

```
