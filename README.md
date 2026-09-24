# 🎓 Go School - School Management System (ERP)

A web-based School Management and ERP solution built with PHP, MySQL, Bootstrap, and jQuery. It provides dedicated role-based portals for School Owners, Administrators, Teachers, and Students.

---

## 🚀 Key Features by Portal

### 👑 School Owner Portal
- High-level student and teacher count analytics.
- Payroll tracking and teacher payments overview.
- Institutional notice broadcasts.

### 🛠️ Administrator Portal
- **Student & Teacher Management**: Add, update, view, and remove student and teacher profiles.
- **Academics**: Manage classes, subjects, syllabus files, and class timetables.
- **Attendance & Results**: Class-wise attendance tracking and examination marks entry.
- **Transport Fleet**: Manage bus fleet, routes, bus stops, timings, and bus staff.
- **Notice Board & Reminders**: Publish announcements and maintain operational reminders.

### 🧑‍🏫 Teacher Portal
- **Attendance Management**: Mark and review daily student attendance.
- **Marks & Examination**: Input and manage subject scores for exams.
- **Study Material**: Upload class study notes and reference syllabus.
- **Leave Management**: Apply for leaves and track approval status.

### 🎒 Student Portal
- **Academic Dashboard**: Profile overview, timetable, and attendance metrics pie-chart.
- **Curriculum & Materials**: Access class syllabus and downloadable study notes.
- **Bus Tracking**: View assigned bus routes, stops, arrival schedules, and service requests.
- **Fees**: Fee structure breakdown and payment receipts.

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.x (procedural / prepared statements)
- **Database**: MySQL / MariaDB (`_sms`)
- **Frontend**: HTML5, CSS3, JavaScript (ES6), jQuery, Bootstrap 5
- **Icons & Styling**: Boxicons, Font Awesome, Bootstrap Icons
- **Mailing**: PHPMailer (SMTP with OTP password recovery)

---

## 📋 Installation & Setup

### 1. Prerequisites
- A local web server stack such as **XAMPP**, **WAMP**, or **Laragon** (PHP 8.0+ and MySQL).
- Composer (optional, PHPMailer source is bundled).

### 2. Clone the Repository
Clone the repository into your web server's root directory (`htdocs` for XAMPP):
```bash
git clone https://github.com/Amar1604/go-school.git
```

### 3. Database Setup
1. Start **Apache** and **MySQL** from your server control panel.
2. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Create a new database named `_sms`.
4. Import the schema file located at:
   ```
   database/_sms.sql
   ```

### 4. Configure Application

#### Database Configuration:
Check `assets/config.php` (refer to `assets/config.example.php` for reference):
```php
$server = "localhost";
$user = "root";
$password = "";
$db = "_sms";
```

#### Email (SMTP) Configuration:
Create `assets/mail_config.php` using the provided template `assets/mail_config.example.php`:
```php
<?php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your_email@gmail.com');
define('SMTP_PASS', 'your_gmail_app_password');
define('SMTP_SECURE', 'tls');
define('SMTP_FROM_EMAIL', 'your_email@gmail.com');
define('SMTP_FROM_NAME', 'Go School ERP');
?>
```

### 5. Launch
Open your web browser and navigate to:
```
http://localhost/go-school/
```

---

## 🔐 Default Demo Accounts

All pre-seeded demo accounts use the standard password hash from `_sms.sql`:

| Role | Email |
| :--- | :--- |
| **Admin** | `admin@gmail.com` |
| **Teacher** | `teacher@gmail.com` |
| **Student** | `student@gmail.com` |
| **Owner** | `owner@gmail.com` |

---

## 📁 Project Structure

```
go-school/
├── assets/                  # Central API endpoints, AJAX handlers, and config
├── database/                # Database dump (_sms.sql)
├── admin_panel/             # Administrator dashboard & management pages
├── teacher_panel/           # Teacher dashboard & classroom tools
├── student_panel/           # Student portal & view tools
├── owner_panel/             # School owner overview & payroll
├── phpmailer/               # PHPMailer library
├── images/ & screenshots/   # App assets & preview images
├── index.php                # Landing page
├── login.php                # Unified login portal
└── forgotPassword.php       # OTP password recovery
```

---

## 📄 License
This project is open-source and available for educational and administrative development.
