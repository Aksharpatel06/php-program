

# PHP RESTful API with CRUD Operations

## Overview

This project demonstrates the creation of a PHP-based RESTful API for performing CRUD operations on a database with three tables: `Students`, `Courses`, and `Enrollments`. It is designed following best practices, with a clear structure and error handling.

---

## Features

### API Endpoints:
1. **Students Table**  
   - `POST /api/students`: Create a new student.  
   - `GET /api/students`: Retrieve all students.

2. **Courses Table**  
   - `POST /api/courses`: Create a new course.  
   - `PUT /api/courses/{id}`: Update a course description.

3. **Enrollments Table**  
   - `POST /api/enrollments`: Enroll a student in a course.  
   - `DELETE /api/enrollments/{id}`: Delete an enrollment.

### HTTP Methods Used:
- **POST**: For inserting new data.
- **GET**: For retrieving data.
- **PUT**: For updating existing data.
- **DELETE**: For deleting data.

---

## Database Schema

### Tables:

#### Students
| Column  | Type         | Description         |
|---------|--------------|---------------------|
| id      | INT (PK)     | Auto-increment ID   |
| name    | VARCHAR(255) | Student name        |
| email   | VARCHAR(255) | Student email       |
| phone   | VARCHAR(15)  | Student phone number|

#### Courses
| Column       | Type         | Description               |
|--------------|--------------|---------------------------|
| id           | INT (PK)     | Auto-increment ID         |
| course_name  | VARCHAR(255) | Course name               |
| description  | TEXT         | Course description        |

#### Enrollments
| Column         | Type         | Description                                   |
|----------------|--------------|-----------------------------------------------|
| id             | INT (PK)     | Auto-increment ID                             |
| student_id     | INT (FK)     | References `Students(id)`                    |
| course_id      | INT (FK)     | References `Courses(id)`                     |
| enrollment_date| DATE         | Date of enrollment                           |

---

## Folder Structure

```plaintext
project-root/
│
├── api/
│   ├── students.php       # Endpoints for Students
│   ├── courses.php        # Endpoints for Courses
│   ├── enrollments.php    # Endpoints for Enrollments
│
├── config/
│   └── database.php       # Database connection

```

---

## Setup Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/php-crud-api.git
   cd php-crud-api
   ```

2. **Set Up the Database:**
   - Import the provided `database.sql` file into your MySQL server.

3. **Configure Database Connection:**
   - Update `config/database.php` with your MySQL credentials.

4. **Run the Server:**
   - Use a local server like XAMPP or WAMP and place the project in the `htdocs` folder.
   - Access the APIs via `http://localhost/php-crud-api/api/`.

5. **Test APIs:**
   - Use Postman or any API testing tool.
   - Ensure all endpoints function as expected.

---

## Testing

Each API has been tested thoroughly using Postman for proper error handling, validations, and success scenarios. Error responses include appropriate HTTP status codes and messages.

---

## Video Walkthrough

A video showcasing the project is available, covering:
- API creation and folder structure.



https://github.com/user-attachments/assets/d1733788-0665-4e0c-bbeb-89b786da453e


Testing each API in Postman.


https://github.com/user-attachments/assets/b49fbe4e-460f-4d39-b545-5f1737502bf9


## Feedback and Contributions

For issues or feature suggestions, open an issue in this repository.

---

**Submission Deadline:** 2 Hours & 30 Minutes, 12/12/2022
```  

Let me know if you need adjustments or additional content!
