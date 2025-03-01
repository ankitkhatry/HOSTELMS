<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hostel Management System</h1>
    </header>

    <div class="login-container">
        <h2>Login</h2>
        <form onsubmit="return validateLogin(event)">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateLogin(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'admin' && password === '123') {
                alert('Login successful!');
                window.location.href = 'index.php';
            } else {
                alert('Invalid username or password');
            }
        }
    </script>
</body>
</html>
