# Product Management System

---

#### Overview
This project is a simple **Product Management System** built with **PHP** and **MySQL**, integrated with **Bootstrap** for styling. The system allows users to perform CRUD (Create, Read, Update, Delete) operations on products seamlessly. 

---

### Features
1. **Add Products:** Users can add new products by specifying the name, price, and category.
2. **View Products:** Displays a list of all products stored in the database in a tabular format.
3. **Edit Products:** Modify product details such as name, price, and category.
4. **Delete Products:** Remove unwanted products from the database.
5. **Navigation:** Buttons to easily navigate between pages.

---

### Folder Structure
```
/project-folder
├── config/
│   └── config.php    // Contains the database connection and CRUD logic
├── index.php         // Main page for adding products
├── showdata.php      // Displays the product list
├── updatedata.php    // Page for updating product details
└── README.md         // Documentation file
```

---

### Requirements
- **Server:** Localhost (e.g., XAMPP, WAMP, or MAMP)
- **PHP:** Version 7.4 or higher
- **MySQL:** Version 5.7 or higher
- **Bootstrap:** Version 5.3.3 (CDN included in the project)

---

### Setup Instructions
1. **Clone or Download** the repository to your local machine.
2. Place the project folder in your web server's root directory (`htdocs` for XAMPP).
3. **Import Database:**
   - Open **phpMyAdmin** in your browser.
   - Create a new database named `student`.
   - Import the following SQL script to create the necessary table:
     ```sql
     CREATE TABLE product (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         prize FLOAT NOT NULL,
         category VARCHAR(255) NOT NULL
     );
     ```
4. Update the database credentials in `config/config.php` if necessary:
   ```php
   private $localhost = "localhost";
   private $username = "root";
   private $password = ""; // Add your password if any
   private $database = "student";
   ```
5. **Run the Application:**
   - Open your browser and navigate to: `http://localhost/project-folder/index.php`.

---

### Files Description
#### `index.php`
- Main page to add new products.
- Form to submit product details (name, price, category).

#### `showdata.php`
- Displays all products in a table.
- Includes options to **Edit** or **Delete** products.

#### `updatedata.php`
- Handles the updating of product details.
- Pre-fills the form with existing data for easy modification.

#### `config/config.php`
- Contains the `Config` class for:
  - Connecting to the database.
  - CRUD operations (`insertDatabase`, `selectDatabase`, `removeProduct`, `updateProduct`).

---

### Functionality Workflow
1. **Adding Products:**
   - Input product details in `index.php` form.
   - Data is inserted into the `product` table using the `insertDatabase` method.

2. **Viewing Products:**
   - `showdata.php` fetches all records from the `product` table via the `selectDatabase` method.

3. **Editing Products:**
   - Click **Edit** on a product row in `showdata.php`.
   - Product data is passed to `updatedata.php` through session variables.
   - Modify the details and submit to update the database.

4. **Deleting Products:**
   - Click **Delete** on a product row in `showdata.php`.
   - The product is removed using the `removeProduct` method.

---

### Dependencies
- **PHP Sessions:** Used to pass data between pages.
- **Bootstrap 5.3.3:** For styling and responsive layout.

---


### Notes
- Ensure the database credentials are correct to avoid connection errors.
- Use `header('Refresh:0');` or `header('Location: ...')` after database operations to reflect changes immediately.

---

## Screenshots

### Add Product Page
A form to input new product details.

![scn1](https://github.com/user-attachments/assets/75911d90-010e-4c62-b89d-4804655fbd37)

### Product List
A table displaying all the stored products.

![scn2](https://github.com/user-attachments/assets/990091ec-ca85-49b5-9c2d-c85e79efb956)

### Update Product Page
A form to input update product details..

![scn3](https://github.com/user-attachments/assets/4fbff67c-a31d-4005-925d-ab15d9181fe0)

---

## Video Demonstration

Watch the video demonstration of the project to see it in action:


https://github.com/user-attachments/assets/6c4a0980-dcc3-4723-bccf-1e089acd940e


---

## License

This project is open-source and free to use.

---

## Author

- **Akshar Patel**
- Contact: aksharpatel030306@gmail.com

