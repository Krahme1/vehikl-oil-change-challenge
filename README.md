# Vehikl Oil Change Challenge

A small Laravel app that determines whether a car is due for an oil change, based on the current odometer reading, the odometer reading at the last oil change, and the date of the last oil change.

A car is due for an oil change if either of the following is true:
- More than 5000 km have passed since the last oil change, or
- More than 6 months have passed since the last oil change.

## Tech Stack

- Laravel 12
- SQLite
- Blade templates (no JavaScript or frontend framework)

## Setup Instructions

1. Clone the repository:
```bash
   git clone https://github.com/Krahme1/vehikl-oil-change-challenge.git
   cd vehikl-oil-change-challenge
```

2. Install PHP dependencies:
```bash
   composer install
```

3. Copy the example environment file and generate an app key:
```bash
   cp .env.example .env
   php artisan key:generate
```

4. Create the SQLite database file:
```bash
   touch database/database.sqlite
```

5. Run migrations:
```bash
   php artisan migrate
```

6. Start the development server:
```bash
   php artisan serve
```

7. Visit `http://127.0.0.1:8000` in your browser.

## Routes

- `GET /` — Show the oil change check form
- `POST /check` — Validate and save a submission
- `GET /result/{id}` — Show the result for a specific submission