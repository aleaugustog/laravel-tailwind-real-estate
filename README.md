# Laravel Tailwind Real Estate

Example project made with Laravel, Blade, Tailwind and a tiny bit of Alpine.js.

![Screenshot](/screenshot.jpg 'Screenshot')

## Running this project locally

**Make sure you have PHP, Composer and Docker installed.**

1. Clone the repo

    ```bash
    git clone https://github.com/thytanium/laravel-tailwind-real-estate
    ```

2. Install Composer dependencies

    ```bash
    composer install
    ```

3. Install Laravel Sail

    ```bash
    php artisan sail:install
    ```

4. Create Docker containers with Laravel Sail

    ```bash
    ./vendor/bin/sail up -d
    ```

5. Run migrations and seeder

    ```bash
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

6. Open [http://localhost](http://localhost) on your browser.
