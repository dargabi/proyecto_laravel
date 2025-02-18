# Proyecto Laravel

Este es un proyecto basado en **Laravel**.

## Requisitos

-   PHP >= 8.0
-   Composer
-   MySQL o MariaDB

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/usuario/nombre-del-proyecto.git
    cd nombre-del-proyecto
    ```

2. Instala las dependencias:

    ```bash
    composer install
    ```

3. Copia el archivo de configuración:

    ```bash
    cp .env.example .env
    ```

4. Configura la base de datos en el archivo `.env`.

5. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

6. Ejecuta las migraciones:

    ```bash
    php artisan migrate
    ```

7. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

    Ahora puedes acceder a la aplicación en [http://localhost:8000](http://localhost:8000).
