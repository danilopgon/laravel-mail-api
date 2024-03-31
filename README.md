# Laravel Email Form Template

This project provides a simple Laravel template for sending emails from frontend forms. It utilizes tokens to authenticate frontend requests, validates email inputs, and uses templates to send collected data.

## Installation

1. Clone this repository to your local machine:
    
    ```bash
    git clone https://github.com/danilopgon/laravel-mail-api/
    ```

2. Install project dependencies using Composer:

    ```bash
    composer install
    ```

3. Copy the example configuration file and configure it with your email credentials:

    ```bash
    cp .env.example .env
    ```

4. Configure your database in the `.env` file to store the tokens and your mail service.

5. Run migrations to create necessary tables in the database (if applicable):

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

## Usage

1. Send a form request to the `/api/email` endpoint with the following parameters:

    - `name`: The name of the sender.
    - `email`: The email address of the sender.
    - `subject`: The subject of the email.
    - `message`: The message to be sent.

2. The system will validate the data and send an email with the provided details.

## Customization

You can customize email templates in the `resources/views/emails` directory. The template can be previewed by visiting the `/mailable` route.

To change the form validation logic or email sending behavior, modify files in the `app` directory as needed.

## Contribution

Contributions are welcome! If you want to improve this project, follow these steps:

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Make your changes and commit them (`git commit -m 'Add some AmazingFeature'`).
4. Push your changes to the branch (`git push origin feature/AmazingFeature`).
5. Open a pull request.
