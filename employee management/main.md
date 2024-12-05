# Employee Management API

This project provides a simple PHP-based REST API for managing employees in a MySQL database. The API supports the following operations:

- **Create**: Add a new employee record.
- **Read**: Retrieve all employee records.
- **Update**: Update an existing employee's details.
- **Delete**: Remove an employee record.

---

## Features

- **CRUD Functionality**: Perform Create, Read, Update, and Delete operations on employee records.
- **RESTful API**: Supports HTTP methods `GET`, `POST`, `PUT`, `PATCH`, and `DELETE`.
- **Database Connectivity**: Connects to a MySQL database to store and manage data.

---

## API Endpoints

1. **Create Employee**
   - **Method**: `POST`
   - **Endpoint**: `/add_employee`
   - **Body Parameters**:
     - `name`: Employee's name (string)
     - `email`: Employee's email (string)
     - `department_id`: Department ID (integer)
   - **Response**:
     - Success: `{"status": "Record insertion successful!!"}`
     - Failure: `{"error": "Record insertion failed!!"}`

2. **Retrieve Employees**
   - **Method**: `GET`
   - **Endpoint**: `/get_employees`
   - **Response**:
     - Success: Returns an array of employee records.
     - Failure: `{"err": "Only GET method is allowed !!"}`

3. **Update Employee**
   - **Method**: `PUT` or `PATCH`
   - **Endpoint**: `/update_employee`
   - **Body Parameters**:
     - `id`: Employee ID (integer)
     - `name`: Employee's name (string)
     - `email`: Employee's email (string)
     - `department_id`: Department ID (integer)
   - **Response**:
     - Success: `{"status": "Product updated successfully!"}`
     - Failure: `{"error": "Product updation failed!"}`

4. **Delete Employee**
   - **Method**: `DELETE`
   - **Endpoint**: `/delete_employee`
   - **Body Parameters**:
     - `id`: Employee ID (integer)
   - **Response**:
     - Success: `{"status": "Product deleted successfully!"}`
     - Failure: `{"error": "Failed to delete product!"}`

---

## Prerequisites

- PHP 7.0+ 
- MySQL
- Apache or any compatible server environment

---

## Setup Instructions

1. Clone the repository to your local machine.
2. Configure the database connection in `config.php`:
   ```php
   private $localhost = "localhost";
   private $username = "root";
   private $password = "";
   private $database = "employee";
   ```
3. Import the `employee` database structure.
4. Set up your server to point to the project directory.
5. Use tools like **Postman** to interact with the API.

---

## Notes

- Always validate user input to avoid SQL injection risks.
- Customize CORS headers if integrating with a frontend.

---

## License

This project is open source and available under the MIT License.
