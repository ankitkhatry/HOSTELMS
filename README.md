# Hostel Management System 🏠

A simple **Hostel Management System** built using **PHP and MySQL** to perform CRUD (Create, Read, Update, Delete) operations for managing residents. 🛠️

---

## Features 🌟
- **Add new residents** ➕
- **View all residents** 👀
- **Update resident details** ✏️
- **Delete residents** 🗑️
- **Session-based login system** 🔐

---

## Technologies Used 💻
- **PHP** (Core for backend processing) 🐘
- **MySQL** (Database for storing resident details) 🗃️
- **HTML & CSS** (Frontend for user interface) 🎨
- **Bootstrap** (For responsive design) 📱

---

## Installation Guide 📥

### 1. Clone the Repository 📂
```bash
git clone https://github.com/ankitkhatry/HOSTELMS.git
```

### 2. Configure Database ⚙️
- Import the provided `db.sql` file into MySQL.
- Update `connection.php` with your database credentials:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hostel";
$conn = new mysqli($servername, $username, $password, $database);
```

### 3. Start PHP Server �
If using **XAMPP**, place the project inside the `htdocs` folder and start Apache & MySQL.
```sh
php -S localhost:8000
```
Then, open `http://localhost/HOSTELMS/` in a browser. 🌐

---

## File Structure
```
📂 hostel-management-system
├── 📄 index.php           # Display and add residents
├── 📄 update.php          # Update resident details
├── 📄 connection.php      # Database connection file
├── 📄 style.css           # Styling for UI
├── 📄 login.php           # Login system
├── 📄 db.sql              # Database import file
└── 📄 README.md           # Documentation
```

---

## Usage 🚀
1. Open `index.php` to view and manage residents. 👨‍💻
2. Click **Add** to insert a new resident. ➕
3. Click **Update** to edit resident details. ✏️
4. Click **Delete** to remove a resident. 🗑️

---

## License 📜
This project is **open-source** and free to use. 🆓

---

💡 **Contributions are welcome!** Feel free to submit a pull request if you'd like to improve this project.

Made with ❤️ by [Ankit](https://www.ankitak.com.np) 👨‍💻
