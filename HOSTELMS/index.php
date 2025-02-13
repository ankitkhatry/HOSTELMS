<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

include('connection.php');

if (isset($_POST['add'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $room = $_POST['room'];
    $status = $_POST['status'];

    $sql = "INSERT INTO residents (first_name, last_name, room, status) VALUES ('$first_name', '$last_name', '$room', '$status')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM residents WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hostel Management System</h1>
    </header>

    <div class="container">
        <h2>Add New Resident</h2>
        <form action="index.php" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="number" name="room" placeholder="Room Number" required>
            <select name="status" required>
                <option value="" disabled selected>Status</option>
                <option value="Student">Student</option>
                <option value="Staff">Staff</option>
            </select>
            <button type="submit" name="add">Add</button>
        </form>

        <h2>Resident List</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Room Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection.php');
                $result = $conn->query("SELECT * FROM residents");

                if (!$result) {
                    die("Query failed: " . $conn->error);
                }

                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['first_name']) ?></td>
                        <td><?= htmlspecialchars($row['last_name']) ?></td>
                        <td><?= htmlspecialchars($row['room']) ?></td>
                        <td><?= htmlspecialchars($row['status']) ?></td>
                        <td>
                            <a href="index.php?delete=<?= $row['id'] ?>" class="delete-btn">Delete</a>
                            <a href="update.php?id=<?= $row['id'] ?>" class="update-btn">Update</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
