# Product Management System

This is a simple **Product Management System** built using PHP, MySQL, and Bootstrap. It allows users to add products and view a list of all added products.

---

## Features

- **Add New Products**: Users can add product details, including the product name, price, and category.
- **View Products**: Users can see all the products listed in a table format with details such as ID, name, price, and category.
- **Navigation**: Easy navigation between adding products and viewing the product list.

---

## Technologies Used

- **Frontend**: HTML, CSS (via Bootstrap 5.3.3)
- **Backend**: PHP
- **Database**: MySQL

---

## Prerequisites

Before running the application, ensure you have the following installed:

1. A local server like XAMPP, WAMP, or MAMP.
2. PHP version 7.0 or higher.
3. MySQL database.

---

## Setup Instructions

1. Clone this repository or download the files.
2. Set up a MySQL database with the following credentials:
   - **Host**: `localhost`
   - **Username**: `root`
   - **Password**: (leave blank if using default configuration)
   - **Database Name**: `student`

3. Import the database schema:
   - Locate the `product.sql` file (if provided) or use the following SQL command to create the `product` table:
     ```sql
     CREATE DATABASE student;

     USE student;

     CREATE TABLE product (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         prize DECIMAL(10, 2) NOT NULL,
         category VARCHAR(255) NOT NULL
     );
     ```

4. Ensure the `config.php` file has the correct database credentials.

5. Start your local server and navigate to the application directory.

6. Access the application via your web browser:
   - Add Product Page: `http://localhost/<your_directory>/main.php`
   - View Products Page: `http://localhost/<your_directory>/showdata.php`

---

## Usage

1. Navigate to the **Add Product** page.
2. Fill in the product name, price, and category, then click "Submit."
3. To view the product list, click the "Show Data" button.

---



## Screenshots

### Add Product Page
A form to input new product details.

![scn1](https://github.com/user-attachments/assets/75911d90-010e-4c62-b89d-4804655fbd37)

### Product List
A table displaying all the stored products.

![scn2](https://github.com/user-attachments/assets/990091ec-ca85-49b5-9c2d-c85e79efb956)

---

## Video Demonstration

Watch the video demonstration of the project to see it in action:



---

## License

This project is open-source and free to use.

---

## Author

- **Akshar Patel**
- Contact: aksharpatel030306@gmail.com

