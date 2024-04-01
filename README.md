# PHP Authentication System

This is a simple PHP authentication system with login and signup functionality. It allows users to create an account, login, and securely authenticate using a username and password. User credentials are stored in a MySQL database.

## Features

- User Signup: Allows new users to create an account by providing a username and password.
- User Login: Allows existing users to log in securely using their username and password.
- Database Integration: User credentials are stored securely in a MySQL database.
- Password Hashing: User passwords are hashed using PHP's password_hash function for enhanced security.
- Session Management: Utilizes PHP sessions to maintain user authentication across multiple pages.

## Installation

1. Clone or download the repository to your local machine.
2. Import the `database.sql` file into your MySQL database to create the necessary `users` table.
3. Update the `config.php` file with your database credentials.
4. Upload the files to your web server directory.

## Usage

1. Navigate to the `signup.php` page to create a new account.
2. Enter a username and password and submit the form.
3. Once registered, navigate to the `login.php` page to log in with your credentials.
4. After successful authentication, you will be redirected to the `dashboard.php` page.
5. Logout functionality is available on the `dashboard.php` page.

## Files

- `signup.php`: User registration form.
- `login.php`: User login form.
- `dashboard.php`: User dashboard page (accessible after login).
- `logout.php`: Logout functionality.

## Dependencies

- PHP 5.5+
- MySQL

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
