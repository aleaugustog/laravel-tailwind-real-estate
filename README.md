# Laravel Tailwind Real Estate

Example project made with Laravel, Blade, Tailwind and a tiny bit of Alpine.js.

![Screenshot](/screenshot.jpg 'Screenshot')

## Running this project locally

**Make sure you have PHP, Composer, Node, NPM and Docker installed.**

1. Clone the repo

    ```bash
    git clone https://github.com/thytanium/laravel-tailwind-real-estate
    ```

2. Install Composer dependencies

    ```bash
    composer install
    ```

3. Create `.env` file

    ```bash
    cp .env.example .env
    ```

4. Set application key

    ```bash
    php artisan key:generate
    ```

5. Create Docker containers with Laravel Sail

    ```bash
    ./vendor/bin/sail up -d
    ```

6. Run migrations and seeder

    ```bash
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

7. Install Node dependencies

    ```bash
    npm ci
    ```

8. Build assets

    ```bash
    npm run build
    ```

9. Open [http://localhost](http://localhost) on your browser.
