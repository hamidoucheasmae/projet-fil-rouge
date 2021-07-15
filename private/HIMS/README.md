# HIMS

Hospital Information Management System - Supports most of the standard HIMS functionalities:

* Staff Management
* Appointment Management
* Complaint Portal
* Staff Dashboard
* Staff Recruitment
* Hardware Management
* Report Management and Bills
* Mailing Service
* Emergency Patient
* Room Management

# KEY POINTS

* Back-End Technologies: Node Js + MySQL
* Front-End Technologies: HTML, CSS, BootStrap, JavaScript, EJS
* Authentication provided using passport-js
* Password Hashed using bcrypt-js
* Mailing Service provided using nodemailer



# INSTALL
* `cd ToDo-List`

* Make sure to have Node Js installed in your system. [Optional - Install npm nodemon]

* Run `npm install`

* Make sure to have all dependencies on your local folder, or installed globally in your system

* Import the file `database.sql` in your mySQL.

* `db_controller` controls the database operations. Specify your database details there.

* Make sure the server details are already in the table. If not, add it using the query:
  `INSERT INTO server VALUES('<email>', '<pass>', '<proxy:port>')`
  
* RUN `node main.js`

* Open `http://localhost:3000/home` in any browser



