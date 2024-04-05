# TechQuest-Backend_tasks

# User Registration and Management System

This is a simple user registration and management system implemented using PHP and MySQL. It allows users to register, view a list of registered users, edit user information, and update user details.

## Features

- **User Registration**: Users can register by providing their name, password, phone number, date of birth, state of origin, guidance information, and age.

- **Viewing Users**: After registering users, you can navigate to `view_users.php` in your browser to see the list of registered users. This file will display the users' information retrieved from the database.

- **Editing User Information**: You can click on the "Edit" link next to each user in the list displayed by `view_users.php`. This will take you to `edit_user.php`, where you can update the user's information.

- **Updating User Information**: After making changes in `edit_user.php`, when you submit the form, the data will be sent to `update_user.php`, which will update the user's information in the database.

## Project Structure

TechQUEST/
│
├── registration.html
├── register.php
├── edit_user.php
├── update_user.php
├── view_users.php


- `registration.html`: The HTML file containing the user registration form.
- `register.php`: PHP file to handle user registration form submission.
- `edit_user.php`: PHP file to edit user information.
- `update_user.php`: PHP file to update user information in the database.
- `view_users.php`: PHP file to display a list of users.


## Usage

1. **Set Up Database**: Create a MySQL database and import the provided `user_registration.sql` file to create the necessary tables.

2. **Configure Database**: Update the database configuration details in `config.php` according to your database setup.

3. **Run the Application**: Deploy the project to a web server environment and access the registration form (`registration.html`) through your web browser. Follow the on-screen instructions to register users and manage user information.

## License

This project is licensed under the [MIT License](LICENSE).
