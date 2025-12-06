# User-Authentication-System
🔐 PHP User Authentication System












A lightweight and secure User Authentication System built using PHP, MySQL, and CSS.
Includes Register, Login, Logout, and a protected Welcome Dashboard after authentication.


✨ Features

✔ User Registration

New users can create an account

Email & password validation

Password stored securely (SHA hashing or can be upgraded to bcrypt)

✔ User Login

Validates user credentials

Redirects to a protected welcome page

✔ Session-Based Authentication

Prevents direct access to dashboard without logging in

Secure logout functionality

✔ MySQL Database Integration

Stores user information

Uses prepared statements for security

✔ Clean & Simple UI

The UI uses a modern card layout with styling from style.css.



📂 Project Structure

/auth-system

│── db.php

│── register.php

│── login.php

│── logout.php

│── welcome.php

│── index.php

│── style.css

│── README.md



🗄️ Database Setup

Run this SQL in phpMyAdmin or MySQL CLI:

CREATE DATABASE user_auth;

USE user_auth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



⚙️ Configuration

Configure database connection in db.php:
$conn = new mysqli("localhost", "root", "", "user_auth");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



🚀 How to Run the Project
1️⃣ Move the project to your server

For XAMPP:

htdocs/auth-system/


For WAMP:

www/auth-system/

2️⃣ Start Apache and MySQL

Open XAMPP/WAMP → Start both services.

3️⃣ Open the project in your browser
http://localhost/auth-system/

4️⃣ Register a new user

After successful registration → redirect to login.

5️⃣ Login

Successful login redirects to:

welcome.php

6️⃣ Logout

Destroys session and returns user to login page.



🔐 Security Notes

Uses prepared statements to avoid SQL Injection

Can upgrade password storage to bcrypt (password_hash())

Session-based access control

Sanitizes user inputs



🛠️ Future Enhancements

Password hashing (bcrypt)

Forgot password / email OTP

User profile page

Admin panel

Login attempt limits (Brute-force protection)



🤝 Contributing

Contributions are welcome!

Fork the repository

Create a branch

Commit your updates

Submit a pull request



📄 License

This project is licensed under the MIT License.
