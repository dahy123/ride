# PHP Mini Project

## Description
This project is a simple PHP application that allows users to register and view a list of registered users. It includes a registration form, a page to display registered users, and basic navigation.

## Project Structure
```
php-mini-project
├── assets
│   ├── css
│   │   └── styles.css
│   └── js
│       └── scripts.js
├── src
│   ├── database.php
│   ├── functions.php
│   └── templates
│       ├── header.php
│       └── footer.php
├── export
│   └── export.php
├── register.php
├── show.php
├── index.php
└── README.md
```

## Files Overview

- **assets/css/styles.css**: Custom styles for the project.
- **assets/js/scripts.js**: JavaScript code for client-side functionality.
- **src/database.php**: Establishes a connection to the database and includes query functions.
- **src/functions.php**: Utility functions for fetching registered users and other operations.
- **src/templates/header.php**: HTML structure for the header section of the web pages.
- **src/templates/footer.php**: HTML structure for the footer section of the web pages.
- **export/export.php**: Handles the export functionality for registered user data.
- **register.php**: Contains the registration form and processes submissions.
- **show.php**: Displays a list of registered users in a table format.
- **index.php**: The homepage with navigation links to other pages.

## Setup Instructions
1. Clone the repository to your local machine.
2. Set up a database and update the database connection details in `src/database.php`.
3. Run the application on a local server (e.g., XAMPP, MAMP).
4. Access the application via your web browser at `http://localhost/php-mini-project/index.php`.

## Usage
- Navigate to the registration page to sign up.
- View the list of registered users on the corresponding page.
- Use the export functionality to download user data.

## License
This project is open-source and available for modification and distribution.