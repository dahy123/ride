# PHP Mini Project

## Description
This project is a simple PHP application that allows users to register and view a list of registered users. It includes a registration form, a user list display, and basic navigation.

## Project Structure
```
php-mini-project
├── assets
│   ├── css
│   │   └── styles.css        # Custom CSS styles for the project
│   ├── js
│   │   └── scripts.js        # JavaScript code for the project
├── src
│   ├── database.php          # Handles database connections and queries
│   ├── functions.php         # Contains utility functions used throughout the project
│   └── templates
│       ├── header.php        # HTML for the header section of the pages
│       └── footer.php        # HTML for the footer section of the pages
├── export
│   └── export.php            # Handles the export functionality for user data
├── register.php              # Registration form for users
├── show.php                  # Displays a list of registered users
├── index.php                 # Homepage with navigation links
└── README.md                 # Documentation and instructions for the project
```

## Installation
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Ensure you have a web server with PHP support (e.g., Apache, Nginx) and a database (e.g., MySQL) set up.
4. Configure the database connection in `src/database.php`.

## Usage
- Access the homepage at `index.php` to navigate to the registration form or view the list of registered users.
- Fill out the registration form in `register.php` to add a new user.
- View the list of registered users in `show.php`.

## Contributing
Feel free to fork the repository and submit pull requests for any improvements or features you would like to add.

## License
This project is open-source and available under the MIT License.